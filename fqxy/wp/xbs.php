<?PHP

//宝石名字


$TT= [];
$TT[]="";
$BSMZZ=[];
$BSMZZ[]="";

IF($ZBKK1>0){
$BSID=$ZBXQQ1;
IF($BSID>0){
INCLUDE("WP/ZBBSMZ.PHP");//NPC页面
$BSMZZ[]=$BSMZ;
} ELSE{
}


}

IF($ZBKK2>0){
$BSID=$ZBXQQ2;
IF($BSID>0){
INCLUDE("WP/ZBBSMZ.PHP");//NPC页面
$BSMZZ[]=$BSMZ;
} ELSE{
}
}


IF($ZBKK3>0){
$BSID=$ZBXQQ3;
IF($BSID>0){
INCLUDE("WP/ZBBSMZ.PHP");//NPC页面
$BSMZZ[]=$BSMZ;
} ELSE{
}
}

IF($ZBKK4>0){
$BSID=$ZBXQQ4;
IF($BSID>0){
INCLUDE("WP/ZBBSMZ.PHP");//NPC页面
$BSMZZ[]=$BSMZ;
} ELSE{
}
}

IF($ZBKK5>0){
$BSID=$ZBXQQ5;
IF($BSID>0){
INCLUDE("WP/ZBBSMZ.PHP");//NPC页面
$BSMZZ[]=$BSMZ;
} ELSE{
}
}


IF($ZBKK1>0||$ZBKK2>0||$ZBKK3>0||$ZBKK4>0||$ZBKK5>0){
//去掉相同的元素
$G=ARRAY_UNIQUE($BSMZZ);
$G=ARRAY_VALUES($G);
//当前被去掉元素的数组含有的元素
$Z= COUNT($G);
//获取数组里相同元素个数


IF($Z>1){
$II=-1;
FOR($X=0;$X<$Z;$X++){
$II=$II+1;
$B=ARRAY_COUNT_VALUES($BSMZZ);
$C=$G[$II];

//ECHO $B[$C];
IF($B[$C] ==1){
$TT[]="一".$G[$II];
} ELSEIF($B[$C] ==2){
$TT[]="双".$G[$II];
} ELSEIF($B[$C] ==3){
$TT[]="三".$G[$II];
} ELSEIF($B[$C] ==4){
$TT[]="四".$G[$II];
} ELSEIF($B[$C] ==5){
$TT[]="五".$G[$II];
} ELSE{
}

}

} ELSE{
$B=ARRAY_COUNT_VALUES($BSMZZ);
$C=$G[0];

IF($B[$C] ==1){
$TT[]="一".$G[0];
} ELSEIF($B[$C] ==2){
$TT[]="双".$G[0];
} ELSEIF($B[$C] ==3){
$TT[]="三".$G[0];
} ELSEIF($B[$C] ==4){
$TT[]="四".$G[0];
} ELSEIF($B[$C] ==5){
$TT[]="五".$G[0];
} ELSE{
}


}

//$BSMZZ="";
$Z= COUNT($TT);

IF($Z==1){
$XBS=$TT[0];
} ELSEIF($Z ==2){
$XBS=$TT[0].$TT[1];

} ELSEIF($Z ==3){
$XBS=$TT[0].$TT[1].$TT[2];

} ELSEIF($Z ==4){
$XBS=$TT[0].$TT[1].$TT[2].$TT[3];
} ELSEIF($Z ==5){
$XBS=$TT[0].$TT[1].$TT[2].$TT[3].$TT[4];


} ELSE{

}

} ELSE{
$XBS="";

}
$TT=[];




?>




