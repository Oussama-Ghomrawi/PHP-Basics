
//function calculateArea(){
//    $height=5;
//    $width=3;
//    $area= $height*$width;
//    return $area;
//};
//$area = calculateArea();
//echo "Area is ${area}\n";

<?php
    $height = 0;
    $width = 0;
    function calculateArea($height, $width) {
        $area = $height * $width;
        echo $area;
    };
    calculateArea(5,3)
?>