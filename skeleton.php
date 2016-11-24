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


<div class="grid_2"><img  width='160px' src="rotating.gif" /></div>
<div class="grid_3 push_1" id='hi'>
<h1>Hi there!</h1>
</div>

<div class="grid_5 push_6" id="banner">
<?php require('nav.php'); ?></div>
<div class="clear"></div>

<div class="grid_12 push_3" id="name"><h2>My name is <span>Adam Costanza</span> and I'm a <span>Mechanical Engineering</span>
 and <span>Biomedical Engineering</span> dual major at <span>Carnegie Mellon University</span>. I research the rapid prototyping of medical devices that are deployed on a <span>beating heart</span>.</h2>
</div>
<div class="clear"></div>
	
<div class="grid_16 home">
	<div id="boxes">
	
	<div class="grid_4 push_1 mlink alpha" id="create">
	<h3>I am a <span>rapid prototyper</span></h3>
	<p>I have been working in the Surgical Mechatronics Laboratory in
	the Robotics Institute at Carnegie Mellon for the last two semesters.</p>
	
	<p>My focus is on the rapid prototyping
	 of devices used for minimally invasive surgery.</p>
	<p>I first got interested in the idea of prototyping things
	 when I began programming in PHP in 6th grade.</p>
	 
	 <p>Ideas from classes like Fluid Mechanics and Stress Analysis
	  change the way I design devices</p>
	</div>
	<div class="grid_4 push_1 mlink">
	<h3>A few recent <span>projects</span></h3></div>
	<div class="grid_4  push_1 mlink omega" id="exp"><h3>I'm a <span>musician</span> and a <span>snowboarder</span></h3></div>
	</div>
	
	<div class="grid_4 push_6 alpha" id="bottomNav">
	<center>
	<ul><li><a href="resume.htm">Paper Resume</a></li>
	<li><a href="contact.php">Contact</a></li>
	</ul>
	</center>
	</div>
	<div class="clear"></div>
</div>
</div>


</body>
</html>
<?php
endif;
?>