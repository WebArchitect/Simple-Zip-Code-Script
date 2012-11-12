Find all the zip codes in a radius of x miles from a another zip code, or find the distance between two zip codes. The script uses the most up-to-date database provided by the U.S government with 42,000+ records. Using it is as simple as calling a PHP function. This program was written with simplicity in mind. It is very easy to use and install. I have even included a working example. This script can be used alone or easily integrated with other projects such as a store locator.

Instalation instructions

1. Open phpMyAdmin and import the file named "zip_codes_database".
2. Edit zipcode.php and enter your database username and password.
3. Customize zipcode.php to work with your application


-Jakobovki  --  http://jakobovksi.com
zohar@jakobovski.com



----
find_close_zipcodes($origin_zipcode, $distance, $unit)($zipcode, $distance, $unit)

$origin_zipcode is the origin zipcode from which you are finding neighboring codes
$distance is the radius you want to search
$unit is the unit you want your result returned. $unit can be "K" for kilometers, "M" for miles, 


The results are returned in a multi-dimensional array.
[result number]
[zipcode][distance]


----
distance_between_zipcodes($zipone, $ziptwo, $unit)

$zipone is the first zipcode
$ziptwo is the second zipcode
$unit is the unit you want your result returned. $unit can be "K" for kilometers, "M" for miles, 


