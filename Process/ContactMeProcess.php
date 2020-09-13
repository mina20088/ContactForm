<?php
include "../Global Functions/SANITIZE.php";
if(isset($_POST['Submit'])){
    $FullName = SanitizeString([$_POST['FullName']],[FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_STRING],null);
    $Email = SanitizeString([$_POST['Email']],[FILTER_SANITIZE_EMAIL],null);
    $Telephone = SanitizeString([intval($_POST['full_Phone'])],[FILTER_SANITIZE_NUMBER_INT],NULL);
    $Message = SanitizeString([$_POST['message']],[FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_STRING],null);
    $QuaryString = "";
    if(empty($FullName)){

        $QuaryString .= "Error=please Fill First Name&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if(empty($Email)){
        $QuaryString .= "Error=please Fill Email&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if(empty($Telephone)){
        $QuaryString .= "Error=please Fill Telephone&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if(empty($Message)){
        $QuaryString .= "Error=please Fill Message&firstname=".$FullName.'&email='.$Email.'&telephone='.$Telephone.'&message='.$Message;
    }
    if($QuaryString){
        header("location:../index.php?".$QuaryString);
    }
}