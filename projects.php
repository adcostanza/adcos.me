
<div class="grid_22 push_1" id="projHead">
<h2>In the <span>last year</span> I led the construction of a 
<span>buggy</span> made of <span>carbon fiber</span>, started the development of 
two different <span>medical devices</span>, performed <span>FEA</span> stress analysis using <span>Solidworks</span> and <span>Autodesk Inventor</span>,
and used <span>MATLAB</span> to create
<span>planning algorithms</span> for robotic motion.</h2>
</div>
<div class="clear"></div>
	
	<div class="top" id="smallboxes">
	<div class="grid_5 push_2 alpha">
	<div class="info" id="buggy">
		<img class="cover" src="images/covers/buggy.png" />
		<div class="label">
		<h1><span>Carbon fiber</span> buggy</h1>
		</div>
		<p>Solidworks, carbon fiber, aerodynamics, machining, prototyping, fabrication</p>
	</div>
	
	</div><div class="grid_5 push_2">
	<div class="info" id="crane">
		<img class="cover" src="images/covers/crane.png" />
		<div class="label">
		<h1><span>Stress Analysis:</span> crane</h1>
		</div>
		<p>Solidworks, FEA analysis, fabrication, prototyping</p>
	</div>
	
	</div>
	<div class="grid_5 push_2">
	<div class="info" id="machinedBuggy">
		<img class="cover" src="images/covers/machining.png" />
		<div class="label">
		<h1><span>Machined</span> Buggy Parts</h1>
		</div>
		<p>Solidworks, FEA stress analysis, machining</p>
	</div>
	
	</div>
	<div class="grid_5 push_2 omega">
	<div class="info" id="manipulator">
		<img class="cover" src="images/covers/prototyping.png" />
		<div class="label">
		<h1><span>Rapid Prototyping</span></h1>
		</div>
		<p>CAD, 3D printing, Solidworks, rendering, rapid prototyping, medical devices</p>
	</div>
	
	</div>
	
	</div>
	
	
	<div class="grid_1 omega"></div>
	<div class="clear"></div>
	<div class="bottom" id="smallboxes">
	<div class="grid_5 push_2 alpha">
	<div class="info" id="planning">
		<img class="cover" src="images/covers/planning.png" />
		<div class="label">
		<h1>Planning <span>Algorithms</span></h1>
		</div>
		<p>Calculus, parametric equations, splines, taylor series, MATLAB</p>
	</div>
	
	</div><div class="grid_5 push_2">
	<div class="info" id="actuation">
		<img class="cover" src="images/covers/arduino.jpg" />
		<div class="label">
		<h1>Robot actuation</h1>
		</div>
		<p>Arduino, servos, sensors, planning algorithms, actuation</p>
	</div>
	
	</div>
	<div class="grid_5 push_2">
	<div class="info" id="ultralander">
		<img class="cover" src="images/covers/ultralander.png" />
		<div class="label">
		<h1><span>Ultrasound</span> fitted injection system</h1>
		</div>
		<p>Solidworks, 3D printing, prototyping, medical devices</p>
	</div>
	
	</div>
	<div class="grid_5 push_2 omega">
	<div class="info" id="web">
		<img class="cover" src="images/covers/other.jpg" />
		<div class="label">
		<h1>Miscellaneous <span>web design</span></h1>
		</div>
		<p>PHP, jQuery, HTML5, CSS3, JSON, Javascript, <a href="">960gs</a></p>
	</div>

	</div>
	</div>
		<div class="unpresent"></div>
		<div class="block"></div>
	<?php require('sProj.php'); ?>
	
