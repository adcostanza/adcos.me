
<?php
function ae_detect_ie()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        return true;
    else
        return false;
}
?>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link href='thumb.png' rel='icon' type='image/png'> 
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.logo').click(function() {
			location.href = 'index.php';
		});
	});
</script>
<title>Adam Costanza | BME Researcher</title>
</head>
<body>


<div class="container_24 content">

<div class="grid_4 logo"><img class='logoImg' height='100%' src="rotating.gif" /></div>
<div class="grid_10 push_10" id="banner">

<?php require('nav.php'); ?></div>
<div class="clear"></div>
<?php require('selector.php'); ?>
<div class="clear"></div>
<div class="grid_8 push_10" id="bottomNav">
	
	<ul><li><a href="web-resume.pdf">Paper Resume</a></li><br />
	<li><a href="mailto:adam@adcos.me">adam@adcos.me</a></li>
	</ul>
	
	
</div>
	<div class="clear"></div>
	
</div>
<?php  if (ae_detect_ie()):  ?>
<style>
.ie-death {
	width:100%;
	position:relative;
	top:50px;
	padding:50px;
}
.ie-death a {
	padding-right:40px;
}
</style>
<div class="ie-death">
<center><p>
I see that you're using <span>Internet Explorer</span>. This website is not formatted correctly for internet explorer, but can be viewed on any other browser. If you're at work, this website will look better on your smart phone than on Internet Explorer. You can view the paper version of my resume here:<Br /><Br /><Br />
<a href="web-resume.pdf">Paper Resume</a><br /><Br /><br />
If you're not at work, please make the world a better place and download:<br /><br /><br />
<a href="https://www.google.com/intl/en/chrome/browser/">Chrome</a>
<a href="http://www.mozilla.com/firefox/">Firefox</a>
<a href="http://www.opera.com/">Opera</a></p></center>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('div').css('display','none');
		$('.ie-death').css('display','inline');
	});
</script>
<?php endif;  ?>
</body>

</html>
