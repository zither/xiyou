<?php

// 任务状态:
// 0 不可接
// 1 可接
// 2 已接受
// 3 条件已完成
// 4 已完成
define('RWBL_0', 0);
define('RWBL_1', 1);
define('RWBL_2', 2);
define('RWBL_3', 3);
define('RWBL_4', 4);

/**
 * 判断任务状态
 *
 * @param int $wjid 玩家ID
 * @param int $rwid 任务ID
 * @param int $rwfl 任务分类
 * @param array $rwxx 任务信息
 *
 * @return int 判断结果
 */
function rwbl(int $wjid, int $rwid, int $rwfl, array &$rwxx = [])
{
    $rwxx = rwxx($rwid);
    $db = DB::instance();
    $rw = $db->get('yxrw', '*', [
        'wjid' => $wjid,
        'rwid' => $rwid,
        'rwfl' => $rwfl
    ]);
    if (!empty($rw)) {
        return $rw['rwbl'];
    }

    $rwbl = 0;
    //任务不存在
    if (empty($rwxx)) {
        return $rwbl;
    }
    //任务存在，且没有条件限制
    if (empty($rwxx['tj'])) {
        $rwbl = 1;
        return $rwbl;
    }
    //判断条件
    $rwbl = pd($wjid, $rwxx['tj']);
    return $rwbl;
}

function rwxx(int $rwid)
{
    $rwsz = include __DIR__ . '/../data/rw.php';
    foreach ($rwsz as $v) {
        if ($v['id'] == $rwid) {
            return $v;
        }
    }
    return null;
}

function rwts(int $wjid, int $rwid, int $rwfl, array &$rwxx = [])
{
    $ts = '';
    $rwbl = rwbl($wjid, $rwid, $rwfl, $rwxx);
    if (!$rwbl || $rwbl > RWBL_3) {
        return $ts;
    }

    return ts($rwbl);
}

/**
 * 根据不同字段判断条件
 *
 * @param int $wjid
 * @param array $tj
 *
 * @return bool|int
 */
function pd(int $wjid, array $tj)
{
    $pass = 1;
    //条件限制判断
    foreach ($tj as $k => $v) {
        if (!is_array($v) && !zpd($wjid, $k, $v)) {
            $pass = 0;
            break;
        }
        $k = strtolower($k);
        if ($k != 'and' ||  $k != 'or') {
            continue;
        }

        $and = $k == 'and' ? 1 : 0;
        $pd_arr = [];
        foreach ($v as $zk => $zv) {
            $pd_arr[] = zpd($wjid, $zk, $zv);
        }
        if ($and) {
            $pass = !in_array(0, $pd_arr);
        } else {
            $pass = in_array(1, $pd_arr);
        }
    }
    return $pass;
}

/**
 * 判断单个子条件
 *
 * @param int $wjid
 * @param string $key
 * @param $value
 *
 * @return int
 */
function zpd(int $wjid, string $key, $value)
{
    $db = DB::instance();
    $pass = 1;
    switch ($key) {
        //检查等级判断
        case 'dj':
            $dj = $db->get('all_zt', 'dj', ['wjid' => $wjid]);
            if ($dj < $value) {
                $pass = 0;
            }
            break;
    }
    return $pass;
}

/**
 * 集中操作函数，根据条件执行
 *
 * @param int $wjid
 * @param array $arr
 */
function cz(int $wjid, array $arr)
{
    //银两加
    if ($arr['yl']) {
        $yl1 = $arr['yl'];
        $wwpsl = $yl1;
        include(XY_DIR . "/pz/ini_pz03.php");
    }

    //物品加
    if (!empty($arr['wp'])) {
        $wpdz1 = $wpdz2 = $wpdz3 = $wpdz4 = $wpdz5 = [];
        foreach ($arr['wp'] as $v) {
            $wpdz1[] = $v['mz'];//名字
            $wpdz2[] = $v['fl'];//物品分类
            $wpdz3[] = $v['id'];//物品id
            $wpdz4[] = $v['sl'];//	量
            $wpdz5[] = 1;//	重量
        }
        include(XY_DIR . "/rwmap/rwget.php");
    }

    //经验加放在最后，防止直接中断流程
    if ($arr['jy']) {
        $jy = $arr['jy'];
        include(XY_DIR . "/pz/ini_pzz023.php");
    }
}

/**
 * 显示 npc 任务提示
 *
 * @param $wjid
 * @param $npc_id
 * @return string
 */
