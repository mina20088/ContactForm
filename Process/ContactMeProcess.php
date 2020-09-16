<?php
include "../Global Functions/Sanitize.php";
include "../Global Functions/Validate.php";
if(isset($_POST['Submit'])) {
    $FullName = SanitizeString([$_POST['FullName']], [FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING], null);
    $Email = SanitizeString([$_POST['Email']], [FILTER_SANITIZE_EMAIL], null);
    if(settype($_POST['full_Phone'],'string')){
        $Telephone = $_POST['full_Phone'];
    }
    $Telephone1 = $_POST['telephone'];
    $Message = SanitizeString([$_POST['message']], [FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING], null);
    $QueryString = "";
    if (empty($FullName)) {
        $QueryString .=
            "Error1=please Fill First Name" .
            "&firstname=" . $FullName .
            '&email=' . $Email .
            '&telephone=' . $Telephone1 .
            '&message=' . $Message;
    } else {
        if (!ValidateString($FullName)) {
            $QueryString .=
                "Error1=please use string characters only in first name" .
                "&firstname=" .
                '&email=' . $Email .
                '&telephone=' . $Telephone1 .
                '&message=' . $Message;
        }
    }
    if (empty($Email)) {
        $QueryString .=
            "&Error2=please Fill Email" .
            "&firstname=" . $FullName .
            '&email=' . $Email .
            '&telephone=' . $Telephone1 .
            '&message=' . $Message;
    } else {
        if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            if (!ValidateEmail($Email)) {
                $QueryString .=
                    "&Error2=Please Enter A Valid Email" .
                    "&firstname=" . $FullName .
                    "&email=" . $Email .
                    "&telephone=" . $Telephone1 .
                    "&message=" . $Message;
            }
        }
    }
    if (empty($Telephone)) {
        $QueryString .=
            "&Error3=please Fill Telephone" .
            "&firstname=" . $FullName .
            '&email=' . $Email .
            '&telephone=' . $Telephone1 .
            '&message=' . $Message;
    } else {
        if (!ValidatePhoneNumber($Telephone)) {
            $QueryString .=
                "&Error3=Please Enter A valid Phone Number,Numbers Only Allowed" .
                "&firstname=" . $FullName .
                "&email=" . $Email .
                "&telephone=" . $Telephone1 .
                "&message=" . $Message;
        }
        if (!ValidatePhoneNumberLenght($Telephone)) {
            $QueryString .=
                "&Error5=phone Number Length Allowed Between [1-15] Digit" .
                "&firstname=" . $FullName .
                "&email=" . $Email .
                "&telephone=" . $Telephone1 .
                "&message=" . $Message;
        }
    }
    if (empty($Message)) {
        $QueryString .=
            "&Error4=please Fill Message" .
            "&firstname=" . $FullName .
            '&email=' . $Email .
            '&telephone='. $Telephone1 .
            '&message=' . $Message;
    }
    if ($QueryString) {
        header("location:../index.php?" . $QueryString);
    } else {
        header("location:../Components/Confirmation.php?Message=The Data Has Been Added To Our Database Successfully And Answer Will Be Sent Soon");
    }
}

