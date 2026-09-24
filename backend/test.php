<?php
require 'config.php';

$url = 'https://api.themoviedb.org/3/movie/popular?api_key=' . TMDB_API_KEY . '&language=en-US';

$ch= curl_init($url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response,true);
foreach($data['results'] as $movie){
    echo $movie['title'] . '<br>';
}
?>