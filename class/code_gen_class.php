<?php
class CodeGen{
	
function Code($size)
{   
    
    $code ="";
    for ($i=0;$i<$size;$i++)
    {   
        $type = mt_rand(1,6);
        switch ($type)
        {
            case ($type<=2):
                $code .= mt_rand(0,9);   
            break;
            case ($type<=4):
                $code .= chr(mt_rand(65,90));   
            break;
            case ($type<=6):
                $code .= chr(mt_rand(97,122));   
            break;
        }
    }
    return $code;
} 
}
?>