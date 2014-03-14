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
					An app that makes your phone <em>yours</em>, even when it's still in your pocket.
				</p>
	        </div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<iframe width="750" height="422" src="//www.youtube.com/embed/A9Gga67I_hA?rel=0" frameborder="0" allowfullscreen></iframe>
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
					Affinity diagramming my notes revealed two major categories:
				</p>
				<ul>
					<li>UI modifications</li>
					<li>Custom ringtones</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<img src="/images/ringpack/onenotewireframe.png" />
			</div>
			<div class="col-md-4">
				<h2>Design</h2>
				<p>
					I was inspired by
					<a href="http://developer.android.com/reference/android/Manifest.permission.html#RECEIVE_SMS" target="_blank">Android&#39;s
					SMS permission</a>, which fires an event whenever a text is received.
					Could this be used to deliver a new custom ringtone experience?
				</p>
				<p>
					Rough ideas started on paper, slowly making their way into wireframes (used in the video).
					A general spec grew along side the sketches in OneNote to help me prioritize features
					and find the MVP.
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
					Initially, RingPack was going to ship with handful of preselected tones. After talking with
					users, it became clear that this one-size-fits-all approach would fall short. The idea of
					installable packs emerged from the feedback.
				</p>
				<p>
					After testing the app on friends, I found that the <code>Get More</code> feature was
					<a href="http://www.jnd.org/dn.mss/gestural_interfaces_a_step_backwards_in_usability_6.html" target="_blank">undiscoverable</a>
					under the <code>MENU</code> key. Moving <code>Get More</code> onto the main screen
					helped people jump right into the customization workflow.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-push-4 bottom-finish">
				<p>17,076 <em>active installs</em></p>
				<p>157.578 <em>downloads</em></p>
				<a class="btn btn-primary" href="https://github.com/Cryclops/RingPack" target="_blank">GitHub</a>
			</div>
		</div>
	</div>
</div>
<?php require_once('footer.php'); ?>