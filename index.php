<?php

    class Compute{
        
        public function divisible()
        {
            $x = $_POST['x'];
            $y = $_POST['y'];
            $p = $_POST['p'];

            $data = array(
                'x' => $x,
                'y' => $y,
                'p' => $p
            );

            $index = new Compute();
            $info = $index->result($data);
            
            echo $info;
        }

        public function result($array) {	
            if ($array['x'] % $array['p'] == 0){
                return( $array['y'] / $array['p'] - $array['x'] / $array['p'] + 1);
            }
            return($array['y'] / $array['p'] - $array['x'] / $array['p']);
        }
    }
    

?>