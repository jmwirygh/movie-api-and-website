<?php
session_start();
  include_once "../api/search.php";
  include_once "header.php";
?>
<script type="text/javascript">
   //document.getElementById('hsearch').style.display="none";
</script>


<?php  
   
    $query=$_SESSION['query'];
    $values = $search; ////get discover from the api
    //echo    $values->total_results;
?>





<!-- body Section Start -->
<table id="prices" style="padding-top: 130px;"> 
<tr><td colspan="6" style="text-align: center;"><h1>YOUR SEARCH RESULTS</h1></td></tr>
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
//////////////////////////////////////////////////////////////////////////////////////////////////
  include_once "footer.php";
?>

