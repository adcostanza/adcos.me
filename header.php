<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

// Check for any mobile device.
if ($detect->isMobile()):
   require('mobile.php');
else:
   // other content for desktops
   ?>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link href='thumb.png' rel='icon' type='image/png'> 
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
<title>Adam Costanza | BME Researcher</title>
</head>
<body>


<div class="container_16 content">


<div class="grid_2"><a href="home.php" class="hover"><img width='160px' src="rotating.gif" /></a></div>