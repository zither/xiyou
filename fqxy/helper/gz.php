<?php

function zcid(bool $real_id = false)
{
    $week = [7, 1, 2, 3, 4, 5, 6];
    $day = date('w');
    $zcid = $week[$day];
    if ($real_id) {
        return $zcid;
    }
    return $zcid == 6 ? 0 : $zcid;
}

function zlbp(int $zcid)
{
    if (!$zcid) {
        return 0;
    }
    $db = DB::instance();
    $xx = $db->get('gz01', '*', ['zcid' => $zcid]);
    if (empty($xx)) {
        $db->insert('gz01', [
            'zcid' => $zcid,
            'zlgj' => '',
            'zlgjid' => 0,
            'gjjz' => '',
            'gjjzid' => 0,
            'czz' => '',
            'czzid' => 0,
            'zlsj' => '',
        ]);
        return 0;
    }
    return $xx['zlgjid'];
}

function zlbp_cz(int $zcid)
{
    $bpid = zlbp($zcid);
    if ($bpid) {
       $data = [
           'zlgj' => '',
           'zlgjid' => 0,
           'gjjz' => '',
           'gjjzid' => 0,
           'czz' => '',
           'czzid' => 0,
           'zlsj' => '',
       ];
       DB::instance()->update('gz01', $data, ['zcid' => $zcid]);
    }
}

function zlbpxx(int $zcid)
{
    $db = DB::instance();
    $xx = $db->get('gz01', '*', ['zcid' => $zcid]);
    if (empty($xx)) {
        zlbp_cz($zcid);
        $xx = $db->get('gz01', '*', ['zcid' => $zcid]);
    }
    return $xx;
}

function zlzc(int $zcid, int $bpid, int $wjid)
{
    $db = DB::instance();
    $xx = $db->get('gz01', '*', ['zcid' => $zcid]);
    if (!empty($xx) && $xx['zlgjid'] == $bpid) {
        return true;
    }
    $bpxx = $db->get('all_bp', '*', ['bpid' => $bpid]);
    $wjmz = $db->get('all_zt', 'username', ['wjid' => $wjid]);
    $data = [
        'zlgj' => $bpxx['bpmz'],
        'zlgjid' => $bpxx['bpid'],
        'gjjz' => $bpxx['xbpmz'],
        'gjjzid' => $bpxx['xwjid'],
        'czz' => $wjmz,
        'czzid' => $wjid,
        'zlsj' => date('Ymd'),
    ];
    if (empty($xx)) {
        $data['zcid'] = $zcid;
        $db->insert('gz01', $data);
        return true;
    }
    $db->update('gz01', $data, ['zcid' => $zcid]);
    gz06_cz($bpxx['bpid']);
    //增加重置位置判断值
    $db->update('gz04', ['czwz' => 1], ['cjsj' => date('Ymd')]);
    return true;
}

function gz_xtbl(int $id, int $m = 0, int $d = 0)
{
    //查询国战系统变量
    $db = DB::instance();
    $xtbl = $db->get('xtbl', '*', ['id' => $id]);
    if (empty($xtbl)) {
        $mrz1 = $id == 1 ? date('n') : '';
        $mrz2 = $id == 1 ? date('j') : '';
        $m= $m ?? $mrz1;
        $d= $d ?? $mrz2;
        $xtbl = [
            'id' => $id,
            'bl1' => $m,
            'bl2' => $d,
        ];
        $db->insert('xtbl', $xtbl);
    } else {
        // 如果传入了日期，则直接更新
        if ($m && $d) {
            $db->update('xtbl', ['bl1' => $m, 'bl2' => $d], ['id' => $id]);
            $xtbl['bl1'] = $m;
            $xtbl['bl2'] = $d;
        }
    }
    return [
        '月' => $xtbl['bl1'],
        '日' => $xtbl['bl2'],
    ];
}

function gz01(int $zcid)
{
    $db = DB::instance();
    $gz01 = $db->get('gz01', '*', ['zcid' => $zcid]);
    return $gz01;
}

function gz03(int $gjid = 0, string $cjsj = null, array $order = [])
{
    $db = DB::instance();
    if ($gjid) {
        $tj = [ 'gjid' => $gjid];
        if ($cjsj) {
            $tj['cjsj'] = $cjsj;
        }
        return $db->get('gz03', '*', $tj);
    }
    $tj = [
        'ORDER' => ['rjf' => 'DESC'],
    ];
    if ($cjsj) {
        $tj['cjsj'] = $cjsj;
    }
    if ($order) {
        $tj['ORDER'] = $order;
    }
    return $db->select('gz03', '*', $tj);
}

function gz03_zj(int $gjid, int $jf)
{
    $db = DB::instance();
    $db->update('gz03', ['zjf[+]' => $jf, 'rjf[+]' => $jf], ['gjid' => $gjid]);
}

function gz04(int $wjid)
{
    $db = DB::instance();
    return $db->get('gz04', '*', ['wjid' => $wjid]);
}

function gz04_zj(int $wjid, int $jf)
{
    $db = DB::instance();
    $db->update('gz04', ['zjf[+]' => $jf, 'rjf[+]' => $jf], ['wjid' => $wjid]);
}

