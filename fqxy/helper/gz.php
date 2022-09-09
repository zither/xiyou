<?php

function zcid()
{
    $week = [7, 1, 2, 3, 4, 5, 6];
    $day = date('w');
    $zcid = $week[$day];
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

function gz06_cz(int $gjid)
{
    $db = DB::instance();
    $bpmz = $db->get('all_bp', 'bpmz', ['bpid' => $gjid]);
    $data = [
        'fsgjid' => $gjid,
        'fsgj' => $bpmz,
        'fssj' => date('Y-m-d H:i:s'),
    ];
    $db->update('gz06', $data, ['id' => 1]);
}