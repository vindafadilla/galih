<?php
  session_start();
  $_SESSION['barang'] = array();
?>

<html>
<head>
<body>
	<link rel = "stylesheet" href ="bootstrap/css/bootstrap.min.css" type = "text/css">
    <link rel = "stylesheet" href ="bootstrap/css/bootstrap-theme.min.css" type = "text/css">
    <link rel = "stylesheet" href ="bootstrap/css/style.css" type = "text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<style>
    	body {
        	    background-image : url("img/dora.jpg");
           		 
    		}
	</style>

	<marquee direction="right" scrollamount="15"><h5>WELCOME</h5></marquee>

	<div id="wrapper">
      <div id="header">
        <center><h6>Doraemon Shop</h6></center>
        <div class="address">
        <center>
        <p>Pemesanan via BBM : 14sfc3a</p>
        <p>Contact Person : 089656506999</p>
        <p>Alamat : Jl. Setra Duta Indah Permai N0.96</p>
        </center>
        </div>
      </div><br>

      <center>
      <a href="index.php?hal=1"><button  type="submit" class="btn btn-danger">
      <span aria-hidden="true"></span>Next</button>
      </center>

  </div>
</head>
</body>
</html>