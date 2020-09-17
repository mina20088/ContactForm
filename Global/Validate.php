<?php
function ValidateString($String){
    $Status = false;
    if(preg_match_all("/^([a-zA-Z\s]*(\s)*)$/i",$String,$matches)){
        $Status = true;
    }else{
        $Status = false;
    }
    return $Status;
}
/*validate the emil address according to the RFCC5322 email standard*/
function ValidateEmail($Email){
    $Status = false;
    if(preg_match_all("/[a-z0-9!#$%&'*+\/=?^_‘{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_‘{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/",$Email,$matches)){
        $Status = true;
    }else{
        $Status = false;
    }
    return $Status;
}
function ValidatePhoneNumber($phoneNumber){
    $Status = false;
    if(filter_var($phoneNumber,FILTER_VALIDATE_INT)){
        $Status = true;
    }else{
        $Status = false;
    }
    return $Status;
}
function ValidatePhoneNumberLenght($PhoneNumber){
    $Status = false;
    $phoneNumberLength = strlen($PhoneNumber);
    if($phoneNumberLength > 0 && $phoneNumberLength < 15){
        $Status = true;
    }else{
        $Status = false;
    }
    return $Status;
}