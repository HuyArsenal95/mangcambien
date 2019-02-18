<?php
require "../1.php";
function demo($mang) {
$max = 0;
    for($i=0;$i<count($mang);$i++){
        if ($max == 0){
            $max = $mang[$i];
        }
        else {
            if ($mang[$i] > $max){
                $max = $mang[$i];
            }
         }
     }
     echo "$max";
}
demo($mang);
// echo "$max";
?>
