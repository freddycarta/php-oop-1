<?php
include_once __DIR__ . '/models/movie.php';



$pirates = new movie();
$pirates->title = "pirates"; 
$pirates->date = "23/23/23"; 
$pirates->genre = "action";

var_dump($pirates);

$vampires = new movie();
$pirates->title = "vampires"; 
$pirates->date = "23/11/23";
$pirates->genre = "horror";

var_dump($vampires)


?>