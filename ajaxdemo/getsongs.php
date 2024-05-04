<?php


$song1= array ('id' => 1, 'artist' => 'Jay Z', 'title' => "NEW YORK");
$song2= array ('id' => 2, 'artist' => 'Roots', 'title' => "Procced");
$song3= array ('id' => 3, 'artist' => 'Queen B', 'title' => "clip");
$song4= array ('id' => 4, 'artist' => 'Rolling Stone', 'title' => "Rolling");
$song5= array ('id' => 5, 'artist' => 'FatBoys', 'title' => "Fat Boys are back");

$arr_list = [$song1, $song2, $song3, $song4, $song5];

header('Content-Type: application/json');
echo json_encode($arr_list)  ;