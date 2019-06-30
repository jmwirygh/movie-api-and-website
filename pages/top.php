<?php
  include_once "../api/api.php";
  include '../api/omdb/omdb.class.php';
  include_once "header.php";
  //session_start();
  ///////new omdb class instance
  $omdb = new OMDb( ['tomatoes' => TRUE, 'apikey' => '8d18deff'] );
?>

</script>


        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="froggy joys ">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="u17306192">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>froggy</title>
   
    <!-- styles and css-->

    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);

body { 
  font-family: 'Open Sans', 'sans-serif';
  color: black;
  background: #222;
 
  /*overflow: hidden;*/
}

   
table{
  max-width: 850px;
  /*padding-left: 10px;*/
  padding-top: 10px;
  background-color: white;
  text-align: center;
  margin: 0 auto;
  max-width: 850px;
  position:relative;
   z-index: -5;
 /* padding-bottom: 100px;*/
}
td{
  width :16%;
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
    $values = $top; 
    echo " <div id='a'>";
    for ($i=0; $i < 6; $i++) 
    { 
      $query=$values->results[$i]->title;
      $movie = $omdb->get_by_title($query);;
//      echo $movie["Title"];



      echo "<table><tr><td><h2>".$movie['Title']."</h2><hr><p>IMDB | ".$movie['imdbRating']."</p><p>Age Restriction | ".$movie['Rated']."</p><p>BoxOffice |".$movie['BoxOffice']."</p><p>Genre | ".$movie['Genre'][0]."</p></td> <td><img src='".$movie['Poster']."'></td> <td><h3>Synopsis</h3><h3><p>".$movie['Plot']."</p></td>  </tr></table><br><br>";
    }
    echo "</div> ";

?>