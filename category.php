<?php   
header("content-type:text/html;charset=utf-8"); 

    require_once 'db/db_comm.php';
    $db = DB::getIntance();
    $category=$_GET['category'];
   
// insert
//  $insert_data = ["option_name"=>"sub_title","option_value"=>"jimson.ma web site"];
//  $res = $db->insert('mjx_options',$insert_data);
     
    $categoryQuery = "select name from mjx_category where slug = '".$category."'";
    $categoryRow = $db->getRow($categoryQuery); 
    if(!$category || !$categoryRow){
        echo "404!";
        return;
    }
    $page_title =$categoryRow['name']; 
    include './header.php';
    $query = "select * from mjx_posts where category='".$category."'";
  
    $res= $db->query($query);
    $content = "";
    while($row=mysqli_fetch_assoc($res))
    { 
        echo "<div><a href='post.php?id=".$row["ID"]."'>".$row["post_title"]."</a></div>"; 
    }
    

    echo $content;

    include './footer.php';
?>

