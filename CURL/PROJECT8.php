<?php
# Create a route crawler and get box ofice data from IMDB's(https://www.imdb.com/chart/boxoffice/) Box office page then store them in database


// Step 1: Initialize CURL to fetch IMDB box office data
$curl = curl_init();

$url = "https://www.geeksforgeeks.org/data-science-with-python-tutorial/";
$requesttype = "GET";

curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => $requesttype,
]);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    die("CURL error: " . curl_error($curl));
}

curl_close($curl);

echo $response;
?>
