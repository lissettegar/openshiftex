<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?><!DOCTYPE html>
<html>
  <head>
    <title>Web Test Load</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

  	<div class="row">
  		<div class="col-md-12">

      <?php include('menu.php'); ?>
      <div class="jumbotron">
      <p>
      <?php include("get-index-meta-data.php"); ?>

      <hr />

      <?php include('get-cpu-load.php'); ?>
			</p>
      <p>
      </p>
    </div>
    </div>
    </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
<img src="buildings-front-resize-closer-sydney-cheated2-1.png" alt="Logicalis - business and technology working as one" style="max-width:2000%;" width=1200"%"> 
  </body>
</html>
