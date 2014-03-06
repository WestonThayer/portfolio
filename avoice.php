<?php require_once('header.php'); ?>
<div id="content">
	<div id="left-bar">
		<a href="http://westonthayer.com/images/avoice/1.png" rel="lightbox[avoice]"
			title="A color coded view of your inbox."
			>
			<img src="http://westonthayer.com/images/avoice/1_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/avoice/2.png" rel="lightbox[avoice]"
			title="Semantically zoomed in on a message thread."
			>
			<img src="http://westonthayer.com/images/avoice/2_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/avoice/3.png" rel="lightbox[avoice]"
			title="Live tile and toast notifications."
			>
			<img src="http://westonthayer.com/images/avoice/3_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/avoice/4.png" rel="lightbox[avoice]">
			<img src="http://westonthayer.com/images/avoice/4_thumb.png"
				width="228px" height="138px" />
		</a>
		<a href="http://westonthayer.com/images/avoice/5.png" rel="lightbox[avoice]"
			title="Implements the Share contract."
			>
			<img src="http://westonthayer.com/images/avoice/5_thumb.png"
				width="228px" height="138px" />
		</a>
	</div>
	<div id="right-bar">
		<h3>aVoice for Windows 8</h3>
		<p><em>Summer 2013</em></p>
		<p><em><a href="http://apps.microsoft.com/windows/app/avoice/e1cd9093-ab4e-4f57-9526-15c5e9fdba51" target="_blank">Windows Store</a></em></p>
		<br />
		<p>Windows 8 introduced an entirely new process management model that aligns
        closely with IOS and Android. Working at Microsoft, I wanted to help teach my
        team about how to design and develop Windows 8 applications. Since I learn best
        by doing, aVoice is the result.</p>
        <br />
        <p>At the time, there was not a Google Voice client for Windows 8, so I
        decided to give it a shot. How hard could it be? Well, pretty hard.
        The final system makes use of:</p>
        <ul>
            <li>HTML scraping</li>
            <li>Cloud computing via Azure</li>
            <li>Push notifications</li>
        </ul>
        <br />
        <h4>Design</h4>
        <br />
        <p>I selfishly chose Google Voice because I was already a user. Although
        researching other users’ needs would have been advantageous, I felt I could
        ignore it in the interest of time. Thus, I jumped straight into sketching and
        brainstorming around what I felt was most important to text message management.
        After several rounds of sketching, I settled upon a design had 2 views:</p>
        <ul>
            <li>In depth view that allowed me to view an entire conversation while quickly switching to adjacent conversations</li>
            <li>Overview that allows for mass managing of conversations that emphasized what type of message was sent, who the last message was from, and when the last message was received</li>
        </ul>
        <p>Since both of these views are visualizations of the same data, I
        decided to base the app around the concept of <a href="http://msdn.microsoft.com/en-us/library/windows/apps/hh465319.aspx" target="_blank">Semantic Zoom</a>.</p>
        <br />
        <h4>Development</h4>
        <br />
        <p>This is a XAML/C# application targeting Windows 8. This was actually
        my first time using XAML, so you can imagine that I hit a multitude of
        common pitfalls, straying from a clean MVVM architecture. On
        the bright side, I learned a lot about what not to do and was able to
        fix my architecture over a series of painful refactors.<p>
        <br />
        <p>The Azure cloud service (which is used to send push notifications
        to alert the user about a new text message) is one of the more interesting
        components. It utilizes Azure Mobile Services tables and a Worker Role to
        receive SMTP email messages from users. Telemetry is extremely important to
        service applications and I was grateful to have <a href="http://cryclops.com/2013/09/stupid-simple-azure-logging-for-cloud-services/" target="_blank">implemented it</a> once real
        users started coming onboard. The power of Azure became truly apparent
        once I had multiple Worker Roles running behind the load balancer and
        could push updates without service interruptions.</p>
        <br />
        <p>Sadly, I did not have time to instrument the client application to
        learn about detailed usage patterns.</p>
        <br />
        <h4>Quality</h4>
        <br />
        <p>Automation always must strike a balance between quality and time.
        Mocking my Google Voice HTML scraper and the Azure service actually
        saved quite a bit of development time as it let me test error conditions
        (and work without an internet connection) far more easily that I could bring
        them about manually. That work enabled unit tests that helped me avoid shooting
        myself in the foot. However, the UI of the app is fairly simple. A bulk of the
        client application testing was manual, which seemed quicker, but it would be
        interesting to how much it added up.</p>
	</div>
	<div class="clearfix"></div>
</div>
<?php require_once('footer.php'); ?>