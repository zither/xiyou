<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>分区列表-幻想西游-</title>
    <link rel="stylesheet" href="../css/touchScreen/mobile.css"/>
    <link rel="stylesheet" href="../css/touchScreen/ch5game.css"/>
    <link rel="stylesheet" href="../css/touchScreen/ccolorbutton.css"/>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon"/>
    <style type="text/css">
        a {
            color: #0077E0;
        }

        table {
            max-width: 600px;
            min-width: 280px;
        }

        td {
            height: 30px;
        }

        .lbg {
            height: 20px;
            border-bottom: 1px solid #DCDCDC;
        }

        .btable {
            border-top: 1px solid #9DB3C5;
        }

        .circle {
            width: 16px;
            height: 16px;
            line-height: 16px;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            color: #fff;
            text-align: center;
            font-size: 10px;
        }

        .red.circle {
            background: #e62727;
        }

        .orange.circle {
            background: #ff5c00;
        }

        .pink.circle {
            background: #e22092;
        }

        .green.circle {
            background: #56A418;
        }

        .blue.circle {
            background: #2981e4;
        }

        .err {
            color: red;
            font-size: 13px;
        }
    </style>
</head>
<body>
<div class="g-mn">
    <div class="m-box">
        <div class="m-box-hd">
            <div class="tt">
                分区列表 - 幻想西游
            </div>
        </div>
        <div class="m-box-mn" style="padding: 5px 10px 0px 10px;">
            <div style="min-height: 80px;">
                <table>
                    <tr>
<!--                        <td>-->
<!--                            <div class="lbg">-->
<!--                                <div class="blue circle">2</div>-->
<!--                            </div>-->
<!--                        </td>-->
                        <td>
                            <div class="lbg"><a href="<?=$url?>/fqxy/xyy.php<?php echo $xxjyurl; echo "&qy=1" ?>" style='color:green'>新区【傲来国】</a></div>
                        </td>
<!--                        <td>-->
<!--                            <div class="lbg"><a href="--><?//=$url?><!--/fqxy/xyy.php--><?php //echo $xxjyurl; echo "&qy=1" ?><!--" style='color:green'>进入游戏</a></div>-->
<!--                        </td>-->
                    </tr>
                    <tr>
<!--                        <td>-->
<!--                            <div class="lbg">-->
<!--                                <div class="blue circle">1</div>-->
<!--                            </div>-->
<!--                        </td>-->
                        <td>
                            <div class="lbg"> 老区【乌鸡国】（关停）</div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="article-content" style="font-size: 15px;margin-top: 10px;">
            </div>
        </div>
    </div>
</div>
</body>
</html>


