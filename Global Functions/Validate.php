<?php
function CheckStringValue($String){
    $stringPattern = "/[a-zA-Z](\w*)(\s)/";
    $Status = false;
    if(preg_match($stringPattern,$String)){
        $Status = true;
    }else{
        $Status = false;
    }
    return $Status;
}
