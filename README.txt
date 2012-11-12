For the script to function you need to install the database to your server. 

1. Open phpMyAdmin and import the file named "zip_codes_database".
2. Edit zipcode.php and enter your database username and password.
3. Customize zipcode.php to work with your application


-Jakobovki  --  http://jakobovksi.com
zohar@jakobovski.com







								---- Functionality ----

---------------------------------------------------------------------------------------------------
Call the function close_zipcodes inorder to find the zipcodes within a radius. 


close_zipcodes($zipcode, $distance, $unit)

$zipcode is the zipcode you want to search for close zipcodes
$distance is the radius you want to search
$unit is the unit you want your result returned. $unit can be "K" for kilometers, "M" for miles, 

EXAMPLE: close_zipcodes("60076","10","M")


The results are returned in a multi-dimensional array.
[result number]
[zipcode][distance]


If you want to call the function from a different php file make sure to write "require("zipcode.php");"
Also d
---------------------------------------------------------------------------------------------------------------------
Call the function twozip to find the distance between two zip codes

two_zip($zipone, $ziptwo, $unit)

$zipone is the first zipcode
$ziptwo is the second zipcode
$unit is the unit you want your result returned. $unit can be "K" for kilometers, "M" for miles, 

EXAMPLE: two_zip("60076", "60045", "M")

results are return as a number



-----------------------------------------------------------------------------------------------------------------------

**Function distance55 was written by Hexa Software Development Center and is available freely from zipcodeworld.com. By buying this product you are buying everything BUT function distance55. 
---------------------------------------------------------------------------------------------------------

