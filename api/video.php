
<?php


function vids($id){
			$ct = curl_init();
		curl_setopt($ct, CURLOPT_URL,  "http://api.themoviedb.org/3/movie/".$id."/videos?api_key=75cf86776b2c3f5d57f717c821b92323");
		curl_setopt($ct, CURLOPT_PROXY ,"phugeet.cs.up.ac.za:3128");
		curl_setopt($ct, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ct, CURLOPT_HEADER, FALSE);
		curl_setopt($ct, CURLOPT_HTTPHEADER, array("Accept: application/json"));
		$response = curl_exec($ct);
		//echo  curl_error($ct);;
		curl_close($ct);
		$video = json_decode($response);
		return $video;
}
//echo $video;


?>

