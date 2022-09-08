<!DOCTYPE html>
<html lang="zh">
<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>幻想西游</title>
    <link rel="shortcut icon" href="pic/ico/favicon.ico"/>
</head>
<body>
<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>
    <?php
    //时间统计开始计时
    $stime = microtime(true);

    include_once __DIR__ . '/../includes/constants.php';
    $configs = include XY_CONFIG_DIR . '/config.php';
    $error_reporting_level = $configs['debug'] ? E_ALL & ~E_NOTICE : 0;
    error_reporting($error_reporting_level);

    ini_set("date.timezone", "PRC");//时间效准代码

    // 兼容性代码，批量替换后消除报错
    include XY_DIR . '/sql/mysql.php';
    include XY_DIR . '/helper/rwpd.php';

    session_start();

    //系统维护10分钟(安全备份)
    //include("aqbf.php");
    $ip1 = $_SERVER['REMOTE_ADDR'];
    $ip2 = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '';
    $inina = $ip1 . ".ini";
    $path = './ip';
    $file = $path . "/" . $inina;
    if (!file_exists($file)) {
        file_put_contents($file, $ip1);
    }
    //初始化变量以及接收传过来的数据
    $a2 = "";
    $a1 = empty($_SESSION['sid']) ? '' : $_SESSION['sid'];
    $cmd = empty($_GET['cmd']) ? 0 : (int)$_GET['cmd'];
    $wjid = empty($_SESSION['uid']) ? 0 : $_SESSION['uid'];

    //调用iniclass文件
    include_once XY_DIR . '/class/iniclass.php';
    include_once XY_DIR . '/helper/show_message.php';
    include_once XY_DIR . '/helper/gz.php';
    include_once XY_DIR . '/helper/wj.php';

    $file = sprintf("%s/ache/%s/user.ini", XY_DIR, $wjid);
    if ($wjid && file_exists($file)) {
        //判断特征码是否合法 后面那一串验证数字hash
        include XY_DIR . '/ini/user_ini.php';
        $tzm = $iniFile->getItem('验证信息', '玩家游戏码');
        if ($tzm != $a1) {
            echo '#2';
            include("sx.php");
            exit;
        }

        //获取上次连接游戏时间
        //过快验证
        $stime1 = microtime(true);

        //调用sjyz.ini是否存在
        include(XY_DIR . "/ini/sjyz_ini.php");//(时间验证)

        $stime2 = ($iniFile->getItem('毫秒时间', '时间'));
        include(XY_DIR .  "/wp/funk1.php");
        $stime1 = calc($stime1, '1000', 'mul');
        $stime2 = calc($stime2, '1000', 'mul');
        $stime3 = calc($stime1, $stime2, 'sub');

        //判断刷新间隔是否大于100ms
        if ($stime3 > 100) {

            //判断玩家的验证码是否合法
            if ($wjid > 10000000) {
                //调用user.ini是否存在
                include(XY_DIR . "/ini/user_ini.php");

                //来源页面信息
                $kcmid = $iniFile->getItem('验证信息', 'cmid值');
                $knpc = $iniFile->getItem('验证信息', 'npc值');
                if ($kcmid == 0) {
                    $kcmid = 1;
                    $knpc = 0;
                    $iniFile->updItem('验证信息', ['cmid值' => $kcmid]);
                    $iniFile->updItem('验证信息', ['npc值' => $knpc]);
                }
                $iniFile->updItem('最后页面id', ['页面id' => $kcmid, 'npcid' => $knpc]);

                //当前页面信息
                $cljid = $iniFile->getItem('超链接值', $cmd);
                $npcc = $iniFile->getItem('超链接npc值', $cmd);
                if ($cljid == "") {
                    $cljid = 1;
                    $npcc = 0;
                }
                $iniFile->updItem('验证信息', ['cmid值' => $cljid]);
                $iniFile->updItem('验证信息', ['npc值' => $npcc]);

                $user = $iniFile->getCategory('验证信息');
                $xyid = "";
                $xyid = $user['uid'] ?? 0;
                $tzm = $user['玩家游戏码'];
                $b1 = $user['年'];
                $b2 = $user['月'];
                $b3 = $user['日'];
                $b4 = $user['时'];
                $b5 = $user['分'];
                $b6 = $user['秒'];
                $cid = $user['cmid值'];
                $xcid = $user['xcmid值'];
                $dcid = $user['dcmid值'];

                if ($cid == 0) {
                    $cid = 1;
                }

                // 初始化链接数组
                $cdid = $clj = $npc = [];
                //最小值
                $a4 = $dcid + 1;

                //cmd及超链接值
                $cmid = $dcid + 1;
                $cdid[] = $cmid;
                $clj[] = 2;
                $npc[] = 0;

            } else {
                echo '#1';
                //(失效)
                include("sx.php");
                exit;
            }


            //判断验证时间是否超过600秒
            $y = date('Y') * 1;
            $m = date('m') * 1;
            $d = date('d') * 1;
            $h = date('H') * 1;
            $i = date('i') * 1;
            $s = date('s') * 1;
            $xx = $y * 60 * 60 * 24 * 365 + $m * 60 * 60 * 24 * 30 + $d * 60 * 60 * 24 + $h * 60 * 60 + $i * 60 + $s;
            $yy = $b1 * 60 * 60 * 24 * 365 + $b2 * 60 * 60 * 24 * 30 + $b3 * 60 * 60 * 24 + $b4 * 60 * 60 + $b5 * 60 + $b6;
            $xxx = $xx - $yy;

            //if($xxx <=1200){
            //} else{
            //    echo '#3';
            //    include("sx.php");


            //exit;/
            //}

            //修改时间信息方便下次验证时间
            if ($cmd >= $xcid && $cmd <= $dcid || $cmd == 1) {
                $cmdd = $cid;
                $y = date('Y') * 1;
                $m = date('m') * 1;
                $d = date('d') * 1;
                $h = date('H') * 1;
                $i = date('i') * 1;
                $s = date('s') * 1;
                $iniFile->updItem('验证信息', ['年' => $y, '月' => $m, '日' => $d, '时' => $h, '分' => $i, '秒' => $s]);
            } else {
                $yymid = ($iniFile->getItem('最后页面id', '页面id'));
                // 检查角色性别和名字
                include("./ini/zt_ini.php");
                $jcmz = $iniFile->getItem('玩家信息', '玩家名字');
                $jcxb = $iniFile->getItem('玩家信息', '性别');
                if ($jcxb == 0) {
                    $cmdd = 297;
                } else if ($jcmz == '') {
                    $cmdd = 298;
                } else if ($yymid == 0) {
                    $cmdd = 1;
                } else if (
                    $yymid == 1 || $yymid == 458 || $yymid == 27 || $yymid == 28 || $yymid == 30 || $yymid == 31 || $yymid == 32 || $yymid == 33 || $yymid == 34 || $yymid == 37 || $yymid == 21 || $yymid == 38 || $yymid == 39
                    || $yymid == 40 || $yymid == 41 || $yymid == 55 || $yymid == 97 || $yymid == 108 || $yymid == 122 || $yymid == 124 || $yymid == 171 || $yymid == 185 || $yymid == 218 || $yymid == 212 || $yymid == 221 || $yymid == 224
                    || $yymid == 228 || $yymid == 235 || $yymid == 238 || $yymid == 241 || $yymid == 258 || $yymid == 259 || $yymid == 271 || $yymid == 276 || $yymid == 290 || $yymid == 292 || $yymid == 319 || $yymid == 369 || $yymid == 334
                    || $yymid == 423 || $yymid == 462 || $yymid == 463 || $yymid == 465 || $yymid == 468 || $yymid == 469 || $yymid == 474 || $yymid == 498 || $yymid == 501 || $yymid == 489 || $yymid == 490 || $yymid == 492 || $yymid == 506
                    || $yymid == 493 || $yymid == 494 || $yymid == 495 || $yymid == 496 || $yymid == 508 || $yymid == 510 || $yymid == 512 || $yymid == 514 || $yymid == 516 || $yymid == 537 || $yymid == 538 || $yymid == 539 || $yymid == 541
                    || $yymid == 542 || $yymid == 543 || $yymid == 544 || $yymid == 545 || $yymid == 548 || $yymid == 301 || $yymid == 580 || $yymid == 581 || $yymid == 680 || $yymid == 682)
                {
                    $cmdd = $yymid;
                } else {
                    $cmdd = 334;
                }
                $iniFile->updItem('验证信息', ['cmid值' => $cmdd]);
            }

            //////////////////////////////////////////////////数据结构///////////////////////////////////////
            //调用user.ini是否存在
            include("./ini/user_ini.php");
            $bugstime1 = calc($stime1, '10', 'mul');
            $bugx = ($iniFile->getItem('地图坐标', 'x'));
            $bugy = ($iniFile->getItem('地图坐标', 'y'));
            $bugym = ($iniFile->getItem('最后页面id', '页面id'));


            //npc
            if ($cmdd >= 1 && $cmdd <= 100) {
                include("xy01.php");
            } elseif ($cmdd >= 101 && $cmdd <= 200) {
                include("xy02.php");
            } elseif ($cmdd >= 201 && $cmdd <= 300) {
                include("xy03.php");
            } elseif ($cmdd >= 301 && $cmdd <= 400) {
                include("xy04.php");
            } elseif ($cmdd >= 401 && $cmdd <= 500) {
                include("xy05.php");
            } elseif ($cmdd >= 501 && $cmdd <= 600) {
                include("xy06.php");
            } elseif ($cmdd >= 601 && $cmdd <= 700) {
                include("xy07.php");
            } else {
                //路径
                $path = 'ache/' . $wjid;
                //ini文件名字
                $inina = "user.ini";
                $ininame = $path . "/" . $inina;
                $iniFile = new iniFile($ininame);
                $y = 0;
                $m = 0;
                $d = 0;
                $h = 0;
                $i = 0;
                $s = 0;
                $iniFile->updItem('验证信息', ['年' => $y, '月' => $m, '日' => $d, '时' => $h, '分' => $i, '秒' => $s]);
                echo '#4';
                include("sx.php");
                echo "特征4";
            }

            if ($wjid == 10000001) {
                echo "当前页面id(cmid值/$cmdd)：" . $cmdd . "<br>";
            }

            include __DIR__ . '/ini/user_ini.php';
            //最大值
            $a5 = $cmid;
            //将cmd最小最大值写入
            $iniFile->updItem('验证信息', ['xcmid值' => $a4, 'dcmid值' => $a5]);

            //写入超链接及其所对应的值
            $iniFile->delCategory('超链接值');
            $iniFile->delCategory('超链接npc值');
            $aa = $a5 - $a4 + 1;
            for ($x = 0; $x < $aa; $x++) {
                $q3 = $cdid[$x];
                if (empty($q3)) {
                    continue;
                }
                $q4 = $clj[$x];
                $q6 = $npc[$x];
                # 添加一个子项(如果子项存在，则覆盖;)
                $iniFile->addItem('超链接值', [$q3 => $q4]);
                $iniFile->addItem('超链接npc值', [$q3 => $q6]);
            }

            //显示时间
            $h = date('H') * 1;
            $i = date('i') * 1;
            echo "西游报时(" . $h . ":" . $i . ")" . "<br>";
        } else {
            include("./ini/user_ini.php");
            $iniFile->updItem('验证信息', ['cmid值' => 2]);
            //调用过快页面
            include("shuax.php");
        }

        //过快验证
        $time = microtime(true);

        //调用sjyz.ini是否存在
        include("./ini/sjyz_ini.php");
        $iniFile->updItem('毫秒时间', ['时间' => $time]);

        include __DIR__ . '/ini/user_ini.php';
        $yymid = ($iniFile->getItem('最后页面id', '页面id'));
        $symid = ($iniFile->getItem('验证信息', 'cmid值'));
        if ($wjid == 10000001) {//gm号可看
            echo "<font color=red>----------调试信息-----------</font>" . "<br>";
            echo "<font color=black>上次页面ID(最后页面id-页面id)：" . $yymid . "</font>" . "<br>";
            echo "<font color=black>本次页面ID(cmid值)：" . $symid . "</font>" . "<br>";
            echo "<font color=red>----------调试信息-----------</font>" . "<br>";
        }

        $etime = microtime(true);
        $total = $etime - $stime;
        $total = substr("$total", 0, 5) * 1000;
        echo "<font color=red>执行耗时:" . $total . "毫秒</font>" . "<br>";
    } else {
        echo '#5';
        include("sx.php");
    }

    ?>
</div>
</body>
</html>
