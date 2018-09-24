<?php   
    require_once '../db/db_comm.php';
    
    $db = DB::getIntance();
    include './header.php';
    $query = "select * from mjx_posts ";
?>

<script type="text/javascript" charset="utf-8" src="ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="ueditor/ueditor.all.js"> </script>
<script type="text/javascript" charset="utf-8" src="ueditor/lang/zh-cn/zh-cn.js"></script>
<div>
     <h3>文章发布</h3>
    
    <div id="editor" type="text/plain" style="width:1024px;height:500px;"></div>
    <button class="btn btn-success" id="post_btn">
        文章发布
    </button>
    <button class="btn btn-primary" id="save_btn">
        暂存草稿
    </button>
    <div id="message" class="alert" role="alert"></div>

</div>
<script type="text/javascript">
    // var ue = UE.getEditor('editor');
    $(function(){
        var ue = UE.getEditor('editor'); 
        $("#message").hide();
        var send_post = function(isPost){
            var text = ue.getContentTxt();
            if(!text){
                alert("kone");
                return;
            }
            var param = {};
            param.title = "this is title";
            param.content = ue.getContent();
            $.post('./controllers/postController.php',param,function(data){
                console.log("post data");
                console.log(data);
            })
        }
        $("#post_btn").click(function(){
            send_post(true);
        })
        $("#save_btn").click(function(){
            send_post(false);
        })
    })

</script>
<?php
    include './footer.php';
?>