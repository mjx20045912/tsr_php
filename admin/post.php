<?php   
    require_once '../db/db_comm.php';
    require_once './controllers/post.php';
    
    $db = DB::getIntance();
    include './header.php';
    $postId = $_GET['id'];
    $post = new Post();
    if($postId){
        echo $postId;
        $query = "select * from mjx_posts where ID=".$postId; 
        $res= $db->query($query);
        $row=mysqli_fetch_assoc($res);
        if($row){
            $post->readValue($row);
        }else{
            echo "<script>alert('找不到该文章，将新建。。')</script>";
            $postId =0;
        } 
    }else{
        $postId =0;
    }
    $query = "select * from mjx_category"; 
    $res= $db->query($query);
?>

<script type="text/javascript" charset="utf-8" src="ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="ueditor/ueditor.all.js"> </script>
<script type="text/javascript" charset="utf-8" src="ueditor/lang/zh-cn/zh-cn.js"></script>
<div>
    <h3>文章发布</h3> 
        <div class="form-group">
            <label for="exampleInputEmail1">标题</label>
            <input type="text" class="form-control" id="postTitle" value="<?php echo $post->title ?>" />
        </div>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="exampleInputPassword1">作者</label>
            <input type="text" class="form-control" id="postAuthor" value="<?php echo $post->author ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputPassword1">类别</label>
            <select class="form-control" id="postCategory" value="<?php echo $post->category ?>">
                <?php 
                while($row=mysqli_fetch_assoc($res)){
                    echo "<option value=".$row["slug"].">".$row["name"]."</option>";
                } 
                ?>
            </select>
            
        </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">摘要</label>
            <input type="text" class="form-control" id="postSummary" value="<?php echo $post->summary ?>">
        </div> 
        <div class="form-group">
            <label for="exampleInputFile">正文</label>
            <div id="editor" type="text/plain" style="width:100%;height:500px;"></div>
            <button class="btn btn-success" id="post_btn">
                文章发布
            </button>
            <button class="btn btn-primary" id="save_btn">
                暂存草稿
            </button>
        </div> 
    <div id="message" class="alert" role="alert"></div>

</div>
<script type="text/javascript">
    // var ue = UE.getEditor('editor');
    $(function(){
        var ue = UE.getEditor('editor'); 
        $("#message").hide();
        var initContent = function(){
            ue.setContent('<?php echo str_replace(array("\r", "\n"), array('', '\n'), addslashes($post->content)); ?>');
        }
        $("#postCategory").val("<?php echo $post->category ?>");
        setTimeout(initContent,1000);
        var send_post = function(isPost){
            var text = ue.getContentTxt();
            if(!text){
                alert("kone");
                return;
            }
            var param = {};
            param.id = <?php echo $postId ?>;
            param.author = $("#postAuthor").val();
            param.title = $("#postTitle").val();
            param.summary = $("#postSummary").val();
            param.content = ue.getContent();
            $.post('./controllers/postController.php',param,function(data){
               if(data.status == 200){
                    location.pathname = "/tsr/admin"
               }else{
                $("#message").text(data.message).show();
               }
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