<?php
// get_cat_image.php - PHP file to fetch random cat images from "The Cat API"

// API endpoint URL
$url = "https://api.thecatapi.com/v1/images/search";

// Set up cURL session
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

// Get the cat image URL
$catImageURL = $data[0]['url'];

// Return the cat image URL as JSON
echo json_encode(array('url' => $catImageURL));
?>
