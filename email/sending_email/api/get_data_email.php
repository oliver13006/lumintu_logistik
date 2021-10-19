<?php

$api_url = 'http://192.168.18.82:8055/items/customer';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$user_data = $response_data->data;

// Cut long data into small & select only first 10 records
// $user_data = array_slice($user_data, 0, 9);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
foreach ($user_data as $user) {
	echo $user->customer_email;
	echo ", ";
    // echo "name: ".$user->customer_name;
    // echo "<br /> <br />";
}
?>