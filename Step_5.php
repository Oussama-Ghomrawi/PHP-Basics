<?php
$course_name="codi";
$enrolled_students= 35;
$price= 17.5;
$on_discount= True;
if($on_discount == 1)
$on_discount = "Yes";
else
$on_discount = "No";
echo"course title: $course_name\nEnrolled Students: $enrolled_students\nCourse Price: $price\nCourse on Discount: $on_discount\n";