function npc_ts($wjid, $npc_id)
{
    $ts = '';
    //获取 npc 所有任务
    $rwnpc = include XY_DIR . '/data/npcrw.php';
    //没有任务直接返回空
    if (empty($rwnpc[$npc_id])) {
        return $ts;
    }

    //当前npc任务数组
    $npc_rw_arr = $rwnpc[$npc_id];
    //所有任务编号
    $rwid_arr = [];
    //任务变量为 RWBL_1 的任务可能不存在于数据库中，需要单独检查接受条件
    $xrw_ids = [];
    //任务变量哈希表，值为当前npc需要显示的任务变量数组
    $rwbl_map = [];
    foreach ($npc_rw_arr as $v) {
        $rwid_arr[] = $v['rwid'];
        $rwbl_map[$v['rwid']] = $v['rwbl'];
        foreach ($v['rwbl'] as $bl) {
            if ($bl == 1) {
                $xrw_ids[] = $v['rwid'];
            }
        }
    }

    //检查是否有已接但未完成的任务
    $db = DB::instance();
    $rw_arr = $db->select('yxrw', '*', ['wjid' => $wjid, 'rwid' => $rwid_arr]);
    //已接任务编号数组
    $ids = [];
    $rwbl = RWBL_0;
    foreach ($rw_arr as $v) {
        $ids[] = $v['rwid'];
        //任务需要显示提示的变量数组
        $bl = $rwbl_map[$v['rwid']];
        //如果有未完成任务且在任务变量在当前npc显示列表中，更新任务变量，取任务变量最大值作为提示依据
        if ($rwbl < $v['rwbl'] && $v['rwbl'] != RWBL_4 && in_array($v['rwbl'], $bl)) {
            $rwbl = $v['rwbl'];
        }
        //只要有一个任务处于可提交状态，直接中断循环
        if ($rwbl == RWBL_3){
            break;
        }
    }


    // 没有已接且未完成的任务，继续检查是否有未接任务
    $wjrw_ids = array_diff($xrw_ids, $ids);
    if ($rwbl == RWBL_0 && !empty($wjrw_ids)) {
        // 获取所有未接任务信息数组
        $rwxx_arr = [];
        foreach ($wjrw_ids as $v) {
            $rwxx = rwxx($v);
            if (!empty($rwxx)) {
                $rwxx_arr[] = rwxx($v);
            }
        }
        if (!empty($rwxx_arr)) {
            //依次判断接受条件，若任务可接，直接中断循环，显示提示
            foreach ($rwxx_arr as $v) {
                if (pd($wjid, $v['tj'])) {
                    $rwbl = RWBL_1;
                    break;
                }
            }
        }
    }

    if ($rwbl) {
        $ts = ts($rwbl);
    }

    return $ts;
}


/**
 * 显示 npc 任务列表
 *
 * @param int $wjid
 * @param int $npc_id
 * @param int $cmid
 * @param array $cdid
 * @param array $npc
 *
 * @return string
 */
function npc_rw(int $wjid, int $npc_id, string $a1, int &$cmid, array &$cdid, array &$clj, array &$npc)
{
    //任务列表
    $rwlb = '';
    //获取 npc 所有任务
    $rwnpc = include XY_DIR . '/data/npcrw.php';
    //没有任务直接返回空
    if (empty($rwnpc[$npc_id])) {
        return $rwlb;
    }

    $npc_rw_arr = $rwnpc[$npc_id];
    //所有任务编号
    $rwid_arr = [];
    //任务变量为 RWBL_1 的任务可能不存在于数据库中，需要单独检查接受条件
    $xrw_ids = [];
    $rwbl_map = [];
    foreach ($npc_rw_arr as $v) {
        $rwid_arr[] = $v['rwid'];
        $rwbl_map[$v['rwid']] = $v['rwbl'];
        foreach ($v['rwbl'] as $bl) {
            if ($bl == 1) {
                $xrw_ids[] = $v['rwid'];
            }
        }
    }

    //需要显示的任务数组
    $xsrw_arr = [];

    //检查是否有已接但未完成的任务
    $db = DB::instance();
    $rw_arr = $db->select('yxrw', '*', ['wjid' => $wjid, 'rwid' => $rwid_arr]);
    //已接任务编号数组
    $ids = [];
    foreach ($rw_arr as $v) {
        $rwid = $v['rwid'];
        $ids[] = $rwid;
        if (empty($rwbl_map[$rwid])) {
            continue;
        }
        if ($v['rwbl'] < RWBL_4 &&  in_array($v['rwbl'], $rwbl_map[$rwid])) {
            $xx = rwxx($rwid);
            $xx['rwbl'] = $v['rwbl'];
            $xsrw_arr[] = $xx;
        }
    }

    //继续检查是否有未接任务
    $wjrw_ids = array_diff($xrw_ids, $ids);
    if (!empty($wjrw_ids)) {
        foreach ($wjrw_ids as $v) {
            $rwxx = rwxx($v);
            if (empty($rwxx)) {
                continue;
            }
            //判断是否可接
            if (pd($wjid, $rwxx['tj'])) {
                $rwxx['rwbl'] = RWBL_1;
                $xsrw_arr[] = $rwxx;
            }
        }
    }

    if (empty($xsrw_arr)) {
        return $rwlb;
    }

    foreach ($xsrw_arr as $v) {
        $rwlb .= ts($v['rwbl']);
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = 686;
        $npc[] = $v['id'];
        $rwlb .= "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><span style='color: blue'>{$v['mz']}</font></a><br>";
    }

    return $rwlb;
}

/**
 * 显示任务提示
 *
 * @param $rwbl
 * @return string
 */
function ts($rwbl)
{
    $ts = '';
    if (!$rwbl || $rwbl > RWBL_3) {
        return $ts;
    }

    /** @var iniFile $iniFile */
    $iniFile = include __DIR__ . '/../ini/xtsz_ini.php';
    $tpbl = $iniFile->getItem('显示设置', '图片显示');

    if ($rwbl == RWBL_1) {
        // 可接受
        if ($tpbl == 1) {
            $img = './pic/ts/ts1.png';
            $ts .= '<img src="' . $img . ' "alt="图片"/>';
        } else {
            $ts .= "<span style='color: black'>！</span>";
        }
    } else {
        //已接受
        if ($tpbl == 1) {
            $img = './pic/ts/ts2.png';
            $ts .= '<img src="' . $img . ' "alt="图片"/>';
        } else {
            $ts .= "<span style='color: black'>？</span>";
        }
    }
    return $ts;
}