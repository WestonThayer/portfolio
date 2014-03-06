<?php require_once('header.php'); ?>
<div id="content">
	<div id="left-bar">
		<a href="http://westonthayer.com/images/ringpack/sc1.png" rel="lightbox[ringpack]"
			title="The central screen. Choose any pack to begin using, or 'none' to disable. Long pressing yields more options."
			>
			<img src="http://westonthayer.com/images/ringpack/sc1_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/ringpack/sc2.png" rel="lightbox[ringpack]"
			title="The preferences screen. The 'Accessibility Hack' needs a UX reworking. It is marked as an issue on GitHub."
			>
			<img src="http://westonthayer.com/images/ringpack/sc2_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/ringpack/widget_thumb.png" rel="lightbox[ringpack]"
			title="The home screen widget."
			>
			<img src="http://westonthayer.com/images/ringpack/widget_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/ringpack/mindmeister.png" rel="lightbox[ringpack]"
			title="The basic architecture. I later realized the Service could be replaced by a standard Java class that relies on BoadcastReceivers to call it (since everything is trigger based). The green arrows represent a flow of control signals (usually Intents)."
			>
			<img src="http://westonthayer.com/images/ringpack/mindmeister_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://www.youtube.com/embed/A9Gga67I_hA"
			title="YouTube promo video."
			>
			<img src="http://westonthayer.com/images/ringpack/youtube_thumb.png"
				width="228px" height="138px" />
		</a>
	</div>
	<div id="right-bar">
		<h3>RingPack</h3>
		<p><em>Fall 2010 - Spring 2011</em></p>
		<p><em><a href="http://cryclops.com/apps/ringpack/" target="_blank">Web</a> |
		<a href="https://market.android.com/details?id=com.cryclops.ringpack" target="_blank">Market</a></em></p>
		<br />
		<p>RingPack started as one of my first ambitious projects getting into
		Android development. I'd been reading the documentation and noticed that
        any app can request to be notified when a new SMS comes in. This must've
        stuck in my brain because several weeks later I came up with the idea of
        a phone that played a different chord out of a progression every time
        a new text came in.</p>
		<br />
		<h4>Initial Spec</h4>
		<br />
		<p>After verifying that the idea was feasible, I started by writing (and
		sketching) up exactly how I wanted the app to function. This started
		with a statement of the high level idea, which was followed by exploring
		it deeper. What is a Pack? How do users extend add Packs? How do they
		enable and disable it? How much can users customize the experience? All
		of this was written up in OneNote for later use.</p>
		<br />
		<p>After I had a fairly clear set of goals, I broke them down into
		simpler goals. Editing the contents of a Pack will come later; a home
		screen widget will come later. I decided to implement the core
		functionality of the app first, then add in the frills. However, I
		was careful not to forget the frills when designing my data model to
		ensure that they wouldn't be impossible to implement later.</p>
		<br />
		<h4>Software Architecture</h4>
		<br />
		<p>I already had a rough idea of the API components needed, I just
		needed to figure out what responsibilities each had. I accomplished this
		with a node based graph that's
		<a href="http://westonthayer.com/images/ringpack/mindmeister.png" rel="lightbox">inspired by UML</a>.
		Having a big-picture map like this proved extremely useful when I found
		myself lost in the pursuit of an annoying bug. The map was accompanied
		by notes about state and logic in OneNote.</p>
		<br />
		<h4>Development</h4>
		<br />
		<p>Being (fairly) new to Android development, this was the most time
		consuming portion of the work. I had SQLite, Java threads, Java file IO,
		and Android UI customizations to learn. Looking back, I was running into walls
		by walls that seem obvious now. If I ever have enough time, I owe myself
		a re-write. The good news is that I now practice much better methods
		with a new perspective.</p>
		<br />
		<h4>Interaction Design</h4>
		<br />
		<p>The app opens for the first time and displays an about dialog that provides some
		background and usage tips. It appears on every launch unless the user tells it not to.
		The idea was to model the way Apple's iLife products display a welcome
		screen on start up, encouraging users to learn more about the app.</p>
		<br />
		<p>I tried to keep everything as simple as I could, but looking back,
		this is an area that needs work. People hate reading long walls of text
		in most scenarios. I believe a tutorial that interactively helps explain
		RingPack would be ideal and would help with the frustration some users
		have expressed.</p>
		<br />
		<p>From there, a list of installed packs are presented. This seems to
		work OK, however I think pack-like icons in a grid would serve the Pack
		metaphor much better and give a clearer window at the data model.</p>
		<br />
		<p>Some other issues: the long press action is difficult to discover,
		discovery of Android's MENU key should not be
		<a href="http://www.jnd.org/dn.mss/gestural_interfaces_a_step_backwards_in_usability_6.html" target="_blank">assumed</a>,
		and the process of adding new Packs can be unclear. Overall, I don't
		feel that I did the UX justice, and it is visible in the user reviews.
		However, I feel that it was a valuable learning experience.</p>
		<br />
		<h4>Deployment and Maintenance</h4>
		<br />
		<p>The first release had a major bug. I had a misconception about
		the life cycle of
		<a href="http://developer.android.com/reference/android/app/Service.html" target="_blank">Services</a>.
		I thought that onDestroy() was guaranteed to be called if my Service
		was to leave memory. I would write all my state information to disk
		there, which worked fine on my Droid X, but failed miserably on lower
		performance Android phones that were scrambling for extra memory. Thus
		was my introduction to
		<a href="http://www.zdnet.com/blog/open-source/androids-biggest-worry-fragmentation/8022" target="_blank">Android
		fragmentation</a>.</p>
		<br />
		<p>After becoming aware of this via stack traces and support emails, I
		ended up pulling the first version off of the Market and doing a major
		overhaul, determined to find out what was wrong. It was released again
		to a slightly better reception, although some users produced bugs that
		I could not reproduce on my device.</p>
		<br />
		<p>At this point the semester had ended, and I no longer had time to
		work on the project. I
		<a href="https://github.com/Cryclops/RingPack" target="_blank">open
		sourced</a> it under the GPL and invited the community to fix the phone
		specific bugs and take over the project.</p>
		<br />
		<h4>Future</h4>
		<br />
		<p>The future is uncertain. I became involved in other work and the
		community hasn't contributed to the project as of yet. I would love to
		improve the interaction design above all else as soon as I am able.</p>
		<br />
		<p>RingPack currently has ~18,000 active installs, and has an average
		rating of 3.6 stars. ~150,000 people have tried the app.</p>
	</div>
	<div class="clearfix"></div>
</div>
<?php require_once('footer.php'); ?>