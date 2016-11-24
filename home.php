<div class="homeSelector">
<div class="grid_18 push_5" id="projHead">
<h1>Hi there!</h1>
<h2>My name is <span>Adam Costanza</span> and I'm a <a href="http://www.cmu.edu/me/">Mechanical Engineering</a>
 and <a href="http://www.bme.cmu.edu/">Biomedical Engineering</a> dual major at <span>Carnegie Mellon University</span>.
 I research the rapid prototyping of medical devices that are deployed on a <span>beating heart</span>.</h2>
</div>

<div class="clear"></div>
	
	<div id="boxes">
	<div class="grid_6 push_1 mlink">
	<h3>I am a <span>rapid prototyper</span></h3>
	<p>I have been working in the Surgical Mechatronics Laboratory in
	the <a href="http://www.ri.cmu.edu/">Robotics Institute</a> at <a href="http://cmu.edu">Carnegie Mellon</a> for the last two semesters.</p>
	
	<p>My focus is on the <a href="?projects#p.manipulator">rapid prototyping
	 of devices</a> used for minimally invasive surgery.</p>
	<p>I first got interested in the idea of prototyping things
	 when I began programming with PHP in 6th grade.</p>
	 
	 <p>Ideas from classes like <a href="?ed#c.fluids">Fluid Mechanics</a> and <a href="?ed#c.stress">Stress Analysis</a>
	  change the way I design devices</p>
	</div>
	<div class="grid_6 push_1 mlink">
	<h3>A few recent <span>projects</span></h3>
	<p>I recently built a <a href="?projects#p.buggy">carbon fiber buggy</a> and <a href="?projects#p.machinedBuggy">machined the parts</a> for it, utilizing <span>computer aided design</span> to design the shapes and assemblies.</p>
	<p>I'm always trying to expand on my design skills, which is why I programmed this whole website from scratch, using <a href="http://us.php.net/">PHP</a>, HTML, <a href="http://960.gs/">960gs</a>, CSS, <a href="http://jquery.com/">jQuery</a>, Illustrator, and Photoshop.</p>
	<p>I recently designed a <a href="">crane that lifted a 2lb weight</a> with 2 other mechanical engineers for the class <a href="?ed#c.stress">Stress Analysis</a></p>
	</div>
	<div class="grid_6  push_1 mlink"><h3>I'm a <span>musician</span> and a <span>snowboarder</span></h3>
	
	
	<p>I was born and raised in <span>Colorado</span>, so I'm accustomed to snowboarding every year on some of the best mountains. My favorite mountain is <a href="http://www.vail.com/">Vail</a>.</p>
	
	<p>I've been playing <span>guitar</span> for about 6 years. I am really interested in jazz, blues, and funk.</p>
	<p>I am very interested in <span>music theory</span>. Lately I've been exploring <span>voice leading</span> and combining scales for improvising.</p>
	<img class="guitar" src="images/guitar.png" />
	</div>
	</div>
</div>
<div class="notes">
<img class="note" src="images/notes/1.png" />
<img class="note" src="images/notes/2.png" />
<img class="note" src="images/notes/3.png" />
<img class="note" src="images/notes/4.png" />
<img class="note" src="images/notes/4.png" />
<img class="note" src="images/notes/4.png" />
<img class="note" src="images/notes/4.png" />
</div>
<div class="notes2">
<img class="note" src="images/notes/1.png" />
<img class="note" src="images/notes/2.png" />
<img class="note" src="images/notes/3.png" />
<img class="note" src="images/notes/4.png" />
<img class="note" src="images/notes/4.png" />
<img class="note" src="images/notes/4.png" />
<img class="note" src="images/notes/4.png" />
</div>
<script type="text/javascript">
	$(document).ready(function(){
		start = 'images/notes/';
		a = 0;
		$('.guitar').hover(function() {
			$(this).attr('src','images/gray_guitar.png');
		}, function() {
			if(a == 0) $(this).attr('src','images/guitar.png');
		})
		$('.guitar').click(function() {
			$(this).attr('src','images/gray_guitar.png');
			if(a == 0) {
			a=1;
			$('.notes .note').each(function() {
				
					note = 1 + Math.floor(Math.random() * 5);
					delay = 3000 + Math.floor(Math.random() * 4000);
					room = ($(window).width()-960)/2;
					height = $(window).height();
					leftpos = 0 + Math.floor(Math.random() * room);
					$(this).attr('src','images/notes/'+note+'.png');
					$(this).css('left',leftpos).css('display','inline');
					$(this).stop().animate({bottom:height+'px'},delay, function() {
						$(this).css('display','none').css('bottom','-30px');
						
					});
				
			});
			$('.notes2 .note').each(function() {
				note = 1 + Math.floor(Math.random() * 5);
				delay = 3000 + Math.floor(Math.random() * 4000);
				width = $(window).width();
				room = (width-960)/2;
				height = $(window).height();
				leftpos = 960+room-40+ Math.floor(Math.random() * (width-960-room+40));
				$(this).attr('src','images/notes/'+note+'.png');
				$(this).css('left',leftpos).css('display','inline');
				$(this).stop().animate({bottom:height+'px'},delay, function() {
					$(this).css('display','none').css('bottom','-30px');
				});
			});
				
				setTimeout(function(){
					a=0;
					$('.guitar').attr('src','images/guitar.png');
				},6000);
			}
			
		});
		
		
		
	});
</script>