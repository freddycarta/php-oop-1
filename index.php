<?php
include_once __DIR__ . '/models/movie.php';



$pirates = new movie();
$pirates->name = "pirates"; 
$pirates->date = "23/23/23"; 

var_dump($pirates);

$vampires = new movie();
$pirates->name = "vampires"; 
$pirates->date = "23/11/23";

var_dump($vampires)


?>