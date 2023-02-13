<?php 

$word = $_GET['search'];

// From URL to get webpage contents.
$url = "https://pixabay.com/api/?key=33513386-f32dd1c80790a5c0fb879c517&q=".$word."&image_type=photo&pretty=true";


// Initialize a CURL session.
$ch = curl_init();
 
// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);
 
$result = curl_exec($ch);
 
echo $result;

curl_close( $ch );
 
?>