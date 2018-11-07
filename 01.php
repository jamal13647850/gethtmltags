<?php
    header('content-type: text/plain');
    //$html = file_get_contents('https://gosafir.com/fa');
    //$tags = get_meta_tags('https://gosafir.com/fa');
    //echo $tags['description']."<br>";
    //echo $tags['keywords']."<br>";
    $html = file_get_contents('https://gosafir.com/fa');
    preg_match('#<p>(.*?)</p>#',$html,$match);
    echo count($match);

    for($i=0;$i<count($match);$i++){
        echo $match[$i];
    }

    preg_match('#<div class="copyright">([\s\S]+)<span>([\s\S]+)</span>([\s]+|\r\n|\r|\n)</div>#',$html,$match);
    echo count($match);

echo $match[0];

    preg_match_all('#<li id="menu-item-[\d]+" class=".*?">.*?</li>#',$html,$match);
    echo count($match);

echo $match[0][0];
echo $match[0][1];
echo $match[0][2];
echo $match[0][3];
echo $match[0][4];
echo $match[0][5];
echo $match[0][6];
echo $match[0][7];