<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="bp".$bpid.".ini";
$path='acher/bp';
$file = $path."/".$inina;
if(file_exists($file)) {
} else {
    include("./sql/mysql.php");//调用数据库连接
    $q2="all_bp";
    $sql1=mysql_query("select * from $q2 where bpid=$bpid");
    $info1=@mysql_fetch_array($sql1);
    $bpid=$info1['bpid'];
    $bpdj=$info1['bpdj'];
    $bpmz=$info1['bpmz'];
    $cbpmz=$info1['cbpmz'];
    $cwjid=$info1['cwjid'];
    $xbpmz=$info1['xbpmz'];
    $xwjid=$info1['xwjid'];
    $ccmz01=$info1['ccmz01'];
    $ccid01=$info1['ccid01'];
    $ccmz02=$info1['ccmz02'];
    $ccid02=$info1['ccid02'];
    $ccmz03=$info1['ccmz03'];
    $ccid03=$info1['ccid03'];
    $ccmz04=$info1['ccmz04'];
    $ccid04=$info1['ccid04'];
    $ccmz05=$info1['ccmz05'];
    $ccid05=$info1['ccid05'];
    $ccmz06=$info1['ccmz06'];
    $ccid06=$info1['ccid06'];
    $bprsmax=$info1['bprsmax'];
    $bpjymax=$info1['bpjymax'];
    $bpyl=$info1['bpyl'];
    $bpsw=$info1['bpsw'];
    $bpjy=$info1['bpjy'];
    $bprs=$info1['bprs'];

    $inina="bp".$bpid.".ini";
    $path='acher/bp';
    $file = $path."/".$inina;
    file_put_contents($file,"[国家]");

    $iniFile = new iniFile($file);
    $iniFile->addItem('国家信息',['初始' => 123]);
    $iniFile->addCategory('国家信息', ['国家id' => $bpid, '国家等级' => $bpdj,'国家名字' => $bpmz,'首任君主' => $cbpmz,'首任君主id' => $cwjid,'现任君主' => $xbpmz,'现任君主id' => $xwjid,
        '辅助大臣' => $ccmz01,'辅助大臣id' => $ccid01, '军机大臣' => $ccmz02,'军机大臣id' => $ccid02, '财政大臣' => $ccmz03, '财政大臣id' => $ccid03, '工部大臣' => $ccmz04, '工部大臣id' => $ccid04,
        '外交大臣' => $ccmz05,'外交大臣id' => $ccid05,'军团长' => $ccmz06,'军团长id' => $ccid06,'国家人数max' => $bprsmax,'国家经验max' => $bpjymax,
        '国家资金' => $bpyl,'国家声望' => $bpsw, '国家经验' => $bpjy, '国家人数' => $bprs]);
}

$iniFile = new iniFile($file);
