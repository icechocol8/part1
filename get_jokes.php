<?php
// Array of jokes
$jokes = [
    "Why don't scientists trust atoms? Because they make up everything!",
    "Did you hear about the mathematician who’s afraid of negative numbers? He'll stop at nothing to avoid them.",
    "Why don't some couples go to the gym? Because some relationships don't work out!",
    "How do you organize a space party? You planet!",
    "Why don't skeletons fight each other? They don't have the guts!",
    "What's the best time to go to the dentist? Tooth-hurty!",
];

// Set the response header to JSON
header('Content-Type: application/json');

// Generate a random index to get a random joke from the array
$randomIndex = array_rand($jokes);
$randomJoke = $jokes[$randomIndex];

// Prepare the response array
$response = [
    'joke' => $randomJoke
];

// Send the response as JSON
echo json_encode($response);
