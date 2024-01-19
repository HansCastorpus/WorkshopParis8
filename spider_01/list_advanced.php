<?php

$nombres = [-10,5,-3,2,1,-6];
$nombrespositifs = [];
$i=0;

while($i < count($nombres)){
    $x = $nombres[$i];
    if($x > 0){
        array_push($nombrespositifs, $x);
    }
    $i++;
}
echo json_encode($nombrespositifs);


?>