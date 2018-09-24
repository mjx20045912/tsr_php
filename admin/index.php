<?php   
    require_once '../db/db_comm.php';
    
    $db = DB::getIntance();
    include './header.php';
    $query = "select * from mjx_posts ";
  
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
        </tr>
      </thead>
  <tbody>';
    
    while($row=mysqli_fetch_assoc($res))
    { 
        echo "<tr><td></td><td><a href='post.php?id=".$row["ID"]."'>".$row["post_title"]."</a></td>
        <td></td><td>".$row["category"]."</td><td></td><td>".$row["post_date"]."</td>"; 
    }
    echo '</tbody></table>';

    include './footer.php';
?>