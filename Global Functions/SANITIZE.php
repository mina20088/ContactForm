<?php
function SanitizeString($String,$Sanitize_filters_ID,$Flags){
    $FilteredString = "";
    if(isset($String)){
        if(is_array($String)){
            if(is_array($Sanitize_filters_ID)){
                if($Flags!= null){
                    for($i = 0; $i<count($String); $i++){
                        for($k = 0; $k<count($Sanitize_filters_ID); $k++){
                            for($n = 0; $n<count($Flags); $n++){
                                $FilteredString = filter_var($String[$i],$Sanitize_filters_ID[$k],$Flags[$n]);
                            }
                        }
                    }
                }else{
                    for($i = 0; $i<count($String); $i++) {
                        for ($k = 0; $k < count($Sanitize_filters_ID); $k++) {
                            $FilteredString = filter_var($String[$i],$Sanitize_filters_ID[$k]);
                        }
                    }
                }
            }
        }
    }
    return $FilteredString ;
}
