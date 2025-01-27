<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="css/more.css">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <title>Animal Kingdom</title>
  </head>
  <body>
    <h1 class="title1">Good to know</h1>
    <h1 class="map_title">Zoo Park Map</h1>
    <div class="container">

      <div class="card">
        <div class="circle"></div>
        <div class="content"></div>
      </div>


      
      <div class="card">
        <div class="circle"></div>
        <div class="content"></div>
      </div>



      <div class="card">
        <div class="circle"></div>
        <div class="content"></div>
      </div>
   
    <div class="rodeMap">
      <img src="./images/rodeMap.png" class="card-img-top model" alt="..." />
    </div>
    <h1 class="googleMap_title">Panwila,Madulkale,Kandy.</h1>
    <div class="googleMap">
      <iframe src="map.php" height="400" width="550" title="map"></iframe>
     
    </div>
   
  </body>
</html>
