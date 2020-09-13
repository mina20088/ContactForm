<?php
include "../Global Functions/Sanitize.php";
include "../Global Functions/Validate.php";
if(isset($_POST['Submit'])){
    $FullName = SanitizeString([$_POST['FullName']],[FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_STRING],null);
    $Email = SanitizeString([$_POST['Email']],[FILTER_SANITIZE_EMAIL],null);
    $Telephone = SanitizeString([intval($_POST['full_Phone'])],[FILTER_SANITIZE_NUMBER_INT],null);
    $Message = SanitizeString([$_POST['message']],[FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_STRING],null);
    $QuaryString = "";
    if(empty($FullName)){
        $QuaryString .= "Error1=please Fill First Name&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if(empty($Email)){
        $QuaryString .= "&Error2=please Fill Email&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if(empty($Telephone)){
        $QuaryString .= "&Error3=please Fill Telephone&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if(empty($Message)){
        $QuaryString .= "&Error4=please Fill Message&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if($QuaryString){
        header("location:../index.php?".$QuaryString);
    }else{
        header("location:../Components/Confirmation.php?Message=The Data Has Been Added To Our Database Successfully And Anseer Will Be Sent Soon");
    }
}