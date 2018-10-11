<?php
// 数据库连接类
class Post{
    public $id;
    public $title;
    public $author;
    public $category;
    public $summary;
    public $content;
    public $createTime;
    public $updateTime;

    public function __construct(){
        $this->id = 0;
        $this->title = "";
        $this->author = "";
        $this->content = "";
        $this->summary = "";
        $this->category= "";  
    }
    public function readValue($sqlData){
        $this->id = $sqlData["ID"];
        $this->title =  $sqlData["post_title"];
        $this->author = $sqlData["post_author"];
        $this->content =$sqlData["post_content"];
        $this->summary =  $sqlData["summary"];  
        $this->category=$sqlData["category"];
    }
}
?>