	<?php require_once('header.php'); ?>
<div class="section-custom-light">
	<div class="container gallery-project">
		<div class="row">
			<div class="col-md-8">
				<img src="/images/ringpack/feature_graphic.png" />
			</div>
			<div class="col-md-4 section-hook">
	            <h1>
	            	<small>android</small>
	            	RingPack
	            </h1>
	            <h4>
	            	<em>
	            		<a href="http://cryclops.com/apps/ringpack/" target="_blank">Web</a> |
						<a href="https://market.android.com/details?id=com.cryclops.ringpack" target="_blank">Market</a>
					</em>
				</h4>
				<p>
					RingPack switches out your text ringtone each time a text is received. Each ringtone belongs
					to a Pack of related sounds. You can download, create, and share Packs with anyone!
				</p>
				<p>
					RingPack currently has <strong>17,615 active installs</strong> and <strong>161,652 downloads</strong>.
				</p>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="flex-video widescreen">
					<iframe src="//www.youtube.com/embed/A9Gga67I_hA?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-4">
				<h2>Research</h2>
				<p>
					<em>How can my phone feel like an extension of me?</em>
				</p>
				<p>
					Make it personal. When I researched the
					<a href="http://lifehacker.com/5875678/how-to-customize-your-iphone-inside-and-out" target="_blank">customization</a>
					<a href="https://play.google.com/store/search?q=launcher&amp;c=apps" target="_blank">landscape</a>,
					I was astounded by the variety of options and the fact that almost every major phone platform has a passionate
					customization community.
				</p>
				<p>
					After affinity diagramming my notes, I was left with two major categories:
				</p>
				<ul>
					<li>UI modifications</li>
					<li>Custom ringtones</li>
				</ul>
				<p>
					I chose the relatively unexplored custom ringtone space.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<img src="/images/ringpack/onenotewireframe.png" />
			</div>
			<div class="col-md-4">
				<h2>Design</h2>
				<p>
					My inspiration was
					<a href="http://developer.android.com/reference/android/Manifest.permission.html#RECEIVE_SMS" target="_blank">Android&#39;s
					SMS permission</a>, which fires an event whenever a text is received.
				</p>
				<p>
					Rough ideas started on paper by rapidly sketching ideas. Once I had a few to evaluate,
					I critiqued them with friends. I selected the most interesting concept to transform
					into wireframes (used in the video). At the same time, I started a spec to better understand
					the functionality, prioritize features, and find the
					<a href="http://en.wikipedia.org/wiki/Minimum_viable_product" target="_blank">MVP</a>.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<img src="/images/ringpack/sc1phone.png" />
			</div>
			<div class="col-md-4">
				<h2>Evaluation</h2>
				<p>
					Initially, RingPack was going to ship with a handful of preselected tones. After testing with
					users, it became clear that this one-size-fits-all approach would fall short. The idea of
					installable packs emerged from the feedback.
				</p>
				<p>
					Through
					<a href="https://developers.google.com/analytics/devguides/collection/android/" target="_blank">Google Analytics</a>
					, I found that the <code>Get More</code> feature was
					<a href="http://www.jnd.org/dn.mss/gestural_interfaces_a_step_backwards_in_usability_6.html" target="_blank">undiscoverable</a>
					under the <code>MENU</code> key. Moving <code>Get More</code> onto the main screen
					helped people jump right into the customization workflow.
				</p>
				<p>
					<strong>
						More on the blog: 
						<a href="http://cryclops.com/2014/04/the-forgiving-user/" target="_blank">The Forgiving User</a>.
					</strong>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-push-4 bottom-finish">
				<a class="btn btn-default" href="https://github.com/Cryclops/RingPack" target="_blank">
					<img class="btn-icon" src="/images/GitHub-Mark-32px.png"/> RingPack on GitHub
				</a>
			</div>
		</div>
	</div>
</div>
<?php require_once('footer.php'); ?>