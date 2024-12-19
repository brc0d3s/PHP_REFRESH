<?php

/*
Write a function in PHP to calculate the distance between two places using their latitude and longitude. Follow these steps to calculate the distance:

Calculate the difference of longitude between the second place and the first place.
Convert this value to radians.
Calculate the cosine of the converted longitude value.
Convert the latitude of both places to radians.
Calculate the sine and cosine of both converted latitudes.
Multiply the sine values of the latitudes and add the product of their cosines multiplied by the cosine of the longitude difference.
Return the result in kilometers.
*/

function calculateDistance($lat1, $lon1, $lat2, $lon2) {
    // Step 1: Calculate the difference in longitude
    $deltaLon = $lon2 - $lon1;

    // Step 2: Convert values to radians
    $lat1Rad = deg2rad($lat1);
    $lat2Rad = deg2rad($lat2);
    $deltaLonRad = deg2rad($deltaLon);

    // Step 3: Calculate the cosine of the difference in longitude
    $cosDeltaLon = cos($deltaLonRad);

    // Step 4: Calculate the sine and cosine of both latitudes
    $sinLat1 = sin($lat1Rad);
    $cosLat1 = cos($lat1Rad);
    $sinLat2 = sin($lat2Rad);
    $cosLat2 = cos($lat2Rad);

    // Step 5: Multiply sine and cosine values as described
    $result = ($sinLat1 * $sinLat2) + ($cosLat1 * $cosLat2 * $cosDeltaLon);

    // Step 6: Use the arc cosine (acos) and Earth's radius to get the distance
    $distance = acos($result) * 6371; // Earth's radius in kilometers

    return $distance;
}

// Example usage:
$latitude1 = 12.9716; // Latitude of Place 1 (e.g., Bangalore, India)
$longitude1 = 77.5946; // Longitude of Place 1
$latitude2 = 28.7041; // Latitude of Place 2 (e.g., Delhi, India)
$longitude2 = 77.1025; // Longitude of Place 2

$distance = calculateDistance($latitude1, $longitude1, $latitude2, $longitude2);

echo "The distance between the two places is: " . round($distance, 2) . " kilometers.\n";

?>