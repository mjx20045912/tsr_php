<?php   
header("content-type:text/html;charset=utf-8"); 
    require_once 'db/db_comm.php';
    $page_title ="天南地北天水人";
    $db = DB::getIntance();
    include './header.php';
    $query = "select * from mjx_posts ";
  
    $res= $db->query($query);
    $content = "";
    while($row=mysqli_fetch_assoc($res))
    { 
        echo "<div><a href='post.php?id=".$row["ID"]."'>".$row["post_title"]."</a></div>"; 
    }
    echo $content;

    include './footer.php';
?>

