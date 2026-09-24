<?php
require 'tmdb.php';
$data= tmdbRequest('/trending/all/week');
header('Content-Type :application /json');
header('Access-Control-Allow-Origin: *');

echo json_encode($data['results']);


?>