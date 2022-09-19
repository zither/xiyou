<?php

//获取最大值
$q2 = "o_user_list";
$sql1 = mysql_query("select MAX(uid) from $q2");
$abc = mysql_fetch_array($sql1);
$maxid = $abc[0] ?? 0;
$fquid = $maxidd = $maxid + 1;

//现在的时间
$y = date('Y') * 1;
$m = date('m') * 1;
$d = date('d') * 1;
$h = date('H') * 1;
$i = date('i') * 1;
$s = date('s') * 1;

//社区id接入游戏平台id
$q2 = "o_user_list";
$sql = "insert into $q2 (uid,sqid,m_id,password,n,y,r,s,f,m)  values('$maxidd','$sqid','0','','$y','$m','$d','$h','$i','$s')";
if (!mysql_query($sql)) {
    die('Error: ' . mysql_error());
}

$wjid = $mysql002 = $maxidd + 10000000;

//状态数据初始化
$q2 = "all_zt";
$sql = "insert into $q2 (wjid,username,sex,tx,peiou,peiouid,zzmz,zzid,zzfl,dj,mpp,bpmz,bpid,vip,vipjy,gsrl,bbrl,ckrl,emz,lh)  values('$mysql002','',0,'','', 0, '', 0, 0, 1, 0,'', 0, 0, 0, 500, 1000, 2000, 0,0)";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}

//银两数据初始化
$q2 = "all_yl";
$sql = "insert into $q2 (wjid,bbyl,ckyl)  values('$mysql002','88888','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}

//技能
$mysql003 = "jnn";
$sql = "insert into $mysql003 (wjid,jnid,jndj)  values('$wjid','15','1')";
if (!mysql_query($sql)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,jnid,jndj)  values('$wjid','1','1')";
if (!mysql_query($sql)) {
    die('Error: ' . mysql_error());
}


$mysql003 = "sw";
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid', '1','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','2','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','3','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}

$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','4','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','5','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','6','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}

$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','7','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','8','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','9','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','10','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','11','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','12','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}
$sql = "insert into $mysql003 (wjid,swid,swzz)  values('$wjid','13','0')";
if (!mysql_query($sql, $conn)) {
    die('Error: ' . mysql_error());
}

