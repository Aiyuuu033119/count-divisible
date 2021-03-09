<?php

    setHeader('Access-Control-Allow-Origin', '*');
    setHeader('Access-Control-Allow-Headers', '*');
    setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE');
    setStatusCode(200);

    echo('running');
    $x = $_POST['x'];
    $y = $_POST['y'];
    $p = $_POST['p'];

    $data = array(
        'x' => $x,
        'y' => $y,
        'p' => $p
    );

    if ($array['x'] % $array['p'] == 0){
        $info = $array['y'] / $array['p'] - $array['x'] / $array['p'] + 1;
    }

    $info = $array['y'] / $array['p'] - $array['x'] / $array['p'];

    echo json_encode($info);

?>