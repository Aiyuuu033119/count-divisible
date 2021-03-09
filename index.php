<?php

    header('Access-Control-Allow-Origin: *');

    $uri = $_SERVER['REQUEST_URI'];
    $uri = trim($uri, '/');
    
    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    echo $uriSegments[1]; //returns codex
    echo $uriSegments[2]; //returns foo
    echo $uriSegments[3]; //returns bar

    $index = new compute();
    $index->index();

    class compute{
        public function index()
        {
            echo('running');
        }
    }
    
    
    // $x = $_POST['x'];
    // $y = $_POST['y'];
    // $p = $_POST['p'];

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

?>