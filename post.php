 
<?php   
    require_once 'db/db_comm.php';
    $db = DB::getIntance();
// insert
//  $insert_data = ["option_name"=>"sub_title","option_value"=>"jimson.ma web site"];
//  $res = $db->insert('mjx_options',$insert_data);
    $id=$_GET['id'];
    if(!$id){
        echo "404!";
        return;
    }
    $query = "select * from mjx_posts where ID =".$id;
    $res= $db->query($query);
    $content = "";
    while($row=mysqli_fetch_row($res))
    {
        $page_title = $row[5];
       
        // $content =  $content."<h2>".$row[5]."</h2>";
        $content =  $content."<div>".$row[4]."</div>";
    }
    include './header.php';

    echo $content;

    include './footer.php';
?>  