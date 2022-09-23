<?php

$hff=1;
$dqwp=0;
if($hff==1){
    if($_POST['submit']){
        $sl= $_POST['sl'];
        $gsjg= $_POST['gsjg'];
        $sll=preg_match('/^\d+$/i', $sl);
        $gsjgl=preg_match('/^\d+$/i', $gsjg);
        $dqwp=1;
        include("gsqt02.php");
    }
}
if($dqwp==1){
    exit();
}

echo "<font color=red>你最多可挂售".$wpmz."x".$wpsl."</font>"."<br>";
echo "<font color=black>请输入你要挂售".$wpmz."数量和单价</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=235;
$npc[]=$npcc;
$formurl = sprintf('xy.php?uid=%d&cmd=%d&sid=%s', $wjid, $cmid, $a1);

?>
<form  action="<?php echo $formurl?>" method="POST">
    数量：<input type="tel" name="sl" placeholder="数量"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
    单价：<input type="tel" name="gsjg" placeholder="单价"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
    <input  type="submit" name="submit"  value="挂售" id="search1"><br>
</form>
<?php
echo "<br>";
echo "<br>";


