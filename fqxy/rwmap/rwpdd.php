<?php
//初始化
$m=0;
$rwbl1=[];
$rwbl2=[];
$rwbl3=[];
$rwbl4=[];
$rwbl5=[];
$rwbl6=[];
//初始化

//////////////////////////////////////////////////////////////村长/////////////////////////////////////////
if ($npcc==1) {
///////////////////////任务项目(主线)///////////////////
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==1||$rid==2||$rid==3||$rid==4||$rid==5||$rid==6||$rid==7||$rid==9||$rid==10||$rid==11||$rid==12||$rid==13||$rid==14||$rid==15||$rid==16||$rid==17) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

    /*

    ///////////////////////任务项目(活动)///////////////////
    $rwidd=1;//任务id必改
    $rwfl=4;//任务的分类1主线2支线5日常4活动
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务变量
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
    if ($rid==1) {//这里是进行任务的变量必改
    include("./rwmap/rwpdd1.php");
    }
    }
    ///////////////////////任务项目(活动)///////////////////
    ///////////////////////任务项目(日常)///////////////////
    $rwidd=1;//任务id必改
    $rwfl=5;//任务的分类1主线2支线5日常4活动
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务变量
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
    if ($rid==1) {//这里是进行任务的变量必改
    include("./rwmap/rwpdd1.php");
    }
    }
    ///////////////////////任务项目(日常)///////////////////
    ///////////////////////任务项目(支线)///////////////////
    $rwidd=1;//任务id必改
    $rwfl=2;//任务的分类1主线2支线5日常4活动
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务变量
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
    if ($rid==1) {//这里是进行任务的变量必改
    include("./rwmap/rwpdd1.php");
    }
    }
    ///////////////////////任务项目(支线)///////////////////

    */

//////////////////////////////////////////////////////////////渔夫/////////////////////////////////////////
} elseif ($npcc==4) {
///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==7||$rid==8||$rid==9) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

//////////////////////////////////////////////////////////////调查洞穴～/////////////////////////////////////////
} elseif ($npcc==695) {
///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==10||$rid==11||$rid==15) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

//////////////////////////////////////////////////////////////船夫/////////////////////////////////////////
} elseif ($npcc==7) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==17||$rid==18||$rid==19||$rid==20) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	


//////////////////////////////////////////////////////////////店小二/////////////////////////////////////////
} elseif ($npcc==146) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==22||$rid==23||$rid==24||$rid==26||$rid==28||$rid==29||$rid==30||$rid==38||$rid==47||$rid==48||$rid==59||$rid==77||$rid==87||$rid==105||$rid==113||$rid==121||$rid==399
            ||$rid==21||$rid==25||$rid==27||$rid==37||$rid==43||$rid==44||$rid==45||$rid==46||$rid==58||$rid==74||$rid==75||$rid==76||$rid==85||$rid==86||$rid==104||$rid==106||$rid==107||$rid==108||$rid==109||$rid==110||$rid==111||$rid==112||$rid==117||$rid==118||$rid==119||$rid==120||$rid==397||$rid==398) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

//////////////////////////////////////////////////////////////董朴升/////////////////////////////////////////
} elseif ($npcc==149) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==38||$rid==39||$rid==41||$rid==42||$rid==40||$rid==43||$rid==44||$rid==45||$rid==46) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

//////////////////////////////////////////////////////////////杨中顺/////////////////////////////////////////
} elseif ($npcc==54) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==47||$rid==48||$rid==49||$rid==50||$rid==51||$rid==52||$rid==53||$rid==54||$rid==55||$rid==56||$rid==57||$rid==49||$rid==58) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==52||$rid==53) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	

//////////////////////////////////////////////////////////////疥顶小僧/////////////////////////////////////////
} elseif ($npcc==32) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==96||$rid==97||$rid==98||$rid==99||$rid==100||$rid==101) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	





//////////////////////////////////////////////////////////////小男孩/////////////////////////////////////////
} elseif ($npcc==91) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==123||$rid==124||$rid==125||$rid==126||$rid==127||$rid==128||$rid==129||$rid==130) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	



//////////////////////////////////////////////////////////////李捕头/////////////////////////////////////////
} elseif ($npcc==451) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==189||$rid==190||$rid==191||$rid==432||$rid==433||$rid==434||$rid==435) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	




//////////////////////////////////////////////////////////////李白/////////////////////////////////////////
} elseif ($npcc==20) {







///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==392||$rid==393||$rid==394) {//这里是进行任务的变量必改
            $xrwidd=$rwidd;
            $xrwfl=$rwfl;
            $ridx=$rid;
            include("./rwmap/rwpdd1.php");
        }
    }

///////////////////////任务项目(主线)///////////////////	

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==1||$rid==2||$rid==3) {//这里是进行任务的变量必改
            $xrwidd=$rwidd;
            $xrwfl=$rwfl;

            $rid=$ridx;
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////
    $rid=$ridx;

//////////////////////////////////////////////////////////////算命先生袁守诚/////////////////////////////////////////
} elseif ($npcc==466) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==472||$rid==473||$rid==474) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	


//////////////////////////////////////////////////////////////太守/////////////////////////////////////////
} elseif ($npcc==463) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==427||$rid==428||$rid==429||$rid==430||$rid==431||$rid==432||$rid==460||$rid==461||$rid==462||$rid==463||$rid==464||$rid==465||$rid==466||$rid==467||$rid==468||$rid==469||$rid==470||$rid==471) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

