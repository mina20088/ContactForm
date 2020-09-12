<?php
include "../Global Functions/SANITIZE.php";
if(isset($_POST['Submit'])){
    $FullName = SanitizeString([$_POST['FullName']],[FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_STRING],null);
    $Email = SanitizeString([$_POST['Email']],[FILTER_SANITIZE_EMAIL],null);
    $Telephone = $_POST['phone-full'];
    $Message = SanitizeString([$_POST['message']],[FILTER_SANITIZE_SPECIAL_CHARS,FILTER_SANITIZE_STRING],null);
}