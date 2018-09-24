<?php   
    require_once 'db/db_comm.php';
    
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

