<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $page_title ?></title>
    <meta name="keywords" content="天南地北天水人 ">
	<meta name="description" content="沟通心灵的桥梁 连接乡情的纽带">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/responsive-nav.js/1.12/responsive-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="https://cdn.bootcss.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/responsive-nav.js/1.12/responsive-nav.min.js"></script>
    <script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

    <script src="js/main.js"></script>
</head>
<body>
    <header>
        <div class="header">
        <div class="container">
            <div class="top">
                    <a href="/" title="天南海北天水人" rel="home" style="font-size:40px;">
                    <span>天南海北天水人</span></a>
                    <br><img src="img/sub.PNG" alt="">
                </div>
            <div class="menu" id="nav"> 
                <ul>
                    <li><a href="category.php?category=famous">大家风范</a></li>
                    <li><a href="category.php?category=medical">大医精诚</a></li>
                    <li><a href="category.php?category=writer">作家剪影</a></li>
                    <li><a href="category.php?category=printing">书画掠影</a></li>
                    <li><a href="category.php?category=embark">创业之道</a></li>
                    <li><a href="category.php?category=beauty">影艺娱乐</a></li>
                    <li><a href="category.php?category=military">军旅如歌</a></li>
                    <li><a href="category.php?category=folk">民间记忆</a></li>
                    <li><a href="category.php?category=nostalgia">记住乡愁</a></li>
                    <li><a href="category.php?category=travel">行游天水</a></li>
                    <li><a href="category.php?category=drama">戏剧人生</a></li>
                    <li><a href="category.php?category=news">天水动态</a></li> 
                </ul>   
            </div>
            <!-- <div id="toggle">菜单</div> -->
        </div>
</div>
<?php 
require_once "jssdk.php"; 
$appid = 'wxc3a89b2d9eb20b84'; 
$APPSECRET = 'b90e2947a5dde6605b2387f89d6e35d6'; 
$jssdk = new JSSDK($appid, $APPSECRET); 
$signPackage = $jssdk->GetSignPackage(); 
?> 
<script>  
        wx.config({ 
            debug: false, 
            appId: '<?php echo $appid; ?>', 
            timestamp: <?php echo $signPackage["timestamp"]; ?>, 
            nonceStr: '<?php echo $signPackage["nonceStr"]; ?>', 
            signature: '<?php echo $signPackage["signature"]; ?>', 
            jsApiList: [ 
                'checkJsApi',
            'openLocation',
            'getLocation',
            'onMenuShareTimeline',
            'onMenuShareAppMessage'
            ] 
        }); 
        wx.ready(function() { 
            wx.onMenuShareTimeline({ 
                title: document.title, // 分享标题 
                link: document.URL, // 分享链接 
                imgUrl: 'http://www.0938tsr.cn/timg.jpeg' // 分享图标 
                
            }); 
            wx.onMenuShareAppMessage({ 
                title: document.title, // 分享标题
                desc: document.title,
                link: document.URL, // 分享链接 
                imgUrl: 'http://www.0938tsr.cn/timg.jpeg' // 分享图标 
                
            }); 
        }); 
    </script> 

        <script>
            responsiveNav("#nav");
//   var navigation = responsiveNav("#nav",{customToggle: "#toggle"});
</script>
    </header>
    <hr>
    <div class="content">
        <div class="container">