<script type="text/javascript">
	$(document).ready(function(){
		
		
		present = 0;
		
		function startPresent(d,s) {
			$('.projInfo').css('z-index','100');
			$('.unpresent').css('display','block');
			$('#bottomNav').stop().animate({
				opacity:0,
				bottom:'100px'
			},{duration:d-s,queue:false});
			
			$('#projHead').stop().animate({
				bottom:'265px',
				opacity:0}, d-(2*s));
				
			small = '#smallboxes div.grid_5';
			
			$('.info').animate({
				height:'150px',
				width:'150px'
			}, {queue:false,duration:d});
			$('.cover').animate({
				height:'150px',
				width:'150px'
			}, {queue:false,duration:d});
			
			$('.label').animate({bottom:'155px'},{queue:false,duration:d-s});
			$('.label h1, .label').animate({fontSize:'14px'},d-s);
			$('.info p').stop().animate({
				fontSize:'12px',
				'line-height':'16px',
				bottom:'160px'},{queue:false,duration:d});
			
			smallbox = '#smallboxes div.grid_5:nth-child';
			
			
			$(smallbox+'(1)').animate({
				left:'0px'
			}, {queue:false,duration:d});
			
			$(smallbox+'(2)').animate({
				left:'-200px'
			}, {queue:false,duration:d});
			$(smallbox+'(4)').animate({
				left:'245px'
			}, {queue:false,duration:d});
			
			$(smallbox+'(3)').animate({
				left:'445px'
			}, {queue:false,duration:d});
			

			$(smallbox+'(2), '+smallbox+'(3)').css('position','relative').animate({
				top:'175px'
			}, {queue:false,duration:d});
			
			$(smallbox+'(1), '+smallbox+'(4)').css('position','relative').animate({
				bottom:'150px'
			}, {queue:false,duration:d});
			
			
			
			proj.addClass('enabled');
			proj.delay(d-s).fadeIn(d);
		}
		
		//if location already set
		loc = window.location.hash;
		if (loc.length > 1) {
			loc = loc.substr(3,loc.length-3);
			proj = $('.projInfo.'+loc);
			proj.addClass('enabled');
			info = '.info#'+loc;
			$('.info#'+loc).addClass('active');
			
			$('div').css('opacity',0).not('.info').animate({opacity:1},{queue:false, duration:500});
			$('.info').not(info).animate({opacity:0.5},{queue:false, duration:250});
			$(info).animate({opacity:1},{queue:false, duration:500});
			$('.cover','.active').animate({top:'220px'},300);
			startPresent(5,0);
			present=1;
		}
		$('.pLink').click(function() {
			$(".active.info .cover").css('opacity','1').css('top','220px').animate({
					top:'0px'});
				$('.active').removeClass('active');
				
				selectID = $(this).attr('href');
				selectID = selectID.substr(12,selectID.length-12);
				
				$('#'+selectID).addClass('active');
				$(".cover",'#'+selectID).animate({top:'220px'},400,function() {$(this).css('opacity','0')});
				
				$('.info').not('.active').each(function() {
					$(this).animate({opacity:.5},400);
				});
				
					window.location.hash = 'p.'+selectID;
					proj = $('.projInfo.'+selectID);
					
				if(present == 1) {
					$('.enabled').stop().fadeOut(300, function() {
						proj.stop().fadeIn(500);
					}).removeClass('enabled');
					proj.addClass('enabled');
					
				}
		});
		
		$('.info').hover(function(){
			if(present==1) {
				$('.info').not(this).not('.active').animate({opacity:0.5},200);
				$(this).animate({opacity:1},300);
			}
			$('.cover',this).animate({top:'220px'},{queue:false,duration:600});
		}, function() {
			$(this).not('.active').each(function() {
				$('.cover',this).animate({top:'0px'},{queue:false,duration:600});
			});
			
			if(present==1) {
				$(this).not('.active').animate({opacity:.5},{queue:false,duration:300});
				$(this).not('.active').animate({opacity:.5},300);
			}
		});
		$('.info').click(function() {
			
				$(".active.info .cover").css('opacity','1').css('top','220px').animate({
					top:'0px'});
				$('.active').removeClass('active');
				$(this).addClass('active');
				$(".cover",this).css('opacity','0');
				
				$('.info').not('.active').each(function() {
					$(this).animate({opacity:.5},400);
				});
				
					selectID = $(this).attr('id');
					window.location.hash = 'p.'+selectID;
					proj = $('.projInfo.'+selectID);
					
				if(present == 1) {
					$('.enabled').stop().fadeOut(300, function() {
						proj.stop().fadeIn(500);
					}).removeClass('enabled');
					proj.addClass('enabled');
					
				}
				
			if(present == 0) {
				present = 1;
				startPresent(800,200);
			}	
			
			
		});
		$('.logoImg').attr('src','images/spring.png').css('height','35px').css('bottom','15px');
		
		
		$('.imgFade').not('.justFormat').each(function() {
			selector = $(this);
			imgNum = 2;
			$(this).children('div').each(function() {
				select2 = selector.children('ul');
				htmlC = select2.html();
				txt = imgNum-1;
				select2.html(htmlC+'<li id="'+imgNum+'">'+txt.toString()+'</li>');
				
				imgNum++;
			});
			if (imgNum > 6) num = 130/imgNum;
			else num = 120/imgNum;
			
			$(this).children('ul').children('li').css({'margin-left':num,'margin-right':num});
			
		$(this).children('ul').children('li:nth-child(1)').addClass('act');
		});
		$('.imgFade div:nth-child(2)').addClass('current');
		randvar = 0;
		$('.imgFade ul li').click(function() {
			curImg = $(this).attr('id');
			if(!$(this).closest('.imgFade').children('div:nth-child('+curImg+')').hasClass('current')) {
				$(this).siblings('li').css({'color':'#666','border-color':'#666'}).removeClass('act');
				$(this).css({'color':'4288a3','border-color':'4288a3'}).addClass('act');
				
				$(this).closest('.imgFade').children('.current').fadeOut(400, function() {
					$(this).closest('.imgFade').children('div:nth-child('+curImg+')').fadeIn(400).addClass('current');
				}).removeClass('current');
				
				if(!$(this).parent('ul').hasClass('clicked')) {
					projDiv = $(this).closest('.projInfo').children('div');
					h2Height = projDiv.children('h2').height() + 15;
					projDiv.children('h1').css('position','relative').animate({'bottom':h2Height+'px', 'opacity':0}, 500);
					projDiv.children('h2').css('position','relative').animate({'bottom':h2Height+'px', 'opacity':0}, 500);
					
					$(this).parent('ul').addClass('clicked');
					$(this).closest('.imgFade').css('position','relative').animate({'bottom':h2Height+'px'}, 500);
					
				}
			}
		});
		$('.imgFade ul li').hover(function() {
			$(this).css({'color':'4288a3','border-color':'4288a3'});
		}, function() {
			$(this).not('.act').css({'color':'#666','border-color':'#666'});
		});
		
		$('.unpresent').click(function() {
			present = 0;
			$('.active').removeClass('active');
			
			
			
			smallbox = '#smallboxes div.grid_5:nth-child';
			tlength = 600;
			$(smallbox+'(1)').css('position','relative').animate({'bottom':'0px','left':'80px'}, {queue:false,duration:tlength}, function() {
				$('.projInfo div h1, .projInfo div h2').each(function() {
					if($(this).css('opacity') == 0) {
						$(this).css({'position':'relative','bottom':'0px', 'opacity':1});
						$('.clicked').removeClass('clicked');
						$('.imgFade').css({'position':'relative','bottom':'0px'});
					}
				});
			});
			$(smallbox+'(2)').css('position','relative').animate({'top':'0px','left':'80px'}, {queue:false,duration:tlength});
			$(smallbox+'(3)').css('position','relative').animate({'top':'0px','left':'80px'}, {queue:false,duration:tlength});
			$(smallbox+'(4)').css('position','relative').animate({'bottom':'0px','left':'80px'}, {queue:false,duration:tlength});
			$('.projInfo').css('z-index','-3000');
			$('.info').animate({
				height:'190px',
				width:'190px',
				opacity:1
			}, {queue:false,duration:tlength});
			$('.cover').each(function() {
				if ($(this).css('opacity') == 0) $(this).css('top','220px');
				$(this).css('opacity','1').animate({
				height:'190px',
				width:'190px',
				top:'0px'
			}, {queue:false,duration:tlength});
			});
			
			$('.label').animate({bottom:'190px'},{queue:false,duration:tlength});
			$('.label h1, .label').animate({fontSize:'16px'},{queue:false,duration:tlength});
			$('.info p').stop().animate({
				fontSize:'15px',
				'line-height':'25px',
				bottom:'200px'},{queue:false,duration:tlength});
				
			$('#bottomNav').stop().animate({
				opacity:1,
				bottom:'220px'
			},{duration:tlength,queue:false});
			
			$('#projHead').stop().animate({
				bottom:'150px',
				opacity:1}, {queue:false,duration:tlength});
			$('.projInfo').each(function() {
					$(this).fadeOut().removeClass('enabled');
				});
				$(this).css('display','none');
				
		});
		function changeSize() {
			w = $(window).width();
			h = $(window).height();
			$('.unpresent').css({'width':w,'height':h});
		}
		$(window).resize(function() {
			changeSize();
		});
		changeSize();
		
	});
</script>
<style>
#bottomNav {
	bottom:235px;
}
#projHead, #smallboxes {
	bottom:135px;
}
</style>