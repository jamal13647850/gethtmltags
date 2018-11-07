<?php
    header('content-type: text/plain');
    $html = file_get_contents('https://gosafir.com/fa');
    echo $html;