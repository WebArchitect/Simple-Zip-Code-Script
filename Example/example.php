<?php

require("zipcode.php");


$zip1 = $HTTP_POST_VARS['zip1'];
$zip2 = $HTTP_POST_VARS['zip2'];
$zip3 = $HTTP_POST_VARS['zip3'];
$radius = $HTTP_POST_VARS['radius'];

// if this is a radius search
if($radius !=""){
$array = close_zipcodes($zip1,$radius,"M");
$x=0;


while($x<count($array)) {

echo "Zipcode: ";
echo $array[$x][0];
echo "     Distance: ";
echo $array[$x][1];
echo"<br>";
$x++;
}





}
else{
// if this is a distance between to zips
echo"<br>";
echo "Distance between $zip3 and $zip2: ";
echo twozip($zip3, $zip2, "M");
echo "miles";

}












?>