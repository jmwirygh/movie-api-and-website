<?php
  include_once "../api/api.php";
  include_once "header.php";
?>



<?php  
    $values = $discover; ////get discover from the api
?>





<!-- body Section Start -->
<table id="prices" style="padding-top: 130px;"> 
<?php    
      echo "<tr>";
      for($i = 0; $i < 6; ++$i){  //values.results.length
             $img="https://image.tmdb.org/t/p/w500".$values->results[$i]->poster_path;

             echo "<td> <div class='container' ><a><div> <img  src=' " .$img. "'> <div style='overflow:scroll;' class='details'> <h2>".$values->results[$i]->title."(" .$values->results[$i]->release_date.")</h2><p>".$values->results[$i]->adult."IMDB ".$values->results[$i]->vote_average."</p> <p>".$values->results[$i]->overview."</p> </div></div></a></div></td>" ;
        }
         echo "</tr>";
        
       echo "<tr>";
      for($i = 6; $i < 12; ++$i){  //values.results.length
             $img="https://image.tmdb.org/t/p/w500".$values->results[$i]->poster_path;

             echo "<td> <div class='container' ><a><div> <img  src=' " .$img. "'> <div style='overflow:scroll;' class='details'> <h2>".$values->results[$i]->title."(" .$values->results[$i]->release_date.")</h2><p>".$values->results[$i]->adult."IMDB ".$values->results[$i]->vote_average."</p> <p>".$values->results[$i]->overview."</p> </div></div></a></div></td>" ;
        }
         echo "</tr>";
 
?>

</table>

<!-- Footer Section Start -->
<?php 
  include_once "footer.php";
?>

