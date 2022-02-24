<?php
function calculateArea(){
    $height=5;
    $width=3;
    $area= $height*$width;
    return $area;
};
$area = calculateArea();
echo "Area is ${area}\n";
?>