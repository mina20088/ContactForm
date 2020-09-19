<?php
include "../Global/Sanitize.php";
include "../Global/Validate.php";
include "../Database/Connection.php";
if(isset($_POST['Submit'])) {
    $FullName = SanitizeString([$_POST['FullName']], [FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_STRING], null);
    $Email = SanitizeString([$_POST['Email']], [FILTER_SANITIZE_EMAIL], null);
    $Telephone1= $_POST['full_Phone'];
    $Telephone = $_POST['telephone'];
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
                '&telephone=' . $Telephone .
                '&message=' . $Message;
        }
    }
    if (empty($Email)) {
        $QueryString .=
            "&Error2=please Fill Email" .
            "&firstname=" . $FullName .
            '&email=' . $Email .
            '&telephone=' . $Telephone .
            '&message=' . $Message;
    } else {
        if (!ValidateEmail($Email)) {
                 $QueryString .=
                    "&Error2=Please Enter A Valid Email" .
                    "&firstname=" . $FullName .
                    "&email=" . $Email .
                    "&telephone=" . $Telephone .
                    "&message=" . $Message;
            
        }
    }
    if (empty($Telephone)) {
        $QueryString .=
            "&Error3=please Fill Telephone" .
            "&firstname=" . $FullName .
            '&email=' . $Email .
            '&telephone=' . $Telephone .
            '&message=' . $Message;
    } else {
        if (!ValidatePhoneNumber(intval($Telephone))) {
            $QueryString .=
                "&Error3=Please Enter A valid Phone Number,Numbers Only Allowed" .
                "&firstname=" . $FullName .
                "&email=" . $Email .
                "&telephone=" . $Telephone .
                "&message=" . $Message;
        }
        if (!ValidatePhoneNumberLenght(strval($Telephone))) {
            $QueryString .=
                "&Error5=phone Number Length Allowed Between [1-15] Digit" .
                "&firstname=" . $FullName .
                "&email=" . $Email .
                "&telephone=" . $Telephone .
                "&message=" . $Message;
        }
    }
    if (empty($Message)) {
        $QueryString .=
            "&Error4=please Fill Message" .
            "&firstname=" . $FullName .
            '&email=' . $Email .
            '&telephone='. $Telephone .
            '&message=' . $Message;
    }
    if ($QueryString) {
        header("location:../index.php?" . $QueryString);
    } else {

        if(true){
            if(isset($Connection)){
                $InsertInfo = "insert into user(Full_Name,Email,Telephone,Message) values (?,?,?,?)";
                if($Statment = $Connection->prepare($InsertInfo)){
                    if($Statment->bind_param('ssss',$FullName,$Email,$Telephone1,$Message)){
                        $Statment->execute();
                        $Statment->close();
                    }
                }
                $SelectInfo = "select Ticket_ID,Full_Name,Email,Time_Stored from user ";
                if($Statment = $Connection->query($SelectInfo)){
                    while($obj = $Statment->fetch_object()){
                        $QueryString.=
                            "Message=The Data Has Been Added To Our Database Successfully And Answer Will Be Sent Soon".
                            "&Ticket_ID=".$obj->Ticket_ID.
                            "&FullName=" . $obj->Full_Name .
                            "&Email=" . $obj->Email.
                            "&Time_Stored=".$obj->Time_Stored;
                    }
                }
                $Connection->close();
                if($QueryString){
                    header("location:../Confirmation.php?".$QueryString);
                }
            }
        }
    }
}else if(isset($_POST['Cancel'])){
    header("location:../index.php");
}