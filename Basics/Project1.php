<?php

# Count The number of adults andChildren
# Make a list of people between age(22,30) who can apply fo a job


$people = [
    ['Name'=> "Brian",'Age'=> 23],
    ['Name'=> "Lucky",'Age'=> 21],
    ['Name'=> "Sarah",'Age'=> 5],
    ['Name'=> "Anne",'Age'=> 18],
    ['Name'=> "Prathan",'Age'=> 22],
    ['Name'=> "Simon",'Age'=> 30],
    ['Name'=> "Amin",'Age'=> 28],
    ['Name'=> "Sabrina",'Age'=> 24],
    ['Name'=> "Rana",'Age'=> 9],
    ['Name'=> "Mit",'Age'=> 3],
    ['Name'=> "Vito",'Age'=> 11],
    ['Name'=> "Tom",'Age'=> 2]
    
];

$childCount = 0;
$adultCount = 0;
$jobList = [];


foreach($people as $person){
    $age = $person['Age'];

    if($age >= 18){
        $adultCount++;

        if($age >= 22 && $age <= 30){
            $jobList[] = $person;
        }
    }else{
        $childCount++;
    }
}

echo("Number of Children: ".$childCount.PHP_EOL);
echo("Number of Adults: ".$adultCount.PHP_EOL);
var_dump($jobList);

?>