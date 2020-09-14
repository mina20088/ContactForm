<?php
include "../Global Functions/Sanitize.php";
include "../Global Functions/Validate.php";
if(isset($_POST['Submit'])){
    $FullName = SanitizeString([$_POST['FullName']],[FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_STRING],null);
    $Email = SanitizeString([$_POST['Email']],[FILTER_SANITIZE_EMAIL],null);
    $Telephone = SanitizeString([intval($_POST['full_Phone'])],[FILTER_SANITIZE_NUMBER_INT],null);
    $Message = SanitizeString([$_POST['message']],[FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_STRING],null);
    $QueryString = "";
    if(empty($FullName)){
        $QueryString .= "Error1=please Fill First Name&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if(empty($Email)){
        $QueryString .= "&Error2=please Fill Email&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if(empty($Telephone)){
        $QueryString .= "&Error3=please Fill Telephone&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if(empty($Message)){
        $QueryString .= "&Error4=please Fill Message&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if($QueryString){
        header("location:../index.php?".$QueryString);
    }else{

        if(!CheckStringValue($FullName)) {
            $QueryString .= "Err=please use string characters only in first name&"."firstname="."".'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
        }
        if($QueryString){
            header("location:../index.php?".$QueryString);
        }
        else{
            header("location:../Components/Confirmation.php?Message=The Data Has Been Added To Our Database Successfully And Answer Will Be Sent Soon");
        }
    }
}