<?php

class CompleteRange​{
    public function __construct(){

    }
    public function build($array){
        $answer = array();
        $first = $array[0];
        $last = $array[count($array)-1];
        for($i=$first; $i<=$last;$i++){
            $answer[] = $i;
        }
        return $answer;
    }

}

$object = new CompleteRange​();

echo json_encode($object->build(array(2, 4, 9)))."\n";

?>
