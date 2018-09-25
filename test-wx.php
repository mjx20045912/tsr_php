<?php 
require_once "jssdk.php"; 
$appid = 'wxc3a89b2d9eb20b84'; 
$APPSECRET = 'b90e2947a5dde6605b2387f89d6e35d6'; 
$jssdk = new JSSDK($appid, $APPSECRET); 
$signPackage = $jssdk->GetSignPackage(); 
?> 
<script> 
    alert('<?php echo 'nonceStr'.$signPackage["nonceStr"]; ?>');
    alert('<?php echo 'timestamp'.$signPackage["timestamp"]; ?>');
    alert('<?php echo 'jsapiTicket'.$signPackage["jsapiTicket"]; ?>');
    alert('<?php echo 'url:'.$signPackage["url"]; ?>'); 
    alert('<?php echo 'signature:'.$signPackage["signature"]; ?>');

        wx.config({ 
            debug: true, 
            appId: '<?php echo $appid; ?>', 
            timestamp: <?php echo $signPackage["timestamp"]; ?>, 
            nonceStr: '<?php echo $signPackage["nonceStr"]; ?>', 
            signature: '<?php echo $signPackage["signature"]; ?>', 
            jsApiList: [ 
               'onMenuShareTimeline' 
            ] 
        }); 
        wx.ready(function() { 
            wx.onMenuShareTimeline({ 
                title: '二当家的', // 分享标题 
                link: 'http://0938tsr.cn/', // 分享链接 
                imgUrl: '', // 分享图标 
                success: function() { 
                    // 用户确认分享后执行的回调函数 
                }, 
                cancel: function() { 
                    // 用户取消分享后执行的回调函数 
                } 
            }); 
        }); 
    </script> 