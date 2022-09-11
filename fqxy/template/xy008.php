<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
    $inina="user.ini";
    $path='ache/'.$wjid;
    $ininame = $path."/".$inina;
    //include("class/iniclass.php");//调用iniclass文件
    $iniFile = new iniFile($ininame);
    $dtx=($iniFile->getItem('地图坐标','x'));
    $dty=($iniFile->getItem('地图坐标','y'));

    $db = DB::instance();
    $room = $db->get('map', '*', ['dtxy' => "{$dtx}_{$dty}"]);
    if (!empty($room)) {
        include_once XY_DIR . '/class/MapGenerator.php';
        $generator = new MapGenerator($db);
        $directions = $generator->generateMap($room, 51, 51);
       ?>
        <table style="background-color: #eec65a;text-align: center; font-size: 12px">
            <?php foreach ($directions as $m => $dir):?>
                <tr>
                    <?php foreach ($dir as $n => $v): ?>
                        <td>
                            <?php if (is_array($v)): ?>
                                <div style="background-color: #942900" title="<?=$v['dtxy']?>">
                                    <?php if ($v['dtxy'] == $room['dtxy']):?>
                                        <span style="color: #0befe7;"><?=$v['mz']?></span>
                                    <?php elseif($v['is_jump']) :?>
                                        <span style="color: #86e2e2;"><?=$v['mz']?></span>
                                    <?php else:?>
                                        <span style="color: white"><?=$v['mz']?></span>
                                    <?php endif;?>
                                </div>
                            <?php elseif (is_string($v) && in_array($v, ['—', '|'])): ?>
                                <span style="color: black"><?=$v?></span>
                            <?php else:?>
                                <span class="inline-block"></span>
                            <?php endif;?>
                        </td>
                    <?php endforeach;?>
                </tr>
            <?php endforeach;?>
        </table>
        <?php
    } else {
        $inina = "map.ini";
        $path = 'ache/' . $wjid;
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $ininame = $path . "/" . $inina;
        $filename = $ininame;
        if (!file_exists($filename)) {
            $counter_file = $ininame;//文件名及路径,在当前目录下新建aa.txt文件
            $fopen = fopen($counter_file, 'wb ');//新建文件命令
            fputs($fopen, '[地图信息]');//向文件中写入内容;
            $iniFile = new iniFile($ininame);
            fclose($fopen);
        } else {
            $iniFile = new iniFile($ininame);
        }
        $dt = ($iniFile->getCategory('地图比例'));
        if ($dt['初始'] == "") {
            $iniFile->addCategory('地图比例', ['初始' => 888]);
            $iniFile->addCategory('地图比例', ['大小' => 1]);
        }
        $dtdx = ($iniFile->getItem('地图比例', '大小'));
        $img = './pic/dtpic/' . $dtx . "-" . $dty . ".jpg";
        if (!file_exists($img)) {
            echo "<font color=black>这个区域的地图图片不存在！如果你想弄这个点的地图图片请把这张图片改名发我</font>" . "<br>";
            $imgg = $dtx . "-" . $dty . ".jpg";
            echo "<font color=black>图片名称:</font>";
            echo "<font color=red>" . $imgg . "</font>" . "<br>";
        } else {
            echo '<img src="' . $img . ' "alt="图片"/〉';
            echo "<br>";
            echo "<br>";
            echo "<br>";
        }
    }

    echo "<br>";
    $cmid=$cmid+1;
    $cdid[]=$cmid;
    $clj[]=2;
    $npc[]=0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
    echo "<font color=black>----------------------</font>"."<br>";
    include("fhgame.php");
}

//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
