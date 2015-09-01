
<?php 
$url = 'https://api.instagram.com/v1/users/588861172/?access_token=588861172.bf2d849.9c9b8c94f8c149709a933406058adea3';
$api_response = file_get_contents($url);
$record = json_decode($api_response);
$followers = $record->data->counts->followed_by;

// set page to JSON output
header('Content-Type: application/json');
echo json_encode($followers);