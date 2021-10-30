<?php 
    require_once "../vender/autoload.php";

    $route = new \App\route;

    echo "Legal";

    echo "<pre>";
    print_r($route->run(''));
    echo "</pre>";
?>