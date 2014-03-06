<?php require_once('header.php'); ?>
<div id="content">
	<div id="left-bar">
		<a href="http://westonthayer.com/images/androidj/sc1.png" rel="lightbox[androidj]"
			title="The main screen with the sliding drawer visible. The upper left has the 'on deck' track (currently playing), while the upper right holds the queued or secondary playing track. The rest of the screen contains mixing controls, and obscures the playlist library."
			>
			<img src="http://westonthayer.com/images/androidj/sc1_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/androidj/sc2.png" rel="lightbox[androidj]"
			title="This shows the pitch control dialog in place. You can use multi-touch to modify many sliders at once."
			>
			<img src="http://westonthayer.com/images/androidj/sc2_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/androidj/autoeq.png" rel="lightbox[androidj]"
			title="Hi or Lo pass filter automation. See the pdf for clearer information."
			>
			<img src="http://westonthayer.com/images/androidj/autoeq_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://www.youtube.com/watch?v=-X7ipKdFCXc"
			title="Quick YouTube screencast of the central sliding drawer that holds the controls."
			>
			<img src="http://westonthayer.com/images/androidj/youtube_thumb.png"
				width="228px" height="138px" />
		</a>
	</div>
	<div id="right-bar">
		<h3>AndroiDJ</h3>
		<p><em>Fall 2010</em></p>
		<br />
		<p>AndroiDJ is the product of an HCI class at Virginia Tech. In a
		group of 2 other students, we:</p>
		<ul>
			<li>Generated a root concept (touch-based DJ software for smart
			phones).</li>
			<li>Performed field studies.</li>
			<li>Wrote and examined problem scenarios.</li>
			<li>Brainstormed activities and their scenarios</li>
			<li>Information and interaction design.</li>
			<li>Prototyping, evaluation, and redesign.</li>
		</ul>
		<p>That's a very brief summary. If you find yourself more interested,
		you can find the full project
		<a href="http://westonthayer.com/HCISite/index.html" target="_blank">here
		(please excuse the crude site)</a>.</p>
		<br />
		<h4>Auto EQ</h4>
		<br />
		<p>There's a lot I could talk about here, and AndroiDJ is a design that
		I'm very proud of (although not so much the name). I think that there
		are several unique features that would bring innovation to a certain
		class of DJs, but I'll just focus on one here.</p>
		<br />
		<p>Auto EQ was an idea to free the DJ's hands from knobs or sliders
		during high or low pass filter fades. That's a mouthful. Essentially,
		when DJs want to perform that cool effect that makes the song sound like
		it's underwater, rising to clarity (often heard in techno) they have to
		keep one hand on a knob or slider and carefully regulate the effect
		until they complete the fade. This can take anywhere from a few
		to 30 seconds.</p>
		<br />
		<p>Hands are a valuable and scare commodity to DJs, so we tried to free
		them up with the Auto EQ feature.
		<a href="http://westonthayer.com/images/androidj/autoeq.pdf" target="_blank">This PDF</a>
		gives a fairly clear idea as to how it works. We tried to minimize the
		time the DJ must use their hand by letting them quickly draw in an
		automation curve via the touch screen. Automation curves exist in most
		<a href="http://en.wikipedia.org/wiki/Digital_audio_workstation" target="_blank">DAWs,</a>
		but they are traditionally performed with a mouse, a tedious
		process which is not suitable for live performance. With Auto EQ, the DJ
		sees a waveform rendition of the song's near future. They can select
		between drawing a low or high pass filter, and do it quickly for 1 or 2
		songs. If I have time at a later date I'd love to either implement it or
		create a video mock in After Effects.</p>
		<br />
		<h4>Prototype</h4>
		<br />
		<p>I implemented a brief prototype for Android to serve as an animated
		interface testing ground. The video on the left gives a demo of what it
		can do. Overall, our client was very excited about the design and
		enjoyed playing with it. I would love to create a full featured
		application like this someday for people to play with.</p>
	</div>
	<div class="clearfix"></div>
</div>
<?php require_once('footer.php'); ?>