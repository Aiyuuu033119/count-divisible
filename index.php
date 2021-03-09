<?php

    header('Access-Control-Allow-Origin: *');

    $uri = $_SERVER['REQUEST_URI'];
    $uri = trim($uri, '/');
    
    $index = new compute();
    $index->index(intval($_GET['x']),intval($_GET['y']),intval($_GET['p']));

    class compute{
        public function index($x,$y,$p)
        {
            // echo('running');
            // echo $x; //returns codex
            // echo $y; //returns foo
            // echo $p; //returns bar

            if ($x % $p == 0){
                $info = $y / $p - $x / $p + 1;
            }

            $info = $y / $p - $x / $p;

            echo json_encode($info);
        }
    }

?>