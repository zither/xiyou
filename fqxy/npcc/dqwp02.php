<?php

if($sll!=0){
	if($wpsl<$sl){
		$dqwp=0;
		echo "<font color=red>输入有误请重新输入</font>"."<br>";
		echo "<br>";
	} elseif($wpsl>$sl){
		$wpsl=$wpsl-$sl;
		//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////
		include("./ini/yl_ini.php");
		$ymid=($iniFile->getItem('背包页面','页面id'));
		if($ymid==35){ //背包其他
			include("./sql/mysql.php");//调用数据库连接
			$q2="qt";
			$strsql = "update $q2 set wpsl=$wpsl where wjid=$wjid and wpid=$npcc";//物品id号必改值
			$result = mysql_query($strsql);
		} else{
			include("./sql/mysql.php");//调用数据库连接
			$q2="wp";
			$strsql = "update $q2 set wpsl=$wpsl where wjid=$wjid and wpid=$npcc";//物品id号必改值
			$result = mysql_query($strsql);
		}

		/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////
		if($ymid==35){ //背包其他
			include("./ini/qt_ini.php");
			$iniFile->updItem('其他数量', [$npcc => $wpsl]);
		} else{
			include("./wp/wpxx.php");
			if($wpfl==1){//背包书卷
				include("./ini/wp_ini.php");
				$iniFile->updItem('书卷数量', [$npcc => $wpsl]);
			} elseif($wpfl==2){ //背包材料
				include("./ini/cl_ini.php");
				$iniFile->updItem('材料数量', [$npcc => $wpsl]);
			} elseif($wpfl==4){ //背包商城
				include("./ini/sc_ini.php");
				$iniFile->updItem('商城数量', [$npcc => $wpsl]);
			} elseif($wpfl==5){ //背包丹药
				include("./ini/dy_ini.php");
				$iniFile->updItem('丹药数量', [$npcc => $wpsl]);
			} elseif($wpfl==6){ //背包任务
				include("./ini/rw_ini.php");
				$iniFile->updItem('任务数量', [$npcc => $wpsl]);
			} elseif($wpfl==7){ //背包农场
				include("./ini/nc_ini.php");
				$iniFile->updItem('农场数量', [$npcc => $wpsl]);
			} elseif($wpfl==8){ //背包宝箱
				include("./ini/bx_ini.php");
				$iniFile->updItem('宝箱数量', [$npcc => $wpsl]);
			} else{
			}
		}

		//缓存背包容量修改
		$inina="bbrl.ini";
		$path='ache/'.$wjid;
		$ininame = $path."/".$inina;
		$iniFile = new iniFile($ininame);
		$bbrla=($iniFile->getItem('背包已用容量','容量'));
		$rl=$wpzl*$sl;
		$wprl=$bbrla-$rl;
		$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

		//调用yl.ini是否存在
		include("./ini/yl_ini.php");
		$ymid=($iniFile->getItem('背包页面','页面id'));
		$inina="user.ini";
		$path='ache/'.$wjid;
		$ininame = $path."/".$inina;
		$iniFile = new iniFile($ininame);
		$iniFile->updItem('验证信息', ['cmid值' => $ymid]);
		echo "<font color=red>你丢弃了".$wpmz."x".$sl."</font>"."<br>";
		echo "<br>";
		if($ymid==27){//背包书卷
			include("template/xy027.php");
			include("./pz/pz01.php");
		} elseif($ymid==28){ //背包材料
			include("template/xy028.php");
			include("./pz/pz01.php");
		} elseif($ymid==30){ //背包商城
			include("template/xy030.php");
			include("./pz/pz01.php");
		} elseif($ymid==31){ //背包丹药
			include("template/xy031.php");
			include("./pz/pz01.php");
		} elseif($ymid==32){ //背包任务
			include("template/xy032.php");
			include("./pz/pz01.php");
		} elseif($ymid==33){ //背包农场
			include("template/xy033.php");
			include("./pz/pz01.php");
		} elseif($ymid==34){ //背包宝箱
			include("template/xy034.php");
			include("./pz/pz01.php");
		} elseif($ymid==35){ //背包宝箱
			include("template/xy035.php");
			include("./pz/pz01.php");
		}
	} elseif($wpsl==$sl){
		$wpsl=$wpsl-$sl;
		include("./ini/yl_ini.php");
		$ymid=($iniFile->getItem('背包页面','页面id'));
		if($ymid==35){ //背包其他
			include("./sql/mysql.php");//调用数据库连接
			$q2="qt";
			$strsql = "delete from $q2 where wjid=$wjid and wpid=$npcc ";//物品id号必改值
			$result = mysql_query($strsql);
		} else{
			include("./sql/mysql.php");//调用数据库连接
			$q2="wp";
			$strsql = "delete from $q2 where wjid=$wjid and wpid=$npcc ";//物品id号必改值
			$result = mysql_query($strsql);
		}

		if($ymid==35){ //背包其他
			include("./ini/qt_ini.php");
			$iniFile->updItem('其他数量', [$npcc => $wpsl]);
		} else{
			include("./wp/wpxx.php");
			if($wpfl==1){//背包书卷
				include("./ini/wp_ini.php");
				$iniFile->updItem('书卷数量', [$npcc => $wpsl]);
			} elseif($wpfl==2){ //背包材料
				include("./ini/cl_ini.php");
				$iniFile->updItem('材料数量', [$npcc => $wpsl]);
			} elseif($wpfl==4){ //背包商城
				include("./ini/sc_ini.php");
				$iniFile->updItem('商城数量', [$npcc => $wpsl]);
			} elseif($wpfl==5){ //背包丹药
				include("./ini/dy_ini.php");
				$iniFile->updItem('丹药数量', [$npcc => $wpsl]);
			} elseif($wpfl==6){ //背包任务
				include("./ini/rw_ini.php");
				$iniFile->updItem('任务数量', [$npcc => $wpsl]);
			} elseif($wpfl==7){ //背包农场
				include("./ini/nc_ini.php");
				$iniFile->updItem('农场数量', [$npcc => $wpsl]);
			} elseif($wpfl==8){ //背包宝箱
				include("./ini/bx_ini.php");
				$iniFile->updItem('宝箱数量', [$npcc => $wpsl]);
			}
		}

		if($ymid==35){ //背包其他
			//查询序列删物品id
			$xlh=($iniFile->getItem('序列',$npcc));
			$iniFile->delItem('其他id', $xlh);
			$iniFile->delItem('序列', $npcc);
			$iniFile->delItem('其他数量', $npcc);
			$iniFile->delItem('其他名字', $npcc);
		} else{
			include("./wp/wpxx.php");
			if($wpfl==1){//背包书卷
				include("./ini/wp_ini.php");
				//查询序列删物品id
				$xlh=($iniFile->getItem('序列',$npcc));
				$iniFile->delItem('书卷id', $xlh);
				$iniFile->delItem('序列', $npcc);
				$iniFile->delItem('书卷数量', $npcc);
				$iniFile->delItem('书卷名字', $npcc);
			} elseif($wpfl==2){ //背包材料
				include("./ini/cl_ini.php");
				//查询序列删物品id
				$xlh=($iniFile->getItem('序列',$npcc));
				$iniFile->delItem('材料id', $xlh);
				$iniFile->delItem('序列', $npcc);
				$iniFile->delItem('材料数量', $npcc);
				$iniFile->delItem('材料名字', $npcc);
			} elseif($wpfl==4){ //背包商城
				include("./ini/sc_ini.php");
				$xlh=($iniFile->getItem('序列',$npcc));
				$iniFile->delItem('商城id', $xlh);
				$iniFile->delItem('序列', $npcc);
				$iniFile->delItem('商城数量', $npcc);
				$iniFile->delItem('商城名字', $npcc);
			} elseif($wpfl==5){ //背包丹药
				include("./ini/dy_ini.php");
				$xlh=($iniFile->getItem('序列',$npcc));
				$iniFile->delItem('丹药id', $xlh);
				$iniFile->delItem('序列', $npcc);
				$iniFile->delItem('丹药数量', $npcc);
				$iniFile->delItem('丹药名字', $npcc);
			} elseif($wpfl==6){ //背包任务
				include("./ini/rw_ini.php");
				$xlh=($iniFile->getItem('序列',$npcc));
				$iniFile->delItem('任务id', $xlh);
				$iniFile->delItem('序列', $npcc);
				$iniFile->delItem('任务数量', $npcc);
				$iniFile->delItem('任务名字', $npcc);
			} elseif($wpfl==7){ //背包农场
				include("./ini/nc_ini.php");
				$xlh=($iniFile->getItem('序列',$npcc));
				$iniFile->delItem('农场id', $xlh);
				$iniFile->delItem('序列', $npcc);
				$iniFile->delItem('农场数量', $npcc);
				$iniFile->delItem('农场名字', $npcc);
			} elseif($wpfl==8){ //背包宝箱
				include("./ini/bx_ini.php");
				$xlh=($iniFile->getItem('序列',$npcc));
				$iniFile->delItem('宝箱id', $xlh);
				$iniFile->delItem('序列', $npcc);
				$iniFile->delItem('宝箱数量', $npcc);
				$iniFile->delItem('宝箱名字', $npcc);
			}
		}

		include("./wp/wpxx.php");


		$inina="bbrl.ini";
		$path='ache/'.$wjid;
		$ininame = $path."/".$inina;
		$iniFile = new iniFile($ininame);
		$bbrla=($iniFile->getItem('背包已用容量','容量'));
		$rl=$wpzl*$sl;
		$wprl=$bbrla-$rl;
		$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

		include("./ini/yl_ini.php");
		$ymid=($iniFile->getItem('背包页面','页面id'));



		$inina="user.ini";
		$path='ache/'.$wjid;
		$ininame = $path."/".$inina;
		$iniFile = new iniFile($ininame);
		$iniFile->updItem('验证信息', ['cmid值' => $ymid]);
		echo "<font color=red>你丢弃了".$wpmz."x".$sl."</font>"."<br>";
		echo "<br>";
		if($ymid==27){//背包书卷
			include("template/xy027.php");
			include("./pz/pz01.php");
		} elseif($ymid==28){ //背包材料
			include("template/xy028.php");
			include("./pz/pz01.php");
		} elseif($ymid==30){ //背包商城
			include("template/xy030.php");
			include("./pz/pz01.php");
		} elseif($ymid==31){ //背包丹药
			include("template/xy031.php");
			include("./pz/pz01.php");
		} elseif($ymid==32){ //背包任务
			include("template/xy032.php");
			include("./pz/pz01.php");
		} elseif($ymid==33){ //背包农场
			include("template/xy033.php");
			include("./pz/pz01.php");
		} elseif($ymid==34){ //背包宝箱
			include("template/xy034.php");
			include("./pz/pz01.php");
		} elseif($ymid==35){ //背包宝箱
			include("template/xy035.php");
			include("./pz/pz01.php");
		}
	}
} else {
	$dqwp=0;
	echo "<font color=red>输入有误请重新输入</font>"."<br>";
	echo "<br>";
}