function gz04_sw(int $wjid)
{
    $db = DB::instance();
    $sw = $db->get('gz04', 'swcs', ['wjid' => $wjid]);
    $sw -= 1;
    if ($sw >= 0) {
        $db->update('gz04', [
            'swcs[-]' => 1,
            'swsj' => date('Y-m-d H:i:s'),
        ], ['wjid' => $wjid]);
    }
    return $sw >= 0 ? $sw : 0;
}

function gz04_swsj_timestamp(int $wjid)
{
    $db = DB::instance();
    $swsj = $db->get('gz04', 'swsj', ['wjid' => $wjid]);
    return strtotime($swsj);
}

function gz05(int $id = 0, string $time = null)
{
    $db = DB::instance();
    if (!$id) {
        return $db->select('gz05', '*');
    }

    $gz05 = $db->get('gz05', '*', ['id' => $id]);
    if (empty($gz05)) {
        if (is_null($time)) {
            return [];
        }
        $db->insert('gz05', ['id' => $id, 'gztime' => $time]);
        return ['id' => $id, 'gztime' => $time];
    } else {
        if (is_null($time)) {
            return $gz05;
        }
        $db->update('gz05', ['gztime' => $time], ['id' => $id]);
        $gz05['gztime'] = $time;
        return $gz05;
    }
}

function gz06()
{
    $db = DB::instance();
    $gz06 = $db->get('gz06', '*', ['id' => 1]);
    if (empty($gz06)) {
        $data = [
            'id' =>1,
            'fsgjid' => 0,
            'fsgj' => '',
            'fssj' => date('Y-m-d H:i:s'),
        ];
        $db->insert('gz06', $data);
        $data['id'] = 1;
        $gz06 = $data;
    }
    return $gz06;
}

function gz06_cz(int $gjid = 0)
{
    $db = DB::instance();
    if ($gjid) {
        $bpmz = $db->get('all_bp', 'bpmz', ['bpid' => $gjid]);
    } else {
        $bpmz = '';
    }
    $data = [
        'fsgjid' => $gjid,
        'fsgj' => $bpmz,
        'fssj' => date('Y-m-d H:i:s'),
    ];
    $db->update('gz06', $data, ['id' => 1]);
}


/**
 * 检查是否是新的国战周期，新周期需要重置周积分榜
 *
 * @param string $date
 * @param string|null $date2
 * @return bool
 * @throws Exception
 */
function new_week(string $date, string $date2 = null)
{
    $timezone = new DateTimeZone('Asia/ShangHai');
    $dateTime = DateTime::createFromFormat('Ymd', $date, $timezone);

    if ($date2) {
        $dateTime2 = DateTime::createFromFormat('Ymd', $date2, $timezone);
    } else {
        $dateTime2 = new DateTime('now', $timezone);
    }

    $is_sunday = $dateTime2->format('w') == 0;
    if ($is_sunday) {
        return true;
    }
    if ($dateTime->format('oW') == $dateTime2->format('oW')) {
        return false;
    }
    return true;
}

/**
 * 返回国战同周期的所有日期
 *
 * @return array
 * @throws Exception
 */
function cjsj_arr()
{
    $is_sunday = date('w') == 0;
    if ($is_sunday) {
        $monday = strtotime('+1 day');
    } else {
        $monday = strtotime('monday this week');
    }
    $date = new DateTime();
    $date->setTimestamp($monday);
    $diff_days = [ -1, 0, 1, 2, 3, 4, ];
    $cjsj_arr = [];
    foreach ($diff_days as $v) {
        $new_date = clone $date;
        if ($v < 0) {
            $new_date->sub(new DateInterval('P1D'));
        } elseif ($v > 0) {
            $new_date->add(new DateInterval(sprintf('P%dD', $v)));
        }
        $cjsj_arr[] = $new_date->format('Ymd');
    }
    return $cjsj_arr;
}

function zczf(): array
{
    return include XY_DIR . '/data/zczf.php';
}

function wj_zczf(int $wjid): array
{
    $db = DB::instance();
    $bpid = $db->get('all_zt', 'bpid', ['wjid' => $wjid]);
    if (!$bpid) {
        return  [];
    }
    $zcids = $db->select('gz01', 'zcid', ['zlgjid' => $bpid]);
    if (empty($zcids)) {
        return [];
    }

    $zf = [
        'hp' => 0,
        'fy' => 0,
        'gj' => 0,
        'mg' => 0,
        'bg' => 0,
        'bf' => 0,
        'hg' => 0,
        'hf' => 0,
        'lg' => 0,
        'lf' => 0,
    ];
    $zf_arr = zczf();
    foreach ($zcids as $id) {
        if (!empty($zf_arr[$id])) {
            $v = $zf_arr[$id];
            $zf['hp'] += $v['hp'];
            $zf['fy'] += $v['fy'];
            $zf['gj'] += $v['gj'];
            $zf['mg'] += $v['mg'];
            $zf['bg'] += $v['bg'];
            $zf['bf'] += $v['bf'];
            $zf['hg'] += $v['hg'];
            $zf['hf'] += $v['hf'];
            $zf['lg'] += $v['lg'];
            $zf['lf'] += $v['lf'];
        }
    }

    return $zf;
}
