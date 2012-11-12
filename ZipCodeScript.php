<?php




$link = mysql_connect("localhost", "username", "password");
if (!$link) {
	  die('Could not connect: ' . mysql_error());}
mysql_select_db("databasename");




function  find_close_zipcodes($origin_zipcode, $distance, $unit){


// SWITCH BETWEEN KILOMETERS AND MILES
if($unit=="K" || $unit=="k" ){
$unit1 = 6378.39;
$unit2 = 1;
}
else{
$unit1 = 6378.39;
$unit2 = 1.609344;
}


$search= "SELECT * FROM zip_codes WHERE zip='$origin_zipcode'";
$result = mysql_query($search) or die('Error: ' . mysql_error());



$row = mysql_fetch_assoc($result);
$lng = $row["longitude"];
$lat = $row["latitude"];
mysql_free_result($result);

$search2 = "SELECT zip, (ACOS((SIN(RADIANS(" .$lat."))*SIN(RADIANS(latitude))) + (COS(RADIANS(" .$lat."))*COS(RADIANS(latitude))*COS(RADIANS(longitude)-RADIANS(" .$lng. ")))) * ".$unit1.") AS distance FROM zip_codes WHERE (ACOS((SIN(RADIANS(" .$lat. "))*SIN(RADIANS(latitude))) + (COS(RADIANS(" .$lat. "))*COS(RADIANS(latitude))*COS(RADIANS(longitude)-RADIANS(" .$lng. ")))) * ".$unit1.") <= " .$distance*$unit2. " ORDER BY distance ASC";
$result = mysql_query($search2) or die('Error: ' . mysql_error());




$x=-1;

while ($row2 = mysql_fetch_array($result, MYSQL_ASSOC)) {
	  if($x==-1){}
	  else{
		$array[$x][0]= $row2["zip"];
		$array[$x][1]= $row2["distance"]*.621371192;
	   }
	 $x++;
}


mysql_free_result($result);



return $array;
}


function distance_between_zipcodes($zipone, $ziptwo, $unit){

$find = mysql_query("SELECT * FROM zip_codes  WHERE zip='$zipone'");
if (!$find) {
    die('Could not query1:' . mysql_error());}
$ziponedata = mysql_fetch_row($find);  

$find = mysql_query("SELECT * FROM zip_codes WHERE zip='$ziptwo'");
if (!$find) {
    die('Could not query1:' . mysql_error());}
$ziptwodata = mysql_fetch_row($find);  

$distancebetween = distance55($ziponedata[3],$ziponedata[4],$ziptwodata[3],$ziptwodata[4],$unit);
return $distancebetween;
} // end function

function distance55($lat1, $lon1, $lat2, $lon2, $unit9) { 

  $theta = $lon1 - $lon2; 
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
  $dist = acos($dist); 
  $dist = rad2deg($dist); 
  $miles = $dist * 69.09;
  $unit9 = strtoupper($unit9);

  if ($unit9 == "K") {
    return ($miles * 1.609344); 
  } else if ($unit9 == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}
/////////////////////////////////////////////////////////////////////////////////////////////////////
?>
