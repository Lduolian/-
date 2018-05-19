<?php
    $content = file_get_contents('http://2017.ip138.com/ic.asp');
    // echo $content;
    $content = iconv('gb2312','utf-8',$content);

    preg_match('/\[((\d{1,3}\.){3}\d{1,3})\]/',$content,$res);
    echo $res[1];


    // preg_match('/\[((\d{1,3}\.){3}\d{1,3})\]/',$content,$res);

    // echo $res[1] ;
    
?>