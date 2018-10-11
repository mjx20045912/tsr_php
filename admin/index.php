
<div class="pull-right"> <a href="post.php">文章发布</a></div>
<?php   
    require_once '../db/db_comm.php';
    $db = DB::getIntance();
    include './header.php';
    $query = "select p.*,c.name as category_name from mjx_posts p left join mjx_category c on p.category=c.slug";
  
    $res= $db->query($query);
   echo '<table class="table table-bordered">
    <thead>
        <tr>
          <th>#</th>
          <th>标题</th>
          <th>作者</th>
          <th>分类</th>
          <th>状态</th>
          <th>发表时间</th>
          <th>操作</th>
        </tr>
      </thead>
  <tbody>';
    
    while($row=mysqli_fetch_assoc($res))
    { 
        echo "<tr><td></td><td><a href='post.php?id=".$row["ID"]."'>".$row["post_title"]."</a></td>
        <td>".$row["post_author"]."</td><td>".$row["category_name"]."</td><td></td><td>".$row["post_date"]."</td><td><a href='post.php?id=".$row["ID"]."'>编辑</a></td>"; 
    }
    echo '</tbody></table>';

    include './footer.php';
?>