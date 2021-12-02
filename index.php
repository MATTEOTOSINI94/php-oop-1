<?php

require_once "Classe.php";

$movie1 = new Movie(
    "Interstellar",
    "275.120.017$",
    "10/5/2014",
    "https://pad.mymovies.it/filmclub/2014/01/001/locandina.jpg",
    "In un fut..",
);


var_dump($movie1);

$movie2 = new Movie(
"Venom",
"675.220.027$",
"20/1/2016",
"https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRWm9vtTKe1KwDPZe4NFnZFe2UHXz3-yRcWJKcix4nwISyl4xoN",
"Il giornalista Eddie Brock ottiene poteri sovrumani dopo essersi fuso con un essere alieno. Insieme, sono conosciuti come Venom e questo nuovo essere cerca di controllare le pericolose capacità, che Eddie trova così inebrianti.",
);


var_dump($movie2);