<?php require_once('header.php'); ?>
<div class="section-custom-light">
	<section class="container">
	    <div class="row">
	    	<div class="col-md-3">
	        	<img id="img-me" class="img-circle" src="/images/me.jpg" width="200" height="200" />
	        </div>
	        <div class="col-md-9 section-hook">
	            <h1>
	            	<small>Hello,</small>
	            	I'm Weston
	            </h1>
	            <h4>My passion is crafting virtual and physical tools to enable new possibilities and innovations.</h4>
	            <a class="btn btn-primary" href="#skills">Skills</a>
	        </div>
	    </div>
	</section>
</div>
<div class="section-custom-dark">
	<section class="container">
		<div class="row">
			<div class="col-md-12 section-hook">
				<h1>
	            	<small>Projects</small>
	            	Selected Work
	            </h1>
			</div>
		</div>
		<?php
			class ProjectBox {
				public $Link;
				public $Image;
				public $Caption;

				public function __construct($l, $i, $c) {
					$this->Link = $l;
					$this->Image = $i;
					$this->Caption = $c;
				}

				public function EchoGalleryBox($columnClass) {
					echo '<div class="' . $columnClass . ' gallery-box">
					          <a href="' . $this->Link . '">
					              <div class="img-overlay">
					                  <img src="' . $this->Image . '" />
					                  <div class="caption">
					                      <p>' . $this->Caption . '</p>
					                  </div>
					              </div>
					          </a>
					      </div>';
				}
			}

			$projects = array
			(
				new ProjectBox('/projects/ringpack/', '/images/ringpack_feature.png', 'RingPack for Android'),
				new ProjectBox('/projects/avoice/', '/images/avoice_feature.png', 'aVoice for Windows 8'),
				new ProjectBox('/projects/ar/', '/images/ar_feature.jpg', 'AR with Unity3D'),
				new ProjectBox('/projects/androidj/', '/images/androidj_feature.png', 'AndroiDJ Concept'),
				new ProjectBox('/projects/india/', '/images/india_feature.png', 'laXmi for Android'),
				new ProjectBox('/projects/cole/', '/images/cole_feature.png', 'Wedding in Flash'),
				new ProjectBox('/projects/vertigo/', '/images/vertigo_feature.png', '2D Platformer in Java'),
				new ProjectBox('/projects/kiteboard/', '/images/kiteboard_feature.jpg', 'Kiteboard'),
				new ProjectBox('/projects/surfboard/', '/images/surfboard_feature.jpg', 'Surfboard')
			);
		?>
		<div class="row gallery">
			<?php
				for ($i = 0; $i < count($projects); $i++) {
					if ($i === 0) {
						$projects[$i]->EchoGalleryBox('col-xs-12 col-sm-6 col-md-6');
					}
					else {
						$projects[$i]->EchoGalleryBox('col-xs-12 col-sm-6 col-md-3');
					}
				}
			?>
		</div>
	</section>
