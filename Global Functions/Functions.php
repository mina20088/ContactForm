<?php
function getError($String1, $String2){
    if(isset($String)){
        echo "<span style='color: red'>$String1</span>";
    }elseif (isset($String2)){
        echo "<span style='color: red'>$String2</span>";
    }
}