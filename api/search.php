<?php

   $query=$_SESSION['query'];

$cs = curl_init();
curl_setopt($cs, CURLOPT_URL, "http://api.themoviedb.org/3/search/movie?api_key=75cf86776b2c3f5d57f717c821b92323&query=".$query);
curl_setopt($cs, CURLOPT_PROXY ,"phugeet.cs.up.ac.za:3128");
curl_setopt($cs, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cs, CURLOPT_HEADER, FALSE);
curl_setopt($cs, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response17 = curl_exec($cs);
curl_close($cs);
$search = json_decode($response17);
?>