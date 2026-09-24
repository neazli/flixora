<?php 
require 'config.php';
function tmdbRequest($endpoint,$params = []){
    $params['api_key']= TMDB_API_KEY;
    $params['language']= 'en-US';
    
    $query= http_build_query($params);
    $url= 'https://api.themoviedb.org/3' . $endpoint .'?' . $query;

    $ch= curl_init($url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $response= curl_exec($ch);
    return json_decode($response,true);

}
?>