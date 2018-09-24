<?php 
function output($status, $message){
    echo json_encode([
        'state'=>$status,
        'message'=>$message
    ]);
}
 
try{
  require_once '../../db/db_comm.php';
  $db = DB::getIntance();
  date_default_timezone_set("Asia/Shanghai");

  $post_title = $_POST["title"];
  $post_content = $_POST["content"];
  $post_date = date("Y-m-d h:i:sa");
  $insert_data = ["post_title"=>$post_title,"post_content"=>$post_content,"post_date"=>$post_date];
  $res = $db->insert('mjx_posts',$insert_data);
  if($res > 0){
    output(200,'');
  }else{
    output(500,'插入失败');
  }
 }
 catch (Exception $e) { 
    output(500,'插入失败:'.$e->getMessage());
 }
?>