</div>
<div id="skills" class="section-custom-light">
	<section class="container">
		<div class="row">
			<div class="col-md-12 section-hook">
				<h1>
	            	<small>Skills</small>
	            	What I'm Good At
	            </h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 section-skills-design">
				<h3>Design</h3>
				<p>
					I love exploring the possibilities of an
					open ended, ambigious question. From <strong>user
					research</strong> - to <strong>prototyping</strong> - to <strong>usability
					testing</strong>, I'm constantly iterating towards an efficient, ideal
					solution within the constraints. I'm
					<a href="http://www.hcde.washington.edu/ucd" target="_blank">educated</a>
					in User-Centered Design and my decisions are driven by all kinds of user data. This is
					where my creative side shines.
				</p>
			</div>
			<div class="col-md-4">
				<?php //include('/images/brain.svg') ?>
				<!--<h1 id="header-ampersand">&amp;</h1>-->
			</div>
			<div class="col-md-4">
				<h3>Develop</h3>
				<p>
					When a question finds an answer, I'm there to help build it into a product.
					I have a
					<a href="https://www.cs.vt.edu/" target="_blank">CS background</a>
					and experience with
					<strong>front-end</strong>,
					<strong>back-end</strong>, and
					<strong>testing</strong>.
					Software platforms are intimately familiar to me and I draw from this knowledge
					to inform and inspire the design. I bring a unique perspective; an understanding
					of the paint, brushes, and canvas.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 quote">
				<blockquote>
					I like to wear many hats.
				</blockquote>
			</div>
		</div>
		<div id="skills-list" class="row">
			<?php
				class Skill {
					public $IsHeader;
					public $Link;
					public $Title;

					public function __construct($i, $l, $t) {
						$this->IsHeader = $i;
						$this->Link = $l;
						$this->Title = $t;
					}

					public function EchoListItem() {
						echo '<li>';

						if ($this->IsHeader) {
							echo '<h4>' . $this->Title . '</h4>';
						}
						else {
							echo '<a href="' . $this->Link . '" target="_blank">' . $this->Title . '</a>';
						}

						echo '</li>';
					}
				}

				$skills = array
				(
					new Skill(true, '', 'Methods'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Agile_software_development', 'Agile'),
					new Skill(false, 'http://en.wikipedia.org/wiki/User-centered_design', 'UCD'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Don\'t_repeat_yourself', 'DRY'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Responsive_web_design', 'Responsive Design'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Model_View_ViewModel', 'MVVM'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller', 'MVC'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Representational_state_transfer', 'REST'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Storyboard', 'Storyboarding'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Paper_prototyping', 'Paper Prototyping'),
					new Skill(true, '', 'Front-End'),
					new Skill(false, 'http://getbootstrap.com/', 'Bootstrap'),
					new Skill(false, 'compass-style.org', 'Compass'),
					new Skill(false, 'http://sass-lang.com/', 'Sass'),
					new Skill(false, 'http://www.w3schools.com/css/css3_intro.asp', 'CSS3'),
					new Skill(false, 'http://en.wikipedia.org/wiki/XHTML', 'XHTML'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Extensible_Application_Markup_Language', 'XAML'),
					new Skill(false, 'http://developer.android.com/guide/topics/ui/declaring-layout.html', 'Android XML'),
					new Skill(true, '', 'Back-End'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Windows_Azure', 'Azure'),
					new Skill(false, 'http://en.wikipedia.org/wiki/PHP', 'PHP'),
					new Skill(false, 'http://en.wikipedia.org/wiki/C_Sharp_(programming_language)', 'C#'),
					new Skill(false, 'http://en.wikipedia.org/wiki/C++', 'C++'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Java_(programming_language)', 'Java'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Objective-C', 'Objective-C'),
					new Skill(false, 'http://en.wikipedia.org/wiki/SQL', 'SQL'),
					new Skill(true, '', 'Platforms'),
					new Skill(false, 'http://msdn.microsoft.com/en-us/windows/apps/br229512.aspx', 'Windows 8'),
					new Skill(false, 'http://msdn.microsoft.com/en-us/library/windowsphone/develop/ff402535(v=vs.105).aspx', 'Windows Phone'),
					new Skill(false, 'http://developer.android.com/index.html', 'Android'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Web_development', 'Web'),
					new Skill(false, 'http://www.adobe.com/products/flash.html', 'Flash'),
					new Skill(false, 'https://developer.apple.com/', 'iOS'),
					new Skill(true, '', 'Tools'),
					new Skill(false, 'http://www.adobe.com/products/photoshop.html', 'Photoshop'),
					new Skill(false, 'http://www.adobe.com/products/illustrator.html', 'Illustrator'),
					new Skill(false, 'http://www.adobe.com/products/indesign.html', 'InDesign'),
					new Skill(false, 'http://www.adobe.com/products/aftereffects.html', 'After Effects'),
					new Skill(false, 'http://www.adobe.com/products/premiere.html', 'Premiere'),
					new Skill(false, 'https://www.ableton.com/', "Ableton Live"),
					new Skill(false, 'http://bower.io/', "Bower"),
					new Skill(false, 'http://www.git-tower.com/blog/git-cheat-sheet/', "Git")
				);
			?>
			<ul class="list-unstyled">
				<?php
					$index = 0;

					for ($column = 0; $column < 6; $column++) {
						if ($column < 2) {
							echo '<div class="col-xs-3 col-md-2 text-right">';
						}
						elseif ($column < 4) {
							echo '<div class="col-xs-3 col-md-2 text-center">';
						}
						else {
							echo '<div class="col-xs-3 col-md-2">';
						}

						for ($i = 0; $index < count($skills) && $i < 7; $i++) {
							$skills[$index]->EchoListItem();
							$index++;
						}

						echo '</div>';
					}
				?>
			</ul>
		</div>
		<!--<div class="row">
			<div class="col-md-4">
				<h4>Methods</h4>
				<ul>
					<li>User-Centered Design</li>
					<li>Agile</li>
					<li>DRY</li>
					<li>MVVM</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>Languages</h4>
				<ul>
					<li>HTML | Sass</li>
					<li>XAML | C#</li>
					<li>XML | Java | C++</li>
					<li>Objective C</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4>Software</h4>
				<ul>
					<li>Photoshop | Illustrator | InDesign</li>
					<li>After Effects | Premiere</li>
					<li>Ableton Live</li>
				</ul>
			</div>
		</div>-->
	</section>
</div>
<?php require_once('footer.php'); ?>