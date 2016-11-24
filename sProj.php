<div class="grid_16 push_4 alpha projInfo buggy">
	<div class="grid_16 alpha">
	<h1>Carbon Fiber Buggy</h1>
	<h2>As <span>Buggy Chairman,</span> I was a leader in the construction of a carbon
	fiber <span>racing vehicle</span>, for <a href="http://cmubuggy.org/">Buggy Sweepstakes</a> at <a href="http://cmu.edu">Carnegie Mellon.</a> This required <span>CAD surface modeling,</span>
	 construction of a plug and mold, <span>vacuum bagging,</span> and experience working with <span>carbon fiber</span></h2>
	</div>
	<div class="clear"></div>
	<div class="grid_16 alpha imgFade">
	<ul>
	</ul>
	<div><img src="images/covers/buggy.jpg" />
		<p>It all started with a conceptual model in Solidworks. I began with the design of the organic shape of the shell and then designed steering and the rear wheel assembly. Above you can see the 
		finished product of the conceptual design. More info about the steering and rear wheel assembly is in the <A href="">machined buggy parts</a> section.</p>
	</div>
	<div><img style="width:100%" src="images/buggy/mold.jpg" />
		<p>We used the conceptual model to make a wooden skeleton, fill it with expanding foam, create a plug, and finally end up with a fiberglass mold as shown above.</p>
	</div>
	
	
	<div><img style="width:100%" src="images/buggy/vacuum.png" />
		<p>We put carbon fibger into the mold and used epoxy to create a composite. We placed foam in some areas to act as a sandwich for extra structural support, creating ribs. Here you can see
		 the excess epoxy being squeezed out (it was dyed purple) and spread onto the breathing fabric.  </p>
	</div>
	<div><img style="width:100%" src="images/buggy/pan.jpg" />
		<p>The carbon fiber floor pan being vacuum bagged, you can see the ribs from the <span>foam sandwich material</span></p>
	</div>
	<div><img style="width:100%" src="images/buggy/lucy.jpg" />
		<p>The summer following sophomore year, I learned how to use <a href="http://www.solidworks.com/sw/products/3d-cad/packages.htm">Solidworks</a> to model an organic shape using <a href="">surface modeling</a>. From this experience, I created iterations of buggies until we were able to find a final shape. As I began sophomore year, I took the mini Introduction to CAD, which taught me how to use Solidworks even better. This experience helped me develop detailed drawings for developing the skeleton that we later filled with foam for a plug. This plug was sanded down as smooth as we could get it (I would have preferred a CNC, but one was unavailable).</p>
	</div>
	
	<div><img style="width:100%" src="images/buggy/lauren.jpg" />
		<p>Our buggy driver, Lauren, getting into the buggy on race day</p>
	</div>
	
	</div>
	</div>
	<div class="clear"></div>
	
	<div class="grid_16 push_4 alpha projInfo planning">
	<div class="grid_16 alpha">
	<h1>Planning Algorithms</h1>
	<h2>As a part of my research in the <span>Robotics Institute</span>, I have been developing path planning algorithms for
	 the <a href="?projects#p.manipulator">polygonal manipulator</a>. This required use of <span>MATLAB</span>, 3D calculus, and <span>numerical methods</span>.</h2>
	</div>
	<div class="clear"></div>
	<div class="grid_16 alpha imgFade">
	<ul>
	</ul>
	<div><img src="images/planning/inverse-kinematics.jpg" />
		<p>In order to derive planning algorithms for robotic motion, it is necessary to develop the <span>inverse kinematics</span> of the robot. The diagram above shows
		 the individual lengths and angles of the device. Below is the equation that transforms (x,y) motion into the lengths of each individual string. This is a planar approximation.</p>
	</div>
	<div><img style="width:100%" src="images/planning/path-fitting.jpg" />
		<p>It is possible to plan for the following of an arbitrary path at a constant tangential velocity. In order to do this, 
		 the path must for be parameterized for arc length, which cannot be easily solved. It becomes necessary to use numerical methods to approximate the arc
		  length integral. Additionally, using the robot Jacobian and inverse kinematics, it becomes possible to convert the parametric path
		   to the robot's coordinate space. Above is an example of a curve that was splined.</p>
	</div>
	<div><img style="width:100%" src="images/covers/planning.png" />
		<p>I developed MATLAB functions that take a sketch drawn on a tablet, processes it into a single pixel line, 
		fits cubic polynomial splines to the path, parameterizes the path by arc-length to make it constant tangential velocity, and using the relative position of the vacuum chambers finally converts
		the parameterization to the coordinate space of the robot.</p>
	</div>
	</div>
	</div>
	<div class="clear"></div>
	
	<div class="grid_16 push_4 alpha projInfo crane">
	<div class="grid_16 alpha">
	<h1>Stress Analysis: Crane</h1>
	<h2>As a sophomore <span>Mechanical Engineering</span> student, I collaborated with two classmates to create a <span>crane</span> that was fixed in one location, moves through a hole and lifts the weight far away from where it is fixed.</h2>
	</div>
	<div class="clear"></div>
	<div class="grid_16 alpha imgFade">
	<ul>
	</ul>
	<div><img src="images/covers/crane.png" />
		<p>We started with a Solidworks model of our crane positioned onto the provided playing field. Above you can see
		 the path we decided to take. FEA stress analysis was also conducted on this model to approximate
		  areas that were weak.</p>
	</div>
	<div><video width="100%" controls>
  <source src="images/crane/crane.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
		<p>Above is a video before our first design review, where we were able to successfully lift the weight. Minor changes were made later to reduce size and displacement due to forces.</p>
	</div>
	
	
	<div><img style="width:100%" src="images/crane/lever-arm.jpg" />
		<p>After debating multiple designs, we finally decided on using a weighted lever arm to lift the 2lb weight using the servo. The design above worked, but the final design
		 used more weight in order to lift higher.</p>
	</div>
	<div><video width="100%" controls>
  <source src="images/crane/crane2.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
		<p>Here is our final design before design review 2. We made the cross section triangular to save space and weight, 
		 switched to a plastic lever arm, and added much more counterweight.</p>
	</div>
	</div>
	</div>
	<div class="clear"></div>
	
	<div class="grid_16 push_4 alpha projInfo actuation">
	<div class="grid_16 alpha">
	<h1>Robot Actuation</h1>
	<h2>I am currently designing the actuation of the polygonal manipulator on a small budget, using an arduino, servos, and sensing elements.</h2>
	</div>
	<div class="clear"></div>
	<div class="grid_16 alpha imgFade justFormat">
	<ul>
	</ul>
	<div><img src="images/covers/arduino.jpg" />
		<p>An Arduino was a clear choice in this project, as it is cheaply available and very powerful. A joystick can be connected to the arduino 
		via analog. Code can be uploaded to the Arduino and then later ran without a computer, allowing direct and easy control of the robot. </p>
	</div>
		
	</div>
	</div>
	<div class="clear"></div>
	
	<div class="grid_16 push_4 alpha projInfo manipulator">
	<div class="grid_16 alpha">
	<h1>Deployable Polygonal Manipulator</h1>
	<h2>As an undergraduate researcher in the <span>Surgical Mechatronics Laboratory</span> in the Robotics Institute,
	 I have been rapidly prototyping a new medical device for minimally invasive delivery of therapies to the <span>beating heart</span>.</h2>
	</div>
	<div class="clear"></div>
	<div class="grid_16 alpha imgFade">
	<ul>
	</ul>
	<div><img src="images/manipulator/conceptman.png" />
		<p>Pictured above is the first image one of my mentors, Nathan Wood, showed me when he described the project. The polygonal manipulator has
		 three vacuum chambers that adhere to the surface of the heart, with a tool positioned in the area created by the device. By using wire robotics, we are able
		  to maneuver a large workspace. Our main method of treatment is currently gene delivery to help those with myocardial infarction after a heart attack.</p>
	</div>
	<div><img style="width:100%" src="images/covers/prototyping.png" />
		<p>Above are six different main bases that I developed in Solidworks. During the course of Summer 2013, 10 iterations were modelled and only 8 were eventually 3D printed.</p>
	</div>
	
	
	<div><img style="width:100%" src="images/manipulator/manipulator.png" />
		<p>Because the polygonal manipulator is deployed onto the heart, using a balloon for the initial development made
		 a lot of sense. Above you can see revision 7 or 8, finally ready to work on the balloon. In the next slide you can see a video of its motion.</p>
	</div>
	<div><video width="100%" controls>
  <source src="images/manipulator/clip.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
		<p>A video showing the motion of the robot on a balloon. In the planar approximation, it is clear that by controlling the length of each string attached to the tool, 
		it is possible to control (x,y) motion (more about that in the <a href="?projects#p.planning">Path Planning Algorithms</a> section.</p>
	</div>	
	</div>
	</div>
	<div class="clear"></div>
	
	<div class="grid_16 push_4 alpha projInfo web">
	<div class="grid_16 alpha">
	<h1>Miscellaneous Web Design</h1>
	<h2>I first got interested in science and technology when I started programming in 6th grade. I learned PHP as my first language, but over the years my knowledge has grown.</h2>
	</div>
	<div class="clear"></div>
	<div class="grid_16 alpha imgFade justFormat">
	<ul>
	</ul>
	<div><img src="images/covers/other.jpg" />
		<p>I have been learning to program using online resources since middle school. It started with PHP, grew to HTML and Javascript. From there, I learned about object oriented programming and learned Java. As an engineer, I've expanded my programming knowledge to MATLAB, and also refined my web design skills. I created this entire website from scratch, utilizing some great tools along the way.</p>
	</div>
	
	
	</div>
	</div>
	<div class="clear"></div>
	
	<div class="grid_16 push_4 alpha projInfo machinedBuggy">
	<div class="grid_16 alpha">
	<h1>Machined Buggy Parts</h1>
	<h2>I used CAD programs to design buggy parts that I later machined at Sciullo Machine and Tool.</h2>
	</div>
	<div class="clear"></div>
	<div class="grid_16 alpha imgFade">
	<ul>
	</ul><div><img style="width:100%" src="images/buggy/rear-render.jpg" />
		<p>It all started with a CAD model of the rear wheel assembly.</p>
	</div>
		<div><img style="width:100%" src="images/buggy/steering-render.JPG" />
		<p>The steering took a bit longer to create, and we initially had some problems getting a lot of
	 input from different people.</p>
	</div>
	<div><img src="images/buggy/rear.jpg" />
		<p>The rear wheel assembly fully put together, with breaks mounted. The break pads were later rotated to give a larger contact area on the wheels.</p>
	</div>
	<div><img style="width:100%" src="images/buggy/front.jpg" />
		<p>The front of the buggy, fully put together and ready to go. After experimentation we decided to put both push rods on the same side, which was different from our model. We later refined the middle piece.</p>
	</div>
	
	
	</div>
	</div>
	<div class="clear"></div>
	
	<div class="grid_16 push_4 alpha projInfo ultralander">
	<div class="grid_16 alpha">
	<h1>UltraLander</h1>
	<h2>For my first semester working in the Robotics Institute, I worked on a 
	ultrasound fitted epicardial injection system, for intended use of hydrogel bulking agent therapy.</h2>
	</div>
	<div class="clear"></div>
	<div class="grid_16 alpha imgFade justFormat">
	<ul>
	</ul>
	<div><img src="images/ultralander-poster.jpg" />
		<p>It all started with a conceptual model in Solidworks. I began with the design of the organic shape of the shell and then designed steering and the rear wheel assembly. Above you can see the 
		finished product of the conceptual design. More info about the steering and rear wheel assembly is in the <A href="">machined buggy parts</a> section.</p>
	</div>
	
	</div>
	</div>
	<div class="clear"></div>