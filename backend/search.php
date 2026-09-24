<?php 
require 'tmdb.php';

$data= tmdbRequest('/search/multi',['query' => $_GET['q']]);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($data['results']);
?>
