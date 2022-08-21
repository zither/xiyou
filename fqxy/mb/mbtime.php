<?php


$mbfilePath = "./mb/".$mbflie.".php";
if (file_exists($mbfilePath)) {
    include("./mb/" . $mbflie . ".php");//天降密宝
} else {
    $mb = 0;
}
$mbxs=1;
$date=date("Y-m-d H:i:s");
if($date> $mb){
    $mbxs=2;
}else{

}

