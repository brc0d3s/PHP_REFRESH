<?php

/* 
Find the code based on the country
Write all the data to a csv file

*/
$data = '{
     "Kenya":"254" ,
     "United States":"1" ,
     "Canada":"1" ,
     "United Kingdom":"44" ,
     "Australia":"61" ,
     "India":"91" ,
     "Germany":"49" ,
     "France":"33" ,
     "Japan":"81" ,
     "China":"86" ,
     "South Africa":"27",
     "Brazil":"55" ,
     "Mexico":"52" ,
     "Italy":"39" ,
     "Spain":"34" ,
     "Russia":"7" ,
     "South Korea":"82",
     "Netherlands":"31",
     "Turkey":"90",
     "Sweden":"46"
}';

$query = "Sweden";

$countries = json_decode($data, true);

foreach ($countries as $country => $phone) {
    if($country == $query){
        echo $phone;
    }
}
  



$file = fopen("phone.csv","w");

fputcsv($file,['Country','Phone']);
foreach ($countries as $country => $phone) {
    fputcsv($file,[$country, $phone]);
}

fclose($file);
?>