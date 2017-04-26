<?php
class ClearPar{
    public function __construct(){

    }
    public function build($string){
        $answer = array();
        for($i=0;$i<strlen($string);$i++){
            $letter = $string{$i};
            echo $letter."\n";
        }
        return $answer;
    }

}
$object = new ClearPar();
echo $object->build("())()");