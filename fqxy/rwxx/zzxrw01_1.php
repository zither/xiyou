<?php

if ($rid==2 || $rid == 1) {
    echo "<font color=black>李白：小仙卿，老夫看你仙风道骨，背后有一道淡淡的仙气，理应在天上处理天庭杂务，莫非是天仙下凡，体察民间疾苦？</font>"."<br>";
    echo "<font color=black>".$name."：啊？李白老夫子，我只是一介武夫，并不是神仙啊！</font>"."<br>";
    echo "<font color=black>提示：（满159级找李白转职）</font>"."<br>";

} elseif ($rid==3) {

echo "<font color=black>李白：不应该不应该，你快去师门祖师面前问问，是不是忘了把你列入仙班了！</font>"."<br>";



} elseif ($rid==4) {

echo "<font color=black>".$name."：弟子拜见祖师爷！</font>"."<br>";
echo "<font color=black>师门祖师：噢？小轩GM你来了，所为何事？</font>"."<br>";







} elseif ($rid==5) {
echo "<font color=black>".$name."：弟子初到长安之时，幸得师门收留，传授除魔斩妖的道理。弟子谨记师门教诲，外出历劫四方，拯救无数黎明百姓，论修行，弟子是否应该……应该……位列仙班？</font>"."<br>";
echo "<font color=black>师门祖师：呵呵，原来为的此事。实不相瞒，如今阐教和截教再为封神之事的而纷争不绝，封神一事迟迟未决。你去天宫一躺了解下情况，看能不能调停封神之争，帮助能人异士顺利成仙。</font>"."<br>";








} elseif ($rid==6) {
echo "<font color=black>接引仙子：小仙卿前来天宫，可是为封神一事？</font>"."<br>";	
echo "<font color=black>".$name."：仙人果然神机妙算。不知仙人可否详尽道来封神大战一事？</font>"."<br>";








} elseif ($rid==7) {
echo "<font color=black>接引仙子：（介绍阐教，截教）。阐教李天王在天王殿，截教李公明在通明宫，小仙卿可以加入其中一教，便可得道成仙。</font>"."<br>";

} elseif ($rid==8) {
echo "<font color=black>接引仙子：小仙卿骨骼精奇，可否愿意助我教完成封神大业，到时定会为小仙卿留一仙席。</font>"."<br>";
echo "<font color=black>".$name."：愿为效劳！</font>"."<br>";


} elseif ($rid==9) {
echo "<font color=black>接引仙子：如今凡间群妖四起，小仙卿去平定各方妖怪（击杀通天塔10层终极BOSS）</font>"."<br>";
} elseif ($rid==10) {
echo "<font color=black>接引仙子：如今凡间群妖四起，小仙卿去平定各方妖怪（已击杀）</font>"."<br>";



} elseif ($rid==11) {
echo "<font color=black>接引仙子：不错不错。开封广场内通天塔内妖气冲天，其中有一妖怪幻化成【圣婴大王】，更是到处诋毁我教，小仙卿去教训一下它。（击败通天塔15层【圣婴大王】×1）</font>"."<br>";




} elseif ($rid==12) {
echo "<font color=black>接引仙子：不错不错。开封广场内通天塔内妖气冲天，其中有一妖怪幻化成【圣婴大王】，更是到处诋毁我教，小仙卿去教训一下它。（击败通天塔15层【圣婴大王】×1）（已完成）</font>"."<br>";





} elseif ($rid==13) {
echo "<font color=black>接引仙子：你回来的正是时候，《封神榜》自上次阐截大战后便化成碎片，刚才有消息传来其中一块碎片落入了昆仑山区烈炽灵狐手中，你速速前去取回。</font>"."<br>";



} elseif ($rid==14) {
echo "<font color=black>烈炽灵狐：大胆凡人竟敢闯入我火焰山！</font>"."<br>";
	
echo "<font color=black>".$name."：我是奉？教之命前来取回封神榜碎片，快快交出方可饶你一命！</font>"."<br>";



} elseif ($rid==15||$rid==16) {

echo "<font color=black>烈炽灵狐：少废话，看我九味真火！（击败烈炽灵狐）</font>"."<br>";



} elseif ($rid==17||$rid==18||$rid==19) {
echo "<font color=black>烈炽灵狐：果然是仙界中人！我妖界亦非等闲之辈！看我分身术！（击败烈炽灵狐分身）</font>"."<br>";

} elseif ($rid==20||$rid==21) {
echo "<font color=black>烈炽灵狐：果然是仙界中人！我妖界亦非等闲之辈！看我分身术！（击败烈炽灵狐真身）</font>"."<br>";


} elseif ($rid==22) {
echo "<font color=black>烈炽灵狐：只见烈炽灵狐在地上奄奄一息，趁你不注意的时候在一溜青烟中消失了。</font>"."<br>";


} elseif ($rid==23) {
echo "<font color=black>接引仙子：小仙卿果然功夫了得。但是接下来的任务可不是考功夫那么简单哦！方寸山瑶台的菩提祖师是鸿钧老祖大弟子的化身，他手中也有一块封神榜碎片，只赠与有缘人。</font>"."<br>"; 		

} elseif ($rid==24) {
echo "<font color=black>方寸山瑶台的菩提祖师偷取锦囊</font>"."<br>"; 		

} elseif ($rid==25) {

echo "<font color=black>菩提祖师(转职):恭喜你！！你已完成了159转职任务（达到199玩家可前往方寸山瑶台进行转职）</font>"."<br>"; 		


} elseif ($rid==26) {


echo "<font color=black>菩提祖师(转职):$name</font>"."<font color=black>你可总算回来了！你西游的这段时间，大唐皇帝李世民竟不念我门曾经为大唐除尽妖魔，公然与我门为敌，大肆剿杀我门弟子。从现在起我门与大唐势不两立，你快去取下大唐皇帝李世民的首级！</font>"."<br>";



} elseif ($rid==27) {
echo "<font color=black>请到方寸山瑶台菩提祖师(转职)处复命（大唐皇帝已击杀）</font>"."<br>";

} elseif ($rid==28) {
echo "<font color=black>".$nname."：哈~哈~哈~干得不错！（只见师门祖师将李世民的灵窍吸入口中，慈祥的面孔瞬间变得狰狞。）天子自有灵气护体，果然只有凡人才能接近李世民。李世民，我夫君有救了。该死的还有".$name."你！</font>"."<br>";
echo "<font color=black>".$name."：师门祖师，你……</font>"."<br>";


} elseif ($rid==46) {
    echo "<font color=black>阴曹地府20层击败【阎罗王】</font>"."<br>";
    echo "<font color=black>回地府寻找阎罗王</font>"."<br>";

} elseif ($rid==48) {
    $nname = '太上老君';
    echo "<font color=black>".$nname."：李世民的灵魂在阴曹地府 【菩提老祖】三十层BOSS手中，你去把他的灵魂带回来。</font>"."<br>";
    echo "<font color=black>提示：（击败阴曹地府 【菩提老祖】三十层BOSS）</font>"."<br>";
} elseif ($rid==49) {
    $nname = '太上老君';
    echo "<font color=black>".$nname."：李世民的灵魂在阴曹地府 【菩提老祖】三十层BOSS手中，你去把他的灵魂带回来。</font>"."<br>";
    echo "<font color=black>提示：（天宫-{$nname}）</font>"."<br>";

} elseif ($rid==55) {
    $nname = '杨中顺';
    echo "<font color=black>".$nname."：大仙你来的正好，这几位病人的症状分明是中了瘟疫，但是任凭怎么给他们喂服治疗瘟疫的药也是不能痊愈，真是奇怪。</font>"."<br>";
    echo "<font color=black>".$name."：你走近一看，发现这些病人手臂上都有一个淡淡的仙桃状黑印。你心想，袁天罡见多识广，于是前往天监台</font>"."<br>";
    $ydx=1;
    $ydy=23;
    $ydfy=5000000;
    include(XY_DIR . "/rw/ksrw.php");
} elseif ($rid==57) {
    $nname = '袁天罡';
    echo "<font color=black>".$nname."：盘古封印果然被冲破，大仙你立刻去【瑶池】（副本）铲除这棵蟠桃树！（传送至【瑶池】（副本），击败蟠桃树）</font>"."<br>";
    $ydx=23;//移动坐标x
    $ydy=23;//移动坐标y
    $ydfy=5000000;//传送费用
    include("./rw/ksrw.php");

} elseif ($rid==58) {
    $nname = '瑶池圣母';
    echo "<font color=black>".$nname."：大胆妖孽竟敢拔我蟠桃树，拿命来！（瑶池圣母一掌将你击倒在地上。幸好你有仙气护体，免于一死）</font>"."<br>";
    $ydx=23;//移动坐标x
    $ydy=0;//移动坐标y
    $ydfy=5000000;//传送费用
    include("./rw/ksrw.php");

} elseif ($rid==59) {
    $nname = '瑶池圣母';
    echo "<font color=black>".$nname."：大胆妖孽竟敢拔我蟠桃树，拿命来！（瑶池圣母一掌将你击倒在地上。幸好你有仙气护体，免于一死）</font>"."<br>";
    $ydx=23;//移动坐标x
    $ydy=0;//移动坐标y
    $ydfy=5000000;//传送费用
    include("./rw/ksrw.php");


} elseif ($rid==60) {
    $nname = '接引仙子';
    echo "<font color=black>".$nname."：完了完了，瑶池圣母重现，欺骗玉帝吃下了有毒的蟠桃，并扬言要灭世。现在玉帝被邪灵入侵，仙灵被带到了【通天塔】30层，你快去救他。（击败【通天塔】30层怪物）</font>"."<br>";
    //$ydx=78;//移动坐标x
    //$ydy=59;//移动坐标y
    //$ydfy=100000;//传送费用
    //include("./rw/ksrw.php");

} elseif ($rid==61) {
    $nname = '接引仙子';
    echo "<font color=black>".$nname."：完了完了，瑶池圣母重现，欺骗玉帝吃下了有毒的蟠桃，并扬言要灭世。现在玉帝被邪灵入侵，仙灵被带到了【通天塔】30层，你快去救他。（击败【通天塔】30层怪物）</font>"."<br>";
    echo "<font color=black>提示：（天宫-{$nname}）</font>"."<br>";
    $ydx=23;//移动坐标x
    $ydy=0;//移动坐标y
    $ydfy=100000;//传送费用
    include("./rw/ksrw.php");

} elseif ($rid==62 || $rid == 63) {
    $nname = '接引仙子';
    echo "<font color=black>".$nname."：玉帝告诉了你盘古封印的秘密，并命你去“伏羲阵”处击败【如来佛祖】x10。（玩家击败【如来佛祖】x10）</font>"."<br>";
    $ydx=1;//移动坐标x
    $ydy=10;//移动坐标y
    $ydfy=100000;//传送费用
    include("./rw/ksrw.php");

} elseif ($rid==64) {
    $nname = '接引仙子';
    echo "<font color=black>".$nname."：玉帝告诉了你盘古封印的秘密，并命你去“伏羲阵”处击败【如来佛祖】x10。（玩家击败【如来佛祖】x10）</font>"."<br>";
    echo "<font color=black>提示：（天宫-{$nname}）</font>"."<br>";
    $ydx=23;//移动坐标x
    $ydy=0;//移动坐标y
    $ydfy=100000;//传送费用
    include("./rw/ksrw.php");

} elseif ($rid==65) {
    $nname = '接引仙子';
    echo "<font color=black>".$nname."：修补成功：只见立刻风气云涌，大地间响起了【盘古族咒】，瑶池圣母痛不欲生，请立即前往菩提师祖处领取仙20解封丹</font>"."<br>";

} elseif ($rid==66) {
    echo "<font color=black>菩提祖师(转职):这里赠与你一颗【伏羲仙丹】祝你以后西游路上劈荆斩刺</font>"."<br>";

} else{
echo "<font color=black>没有这个任务变量：".$rid."请尝试联系gm解决此问题！！</font><br>";
}




?>