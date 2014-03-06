<?php require_once('header.php'); ?>
<div id="content">
	<div id="left-bar">
		<a href="http://vimeo.com/29515322" target="_blank">
			<img src="http://westonthayer.com/images/vertigo/video_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/vertigo/1.png" rel="lightbox[vertigo]"
			title="The splash screen."
			>
			<img src="http://westonthayer.com/images/vertigo/1_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/vertigo/2.png" rel="lightbox[vertigo]"
			title="Start screen options."
			>
			<img src="http://westonthayer.com/images/vertigo/2_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/vertigo/3.png" rel="lightbox[vertigo]"
			title="The controls."
			>
			<img src="http://westonthayer.com/images/vertigo/3_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/vertigo/4.png" rel="lightbox[vertigo]"
			title="In action."
			>
			<img src="http://westonthayer.com/images/vertigo/4_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/vertigo/onenote_1.png" rel="lightbox[vertigo]"
			title="Some initial architecture sketches."
			>
			<img src="http://westonthayer.com/images/vertigo/onenote_1.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/vertigo/uml.png" rel="lightbox[vertigo]"
			title="The UML diagram."
			>
			<img src="http://westonthayer.com/images/vertigo/uml_thumb.png"
				width="228px" height="138px" />
		</a>
	</div>
	<div id="right-bar">
		<h3>Vertigo</h3>
		<p><em>Fall 2009</em></p>
		<br />
		<p>Vertigo was an end-of-the-year project for CS 2114 Software Design
		&amp; Data Structures. We had to do a project using only the standard
		Java libraries that reflected what we learned over the semester.</p>
		<br />
		<h4>Brainstorming</h4>
		<br />
		<p>I teamed up with
		<a href="http://kurlak.com" target="_blank">John Kurlak</a> and One Hok.
		John wanted to make a side-scroller game and I wanted to see if we could
		do anything cool with touch interaction. We eventually decided that
		touch interaction would be too time consuming (a good thing -- this project
		took forever).</p>
		<br />
		<p>We debated the style of game we wanted, as well as the art style
		since we figured the art style would determine how we built the graphics
		engine. We decided to go with a top-to-bottom scrolling space shooter
		with cartoonish graphics. The features and spec weren't discussed
		heavily. We decided on features as we went, which is what makes me
		amazed that we pulled it off.</p>
		<br />
		<h4>Design</h4>
		<br />
		<p>Just about the only requirement for this project was that we turned
		in a UML design of our architecture. This forced us to think up features
		ahead of time. We had already started coding the core by this time, so
		the UML ended up being pretty specific
		(<a href="http://westonthayer.com/images/vertigo/uml.png" rel="lightbox">PNG</a>
		|
		<a href="http://westonthayer.com/images/vertigo/uml.pdf" target="_blank">PDF</a>).
		Credit goes largely to John for this. This was the largest piece of
		software I'd ever worked on, and he had far more wisdom in the area
		of design.</p>
		<br />
		<p>We designed a tile-based game engine that layered semi-transparent
		sprites over a solid tiled background. The software architecture was
		strictly Object Oriented, which works quite nicely in a game. Interfaces
		and abstract classes were abundant, which led to much easier development
		down the line.</p>
		<br />
		<h4>Development</h4>
		<br />
		<p>Let's just say it took a while. The coolest thing we implemented was
		dynamic level creation. We wrote a post-fix parser that would read
		in a level file. This meant that we could write levels quickly and
		without changing any code. For example, an enemy was constructed
		using:</p>
		<p class="code">TYPE X-Func,Y-Func,X-Pos,Y-Block,Y-Offset,Heath,Fire-Interval</p>
		<p>The internals of this aren't necessary, but what is important is
		that Vertigo scales very, very easily. You can draw up levels by hand,
		transcribe them to the functions, and you're all set. The background is
		also tile based, and parses off of a text file. I wrote a script in
		Python that takes any repeating background and divides it into tiles,
		which made it extremely easy to build great looking levels. This is what
		you see when playing: repeating tiles. We even made several repeating
		sections to give it more diversity.</p>
		<br />
		<h4>Interaction</h4>
		<br />
		<p>The interaction is all keyboard based. We tied in some common FPS
		paradigms such as WASD. Movement of the space craft is controlled via
		the arrow keys, but we wanted the user's hand to be in the familiar
		WASD position for the other actions.</p>
		<br />
		<p>In the WASD position, A and D allow the craft to dodge left and right.
		You can't fire in this position, but you will 'dodge' whatever
		projectiles are in your path for a split second. Shift fires your
		missiles and CTRL fires your bombs. We wanted to encourage button mashing
		(as all good shooters do), so we allow the user to hold the Space bar to
		fire, but at a lower rate. You are best off tapping it like mad.</p>
		<br />
		<h4>Art &amp; Fun</h4>
		<br />
		<p>We were able to have some fun with the art. John sketched up all of
		the sprites and I made some original music in Reason. The backgrounds
		were real images with some effects and custom drawn elements in them.</p>
		<br />
		<p>The best part was the sound effects. We made them all with our own
		voices. It's a kick to hear them go off in succession.</p>
	</div>
	<div class="clearfix"></div>
</div>
<?php require_once('footer.php'); ?>