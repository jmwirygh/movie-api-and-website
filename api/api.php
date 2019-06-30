 <?php

//////////////////this 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/movie/popular?api_key=75cf86776b2c3f5d57f717c821b92323");
curl_setopt($ch, CURLOPT_PROXY ,"phugeet.cs.up.ac.za:3128");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response = curl_exec($ch);
curl_close($ch);
$discover = json_decode($response);



//echo $response ;

$ct = curl_init();
curl_setopt($ct, CURLOPT_URL, "https://api.themoviedb.org/3/movie/top_rated?api_key=75cf86776b2c3f5d57f717c821b92323");
curl_setopt($ct, CURLOPT_PROXY ,"phugeet.cs.up.ac.za:3128");
curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ct, CURLOPT_HEADER, FALSE);
curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response = curl_exec($ct);
curl_close($ct);
$top = json_decode($response);

//echo $response5;

$ct = curl_init();
curl_setopt($ct, CURLOPT_URL, "http://api.themoviedb.org/3/list/28?api_key=75cf86776b2c3f5d57f717c821b92323&language=en-US");
curl_setopt($ct, CURLOPT_PROXY ,"phugeet.cs.up.ac.za:3128");
curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ct, CURLOPT_HEADER, FALSE);
curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response = curl_exec($ct);
//echo  curl_error($ct);;
curl_close($ct);
$featured = json_decode($response);



$cl = curl_init();
curl_setopt($cl, CURLOPT_URL, "https://api.themoviedb.org/3/movie/now_playing?api_key=75cf86776b2c3f5d57f717c821b92323&language=en-US&page=1");
curl_setopt($cl, CURLOPT_PROXY ,"phugeet.cs.up.ac.za:3128");
curl_setopt($cl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cl, CURLOPT_HEADER, FALSE);
curl_setopt($cl, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response = curl_exec($cl);
curl_close($cl);
$latest = json_decode($response);



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/movie/popular?api_key=75cf86776b2c3f5d57f717c821b92323");
curl_setopt($ch, CURLOPT_PROXY ,"phugeet.cs.up.ac.za:3128");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response2 = curl_exec($ch);
curl_close($ch);
$popular = json_decode($response2);


?>