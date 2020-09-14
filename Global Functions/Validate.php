<?php
function CheckStringValue($String){
    $Status = false;
    if(preg_match_all("/^([a-zA-Z\s]*(\s)*)$/i",$String,$matches)){
        $Status = true;
    }else{
        $Status = false;
    }
    return $Status;
}


