<?php
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    $path = '../data/weibo.json';
    $file = fopen($path,'r');
    $content = fread($file, filesize($path));
    fclose($file);

    $arr = json_decode($content);
    $res = '';
    foreach($arr as $item){
        if($item->id == $id){
            $item->likecnt++;
            $res = $item;
        }
    }

    echo json_encode($res,JSON_UNESCAPED_UNICODE);
    $file = fopen($path,'w');
    fwrite($file, json_encode($arr,JSON_UNESCAPED_UNICODE));
    fclose($file);

?>