<?php

require 'tmdb.php';
$movieId= $_GET['id'];
$data = tmdbRequest('/movie/'.$movieId,['append_to_response'=>'keywords']);



$candidates = tmdbRequest('/movie/popular');


$selectedGenreIds = array_column($data['genres'],'id');
$scored =[];

foreach($candidates['results'] as $movie){
    if($movie['id'] == $movieId){
        continue;

    }
    $commonGenres = array_intersect($selectedGenreIds , $movie['genre_ids']);
    $score = count($commonGenres);
    $movie['score'] = $score;
    $scored[] = $movie;

}

usort($scored,function ($a,$b){
    return $b['score'] - $a['score'];
});

$top10 = array_slice($scored,0,10);
header('Content-Type :application /json');
header('Access-Control-Allow-Origin: *');
 echo json_encode($top10);


 ?>