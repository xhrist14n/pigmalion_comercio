<?php

class ChangeString{
    public $letters;
    public $letters_array;
    public function __construct(){
        $this->letters = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,ñ,o,p,q,r,s,t,u,v,w,x,y,z";
        $this->letters_array = explode(",",$this->letters);
    }
    public function change($ordinal){
        $flag = false;
        $letter = '';
        foreach($this->letters_array as $index=>$content){
            $content = trim($content);
            $pos = ($index+1)%count($this->letters_array);
            if($ordinal==$content){
                    $letter=$this->letters_array[$pos];
                    $flag = true;
            }elseif($ordinal==strtoupper($content)){
                    $letter=strtoupper($this->letters_array[$pos]);
                    $flag = true;
            }else{
                if($flag == false){
                    $letter=$ordinal;
                }
            }
        }
        return $letter;
    }
    public function build($string){
        $answer = "";
        $length = strlen($string);
        for($i =0 ; $i<$length;$i++){
            $ordinal = $string{$i};
            $letter = $this->change($ordinal);
            $answer.=$letter;
        }
        return $answer;
    }
}

/*
Mode of use:
*/
/*
$object = new ChangeString();
echo $object->build("123 bcde​*3")."\n";
echo $object->build("**​Dbtb​ 52")."\n";
echo $object->build("**Casa 52Z")."\n";
*/
?>