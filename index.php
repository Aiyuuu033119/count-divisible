<?php

    header('Access-Control-Allow-Origin: *');

    $uri = $_SERVER['REQUEST_URI'];
    $uri = trim($uri, '/');
    
    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    
    $index = new compute();
    $index->index($uriSegments[2],$uriSegments[3],$uriSegments[4]);

    class compute{
        public function index($x,$y,$p)
        {
            echo('running');
            echo $x; //returns codex
            echo $y; //returns foo
            echo $p; //returns bar

            // $data = array(
            //     'x' => $x,
            //     'y' => $y,
            //     'p' => $p
            // );

            // if ($array['x'] % $array['p'] == 0){
            //     $info = $array['y'] / $array['p'] - $array['x'] / $array['p'] + 1;
            // }

            // $info = $array['y'] / $array['p'] - $array['x'] / $array['p'];

            // echo json_encode($info);
        }
    }

?>