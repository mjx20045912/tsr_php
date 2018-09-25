<?php 
header("content-type:text/html;charset=utf-8"); 

// echo phpinfo();

// $link= mysqli_connect('rm-bp199tjtb956ve6co.mysql.rds.aliyuncs.com:3306','mjx20045912','User@123');
// if(!$link){
//     echo "数据库连接失败<br>";
//     echo "错误编码".mysqli_errno($link)."<br>";
//     echo "错误信息".mysqli_error($link)."<br>";
//     exit;
//   }

//   $mysqli=new mysqli();//实例化mysqli
//    $mysqli->connect('rm-bp199tjtb956ve6co.mysql.rds.aliyuncs.com','mjx20045912','User@123','ryy3yr3096');
//    if(mysqli_connect_error()){
//        echo'数据库连接错误,错误信息是.'.mysqli_connect_error();
//        exit();
//    }else{
//        echo '数据库连接成功';
//    }
 
   require_once "jssdk.php"; 
   $appid = 'wxc3a89b2d9eb20b84'; 
   $APPSECRET = 'b90e2947a5dde6605b2387f89d6e35d6'; 
   $jssdk = new JSSDK($appid, $APPSECRET);  
   $aaa = $jssdk->getSignPackage();
//    echo  $aaa["jsapiTicket"];
    // $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wxc3a89b2d9eb20b84&secret=b90e2947a5dde6605b2387f89d6e35d6";
    // echo httpGet($url);

  echo sha1('jsapi_ticket=kgt8ON7yVITDhtdwci0qedM3XjS1ca3LpvEnWwxzXpyiXzadTdCc7eFreInAJJFgfjCI3PY0QemX91-u1XHRAg&noncestr==1537889923&url=http://0938tsr.cn/');
 
?>