//////////////////////////////////////////////////////////////老板娘/////////////////////////////////////////
} elseif ($npcc==84) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==418||$rid==419||$rid==420||$rid==436||$rid==437||$rid==438) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	



//////////////////////////////////////////////////////////////雾渊道长/////////////////////////////////////////
} elseif ($npcc==120) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==435||$rid==436) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	


//////////////////////////////////////////////////////////////总镖头萧升/////////////////////////////////////////
} elseif ($npcc==142) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==200||$rid==201||$rid==202||$rid==205||$rid==206||$rid==207||$rid==208||$rid==209||$rid==210||$rid==211||$rid==212||$rid==213||$rid==214||$rid==215||$rid==216||$rid==217||$rid==218||$rid==219||$rid==229||$rid==230||$rid==231||$rid==232||$rid==233||$rid==235||$rid==236||$rid==239||$rid==240) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

//////////////////////////////////////////////////////////////兵马俑/////////////////////////////////////////
} elseif ($npcc==143) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==373||$rid==374||$rid==375) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	
//////////////////////////////////////////////////////////////村长吴文/////////////////////////////////////////
} elseif ($npcc==456) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==268||$rid==269||$rid==270||$rid==370||$rid==371||$rid==372) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	




//////////////////////////////////////////////////////////////渔夫李定/////////////////////////////////////////
} elseif ($npcc==163) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==291||$rid==292||$rid==293||$rid==294||$rid==295||$rid==296||$rid==299||$rid==300) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	




//////////////////////////////////////////////////////////////扫地道童/////////////////////////////////////////
} elseif ($npcc==202) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==316||$rid==317) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

//////////////////////////////////////////////////////////////清风道长/////////////////////////////////////////
} elseif ($npcc==204) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==331||$rid==332||$rid==333||$rid==334||$rid==335||$rid==336||$rid==337||$rid==338||$rid==339) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	



//////////////////////////////////////////////////////////////老道士（装备打造）/////////////////////////////////////////
} elseif ($npcc==208) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==999) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

//////////////////////////////////////////////////////////////猎户/////////////////////////////////////////
} elseif ($npcc==210) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==282||$rid==283) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	


//////////////////////////////////////////////////////////////看门大爷老余头（传送）/////////////////////////////////////////
} elseif ($npcc==220) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==261||$rid==262) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	


//////////////////////////////////////////////////////////////小乞丐/////////////////////////////////////////
} elseif ($npcc==222) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==265||$rid==266||$rid==267||$rid==268||$rid==289||$rid==290||$rid==291||$rid==369||$rid==370) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	



//////////////////////////////////////////////////////////////酒鬼/////////////////////////////////////////
} elseif ($npcc==221) {

///////////////////////任务项目(主线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=1;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==263||$rid==264) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(主线)///////////////////	

//////////////////////////////////////////////////////////////师门祖师/////////////////////////////////////////
} elseif ($npcc==800) {

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==3||$rid==4||$rid==5) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	



//////////////////////////////////////////////////////////////接引仙子（传送）/////////////////////////////////////////
} elseif ($npcc==249) {

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==5||$rid==6||$rid==7||$rid==8||$rid==9||$rid==10||$rid==11||$rid==12||$rid==13||$rid==22||$rid==23||$rid==59||$rid==61||$rid==62||$rid==64||$rid==65) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	


//////////////////////////////////////////////////////////////接引仙子（传送）/////////////////////////////////////////
} elseif ($npcc==225) {

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==13||$rid==14||$rid==15||$rid==16||$rid==17||$rid==21||$rid==22) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	

//////////////////////////////////////////////////////////////菩提祖师(转职)/////////////////////////////////////////
} elseif ($npcc==205) {

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==23||$rid==24||$rid==25||$rid==26||$rid==27||$rid==28||$rid==29||$rid==50||$rid==51||$rid==52||$rid==65) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	


//////////////////////////////////////////////////////////////李世民(转职)/////////////////////////////////////////
} elseif ($npcc==1011) {

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==26) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	


//////////////////////////////////////////////////////////////太上老君(转职)/////////////////////////////////////////
} elseif ($npcc==276) {

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==31||$rid==32||$rid==47||$rid==48||$rid==49||$rid==50) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	


//////////////////////////////////////////////////////////////袁天罡(转职)/////////////////////////////////////////
} elseif ($npcc==58) {

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==32||$rid==33||$rid==34||$rid==35||$rid==36||$rid==37||$rid==38||$rid==39||$rid==40||$rid==53||$rid==54||$rid==55||$rid==56||$rid==57) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	


//////////////////////////////////////////////////////////////李世民(转职)/////////////////////////////////////////
} elseif ($npcc==1014) {

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==39||$rid==40) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	


//////////////////////////////////////////////////////////////阎罗王(转职)/////////////////////////////////////////
} elseif ($npcc==238) {

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==40||$rid==41||$rid==42||$rid==44||$rid==45||$rid==46||$rid==47) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	


//////////////////////////////////////////////////////////////蟠桃树(转职)/////////////////////////////////////////
} elseif ($npcc==1317) {

///////////////////////任务项目(支线)///////////////////	
    $rwidd=1;//任务id必改
    $rwfl=2;//任务分类
    $rwstr=$rwidd."_".$rwfl;
    $rid=$rw2[$rwstr];//任务的分类1主线2支线5日常4活动
    if ($rw5[$rwstr]!=999&&$rw5[$rwstr]!="") {
        if ($rid==57) {//这里是进行任务的变量必改
            include("./rwmap/rwpdd1.php");
        }
    }
///////////////////////任务项目(支线)///////////////////	

} else {
}

?>
