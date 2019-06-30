<?php
  include_once "../api/video.php";
    include_once "../api/api.php";
  include '../api/omdb/omdb.class.php';
  include_once "header.php";
  //session_start();
  ///////new omdb class instance
  $omdb = new OMDb( ['tomatoes' => TRUE, 'apikey' => '8d18deff'] );
?>




  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);

body { 
  font-family: 'Open Sans', 'sans-serif';
  color: black;
  background: #222;
  /*overflow: hidden;*/
}

   
table{
/*  max-width: 850px;*/
  /*padding-left: 10px;*/
  padding-top: 10px;
 /* padding-left: 10px;*/
  background-color: white;
  text-align: center;
  margin: 0 auto;
  /*max-width: 850px;*/
  position:relative;
  z-index: -5;
 /* padding-bottom: 100px;*/
}
td{
  width :5%;
  height: 300px;
  /*border:1px solid red;*/
}
td div{
  /* border:1px solid blue;*/
   height: 300px;
   padding-top: 20px;
}
td  img{
    height: 100%; 
  width: 100%; 
  object-fit: contain; 
  border-radius: 25px;
  height: 300px;
 /* position: relative;*/
}
.fgs{
 /* border: solid red 2px;*/
  /*display: none;*/
   object-fit: contain; 
}

    </style>



 <section id="adv" style="text-align: center;">
    <div>
        <div class="in">
            <div >
                <h2>This Month Latest movies</h2><br>
                <!-- <h3> click on image to get more information</h3> -->
            </div>
        </div>  
    </div>
</section>


<?php  
    $values = $latest; 
    echo " <div id='a'>";
    for ($i=0; $i < 6; $i++) 
    { 
      $query=$values->results[$i]->title;
      $movie = $omdb->get_by_title($query);
       //echo $movie["Title"];
      $id=$movie['imdbID'];
      $image="http://youtube.com/embed/".vids( $id)->results[0]->key;
      

     // echo $video->results->key;
     echo "<table><tr><td><h2>".$movie['Title']."</h2><hr><p>IMDB ".$movie['imdbRating']."</p><p>Runtime | ".$movie['Runtime']."</p><p>Country |".$movie['Country']."</p><p>Released | ".$movie['Released']."</p></td> <td><img id='".$movie['imdbID']."' onclick='printstrailers(this.id)'  src='".$movie['Poster']."'></td>  <td><h3>Synopsis</h3><h3><p>".$movie['Plot']."</p></td><td><iframe width='560' height='300px' src='".$image."'frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'  allowfullscreen></iframe></td></tr></table><br><br>";  
    }
    echo "</div> ";

?>