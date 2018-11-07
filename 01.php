<?php
    //header('content-type: text/plain');
    //$html = file_get_contents('https://gosafir.com/fa');
    $tags = get_meta_tags('https://gosafir.com/fa');
    echo $tags['description']."<br>";
    echo $tags['keywords']."<br>";
