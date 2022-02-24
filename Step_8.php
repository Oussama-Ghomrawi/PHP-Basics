<?php
//PART A
$grocery[1]="Eggs";
$grocery[2]="Milk";
$grocery[3]="Cheese";
$grocery[4]="WaterPack";
$grocery[5]="Tissues";
$grocery[6]="Watermelon";
echo "Hello Sir, do you have $grocery[1], $grocery[2], and $grocery[3]? Also if you sell fruits can I find a $grocery[6]?\n";

//PART B
$groceries = array (
    array("eggs","balade","mazare3"),
    array("milk","Fresh","Taanayel"),
    array("water-pack","Tanoureen","Reem"),
  );
  echo "Hey Sir, Please I need 1 pack of " .$groceries[0][1]." ".$groceries[0][0]. " and 3 ".$groceries[2][2]. " ".$groceries[2][0]. "\n";