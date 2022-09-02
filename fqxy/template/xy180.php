<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$wjid1=$wjid;
$wjid=$npcc;

$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
$wjid=$wjid1;

if($zsspd==1&&$zsspd2==1){
	include("./ini/bl1_ini.php");
	$ltpx=($iniFile->getItem('玩家排序1',$npcc));
	$ltwjid=($iniFile->getItem('玩家id',$ltpx));
	$ckname=($iniFile->getItem('玩家名字',$ltpx));
	$ckvip=($iniFile->getItem('玩家vip',$ltpx));

	$ltpxx=$ltwjid."_".$ltpx;

	$iniFile->delItem('玩家排序', $ltpxx);
	$iniFile->delItem('玩家排序1', $ltwjid);
	$iniFile->delItem('玩家id', $ltpx);
	$iniFile->delItem('玩家vip', $ltpx);
	$iniFile->delItem('玩家名字', $ltpx);



	//调用zt.ini是否存在
	include("./ini/zt_ini.php");
	$bppid=($iniFile->getItem('玩家信息','帮派id'));
	if($bppid==0){
		//获取邀请人的国家id
		$wjid=$npcc;
		//调用zt.ini是否存在
		include("./ini/zt_ini.php");
		$bpid=($iniFile->getItem('玩家信息','帮派id'));
		$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
		$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
		include("./ini/bp_ini.php");
		$bprs=($iniFile->getItem('国家信息','国家人数'));
		$bprsmax=($iniFile->getItem('国家信息','国家人数max'));
		$bpmz=($iniFile->getItem('国家信息','国家名字'));
		$bprspd=$bprs+1;

		if($bprspd<=$bprsmax){
			$iniFile->updItem('国家信息', ['国家人数'=> $bprspd]);
			$wjid=$wjid1;
			$q2="all_zt";
			$strsql = "update $q2 set bpid=$bpid,bpmz='$bpmz' where wjid=$wjid";//物品id号必改值
			$result = mysql_query($strsql);
			include("./ini/bp_ini.php");
			$bpcs=($iniFile->getCategory('国家信息'));
			if($bpcs['辅助大臣id']==$wjid){
				$bpzw2="辅助大臣";
			} elseif($bpcs['军机大臣id']==$wjid){
				$bpzw2="军机大臣";
			} elseif($bpcs['财政大臣id']==$wjid){
				$bpzw2="财政大臣";
			} elseif($bpcs['工部大臣id']==$wjid){
				$bpzw2="工部大臣";
			} elseif($bpcs['外交大臣id']==$wjid){
				$bpzw2="外交大臣";
			} elseif($bpcs['军团长id']==$wjid){
				$bpzw2="军团长";
			} elseif($bpcs['现任君主id']==$wjid){
				$bpzw2="君主";
			} else{
				$bpzw2="成员";
			}
			include("./ini/zt_ini.php");


			$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
			$iniFile->updItem('玩家信息', ['帮派id' => $bpid]);
			$iniFile->updItem('玩家信息', ['帮派名字' => $bpmz]);
			$iniFile->updItem('玩家信息', ['帮派职务' => $bpzw2]);

			$q2="bp";
			$sql = "insert into $q2 (bpid,usermz,userid,gx,lsgx)  values('$bpid','$wjmz','$wjid','0','0')";
			if (!mysql_query($sql,$conn)) {
				die('Error: ' . mysql_error());
			}

			$inina="bpp".$bpid.".ini";
			$path='acher/bp';
			$ininame = $path."/".$inina;
			_unlink($ininame); //删除文件
			echo "<font color=red>你同意了入国邀请！</font>"."<br>";
			$wjid=$npcc;


			//调用msg.ini是否存在
			$wjtake="同意了你的国家邀请，现在正是成为国家一员";
			include("./ini/msg_ini.php");
			$inina="msg.ini";
			$path='ache/'.$wjid;
			$ininame = $path."/".$inina;
			$iniFile = new iniFile($ininame);
			$hkeyltpx1[]="";
			$hltpx1="";
			$arr3="";
			$hltpx1=($iniFile->getCategory('玩家排序'));
			foreach(array_keys($hltpx1) as $key){
				$hkeyltpx1[]=$hltpx1[$key];
			}

			$tmp1="排序";
			$arr3=$hkeyltpx1;
			foreach( $arr3 as $k=>$v) {
				if($tmp1 == $v) unset($arr3[$k]);
			}

			$ltmax1=max($arr3);
			if($ltmax1=="排序"){
				$ltmax1=0;
			}
			$ltmax1=$ltmax1+1;
			$zbidd2=$wjid1."_".$ltmax1;
			$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]);
			$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]);
			$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]);
			$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]);
			$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]);
			$wjid=$wjid1;
		} else{
			echo "<font color=black>对不起！该国家人口达到上限！！你不能再进入了</font><br>";
		}
	} else{
		echo "<font color=black>对不起，你已经有国家了</font><br>";
	}

	$wjid=$wjid1;

	include("./template/xy002.php");
	//不走xy.php直接调用xy文件需要加pz01配置
	include("./pz/pz01.php");

}

//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini

