<?php
$curl = curl_init(); // Initialize a cURL session

// Set the cURL options correctly
curl_setopt_array($curl, [
    CURLOPT_URL => "https://www.javatpoint.com/php-tutorial", // Set the URL
    CURLOPT_RETURNTRANSFER => true, // Return the response as a string instead of outputting it
    CURLOPT_TIMEOUT => 30, // Set a timeout for the request
    CURLOPT_CUSTOMREQUEST => "GET", // Specify the HTTP method (GET in this case)
    CURLOPT_HTTPHEADER => [] // If you want to pass any headers, add them here
]);

// Execute the cURL request
$response = curl_exec($curl);

// Check for errors
if (curl_errno($curl)) {
    echo "cURL error: " . curl_error($curl);
} else {
    // Close the cURL session
    curl_close($curl);

    // Output the response
    echo $response;
}
?>
