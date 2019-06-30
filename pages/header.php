<?php
session_start();
  include_once "../api/Search.php";
?>


<!DOCTYPE html>
<html lang="en">


  <head>


<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="froggy joys ">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="u17306192">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>froggy</title>
    <!-- styles and css-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/discover.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(../images/simple-pre-loader/simple-pre-loader/images/loader-128x/Preloader_3.gif) center no-repeat #fff;
}</style>
    <script type="text/javascript">
      ////////////////////////////////////////////////////////////////////////////////////////////
     

/////////////////////////loading bay

  $(window).load(function() {
    $(".se-pre-con").fadeOut("slow");;
  });
       
 
</script>
  </head>


<body >  <div class="se-pre-con"></div>
<!-- Navbar Section Start-->   
<nav id="navbar">
  <div  >
       <div style="float: left; margin-left: 100px; "><img  src="../images/logo/frog6.png">froggy.cs</div>
       <a href="../index.html">Home</a>
       <a  href="discover.php" >Discover</a>
       <a href="featured.php">Featured</a>
       <a href="top.php">Top Rated</a>
       <a href="latest.php">latest Events</a>
       <a href="calendar.php">Calendar</a>
         <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
            if (isset($_POST['submit'])) { //user logging in

                       
                        
                        if (empty($_POST['query'])) 
                        {
                            echo "<script> alert('Enter a movie title'); </script>"; 
                        }
                        else{
                  
                           $_SESSION['query'] = $_POST['query'];
                          // echo  $_SESSION['query'] ;
                          header("location: search.php");
                        }
                
            }

    }
   ?>
<form id="hsearch" method="post" >
  <input name="query" id="userinput" type="text" placeholder="Search" style="color: red;padding: 6px; border-radius: 25px;">
  <input title="Search" value="搜索" type="submit" name="submit" class="button"  style="background-color: #DC3D24;padding: 6px;cursor: pointer;" >
</form>

  </div>
</nav>

