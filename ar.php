<?php require_once('header.php'); ?>
<div id="content">
	<div id="left-bar">
		<a href="http://westonthayer.com/images/ar/ar_winner.jpg" rel="lightbox[ar]"
			title="A snapshot of the screen a winner sees. Text borders the tag like a fence while a particle generator seeds 'fireworks' from the center."
			>
			<img src="http://westonthayer.com/images/ar/ar_winner.jpg"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/ar/ar_loser.png" rel="lightbox[ar]"
			title="A snapshot of the screen a loser sees. A sad sphere slowly rotates."
			>
			<img src="http://westonthayer.com/images/ar/ar_loser.png"
				width="228px" height="138px" />
		</a>
	</div>
	<div id="right-bar">
		<h3>Augmented Reality with Unity3D</h3>
		<p><em>July 2011</em></p>
		<br />
		<p>I had the opportunity to be an intern at Qualcomm this summer.
		Throughout it they created several opportunities for the interns to
		meet and network.</p>
		<br />
		<p>IdeaQuest was one of these opportunities. Interns with the same start
		date were invited to submit ideas that they thought Qualcomm should
		invest in. The ideas were voted on by interns and employees and then 5
		winning ideas were selected. Each idea's author then recruited 6 - 8
		other interns to help them design and implement the idea over 6 Friday
		afternoons.</p>
		<br />
		<p>I joined a team who had the idea to re-brand Qualcomm's SnapDragon
		processor, as well as promote their 
		<a href="http://www.youtube.com/watch?v=JDN_ZN0XEow" target="_blank">
		Augmented Reality (AR) research</a>, with a new marketing campaign that
		used a combination of cereal box advertising and an AR app for Android
		devices. I had been working with Qualcomm's AR SDK over the summer, so I
		volunteered my time to make the app.</p>
		<br />
		<p>The app runs on Android 2.2+ devices, and makes use of the
		<a href="https://developer.qualcomm.com/develop/mobile-technologies/augmented-reality" target="_blank">QCAR SDK</a>,
		specifically the <a href="http://unity3d.com/" target="_blank">Unity3D</a>
		plugin. For our prototype, we took 5 different brands of cereal and hid
		a 'tag' in each one. The app recognizes whether the tag is a winner or a
		loser and augments a 3D model over top of it.</p>
		<br />
		<p>Although I had worked with the QCAR SDK before, this was the first
		time that I worked with Unity3D. Previously, I was using their Android
		port, which involved the combination of a Java library and C++ code for
		use in Android's NDK.</p>
		<br />
		<p>The design for this project was simple. I used my knowledge of the
		QCAR SDK to inform the group what was possible and not possible in the
		short amount of time we had. After I explained that the video game they
		had originally intended to prototype would be too time consuming, we
		decided on simpler winner and loser renderings to ensure completion by
		the deadline. This allowed them to focus on their marketing proposal and
		to prepare an outstanding presentation.</p>
		<br />
		<p>I created these apps in a span of 10 hours. It was a crash course in
		Unity, as well as the QCAR plugin's Unity integration. I had to script
		for the first time in C#, learn Unity3D's interface, and finally
		<a href="http://unity3d.com/support/documentation/Manual/Android-Integrating%20Unity%20With%20Eclipse.html" target="_blank">
		hack their Android-ish output into Eclipse</a> to create the rest of the
		app using Android's native GUI components, which involved some very
		tricky API calls between the two. However, overall Unity3D is a dream
		to work with 3D graphics. Prior to Unity, I had been using OpenGL ES 2.0
		for all graphics needs (Yes, I had to learn the new shader language :( ). It was
		refreshing to have an IDE designed for quick graphics at my disposal.</p>
		<br />
		<p>Overall, this project taught me how to work within a short time-line,
		learn the necessities of a new IDE and API quickly, and how to
		effectively make my knowledge available to a team so that they can make
		well informed decisions. In other words -- it was fun!</p>
	</div>
	<div class="clearfix"></div>
</div>
<?php require_once('footer.php'); ?>