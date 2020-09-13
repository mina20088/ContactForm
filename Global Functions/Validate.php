<?php
function CheckStringValue($String){
    $stringPattern = '/(\w+\s)/';
    $Status = false;
    if(preg_match($stringPattern,$String)){
        $Status = true;
    }else{
        $Status = false;
    }
    return $Status;
}

echo CheckStringValue('1212ee');