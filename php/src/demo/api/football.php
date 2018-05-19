<?php
    $page = isset($_GET['page'])? $_GET['page'] : 1;
    $qty = isset($_GET['qty']) ? $_GET['qty'] : 10;

    $path = "../data/football.json";
    $file = fopen($path,"r");
    $content = fread($file,filesize($path));
   
    
    $data = json_decode($content);
    

    $data = array(
            "total"=>count($data),
            "data"=>array_slice($data,$qty*($page-1),$qty),
            "page"=>$page,
            "qty"=>$qty
        );
    echo json_encode($data,JSON_UNESCAPED_UNICODE);
    

?>