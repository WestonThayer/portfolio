<?php require_once('header.php'); ?>
<div class="section-custom-light section-custom-first">
	<section class="container">
	    <div class="row">
	    	<div class="col-sm-3">
	        	<img id="img-me" class="img-circle" src="/images/me.jpg" width="200" height="200" />
	        </div>
	        <div class="col-sm-9 section-hook">
	            <h1>
	            	<small>Hello,</small>
	            	I'm Weston
	            </h1>
	            <h4>
	            	I love designing and engineering engaging apps, websites, and experiences
	            	from end-to-end.
	            </h4>
	            <a class="btn btn-default" href="#work">Work</a>
	            <a class="btn btn-default" href="#skills">Skills</a>
	            <a class="btn btn-default" href="#contact">Contact</a>
	        </div>
	    </div>
	</section>
</div>
<div id="work" class="section-custom-dark">
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
				new ProjectBox('/projects/india/', '/images/india_feature.png', 'laXmi for Android'),
				new ProjectBox('/projects/androidj/', '/images/androidj_feature.png', 'AndroiDJ Concept'),
				new ProjectBox('/projects/usability/', '/images/usability_feature.png', 'Usability Testing'),
				new ProjectBox('/projects/soliloquy/', '/images/soliloquy_feature.png', 'Soliloquy for Android'),
				new ProjectBox('/projects/kiteboard/', '/images/kiteboard_feature.jpg', 'Kiteboard'),
				new ProjectBox('/projects/vertigo/', '/images/vertigo_feature.png', '2D Platformer in Java')
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
					open ended, ambiguous question. From <strong>user
					research</strong> - to <strong>prototyping</strong> - to <strong>usability
					testing</strong>, I'm constantly iterating towards an efficient, ideal
					solution within the constraints. I'm
					<a href="http://www.hcde.washington.edu/ucd" target="_blank">educated</a>
					in User-Centered Design and my decisions are driven by all kinds of user data. This is
					where my creative side shines.
				</p>
			</div>
			<div id="circling-birds-div" class="col-md-4">
				<?php include('images/circling_birds.svg') ?>
			</div>
			<div class="col-md-4">
				<h3>Develop</h3>
				<p>
					When I find a question's answer, I'm there to help build it into a product.
					I have a
					<a href="https://www.cs.vt.edu/" target="_blank">CS background</a>
					and experience with
					<strong>front-end</strong>,
					<strong>back-end</strong>, and
					<strong>testing</strong>.
					I am intimately familiar with software platforms and draw from this knowledge
					to inform and inspire the design process. I bring a unique perspective; an understanding
					of the paint, brushes, and canvas.
				</p>
			</div>
		</div>
	</section>
</div>
<div class="section-custom-dark">
	<section id="toolbox" class="container">
		<div class="row">
			<div class="col-md-12 section-hook">
				<h1>
	            	<small>Toolbox</small>
	            </h1>
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
							echo $this->Title;
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
					new Skill(false, 'http://blog.conceptcodify.com/2013/02/10/user-research-techniques-surveys/', 'Surveys'),
					new Skill(false, 'http://www.nngroup.com/articles/interviewing-users/', 'Interviews'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Usage_analysis', 'Usage Analysis'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Persona', 'Personas'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Website_wireframe', 'Wireframing'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Storyboard', 'Storyboarding'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Prototype', 'Prototyping'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Usability_testing', 'Usability Testing'),
					new Skill(false, 'http://en.wikipedia.org/wiki/A/B_testing', 'A/B Testing'),
					new Skill(false, 'http://www.nngroup.com/articles/ten-usability-heuristics/', 'Heuristic Evaluation'),

					new Skill(true, '', 'Software'),
					new Skill(false, 'http://www.adobe.com/products/photoshop.html', 'Photoshop'),
					new Skill(false, 'http://www.adobe.com/products/illustrator.html', 'Illustrator'),
					new Skill(false, 'http://www.adobe.com/products/indesign.html', 'InDesign'),
					new Skill(false, 'http://www.adobe.com/products/aftereffects.html', 'After Effects'),
					new Skill(false, 'http://www.adobe.com/products/premiere.html', 'Premiere'),
					new Skill(false, 'https://www.ableton.com/', "Ableton Live"),
					new Skill(false, 'http://www.google.com/analytics/', 'Google Analytics'),
					new Skill(false, 'http://www.axure.com/', 'Axure'),

					new Skill(true, '', 'Platforms'),
					new Skill(false, 'http://developer.android.com/index.html', 'Android'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Web_development', 'Web'),
					new Skill(false, 'http://msdn.microsoft.com/en-us/windows/apps/br229512.aspx', 'Windows 8'),
					new Skill(false, 'http://msdn.microsoft.com/en-us/library/windowsphone/develop/ff402535(v=vs.105).aspx', 'Windows Phone'),

					new Skill(true, '', 'Strategies'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Agile_software_development', 'Agile'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Model_View_ViewModel', 'MVVM'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller', 'MVC'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Inversion_of_control', 'IoC'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Don\'t_repeat_yourself', 'DRY'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Representational_state_transfer', 'REST'),
					new Skill(false, 'http://blogs.msdn.com/b/seliot/archive/2011/06/07/testing-in-production-tip-it-really-happens-and-that-s-a-good-thing.aspx', 'TiP'),
					
					new Skill(true, '', 'Technologies'),
					new Skill(false, 'http://en.wikipedia.org/wiki/HTML5', 'HTML5/CSS3'),
					new Skill(false, 'http://getbootstrap.com/', 'Bootstrap'),
					new Skill(false, 'http://sass-lang.com/', 'Sass'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Extensible_Application_Markup_Language', 'XAML'),
					new Skill(false, 'http://en.wikipedia.org/wiki/PHP', 'PHP'),
					new Skill(false, 'http://en.wikipedia.org/wiki/SQL', 'SQL'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Windows_Azure', 'Azure'),
					new Skill(false, 'http://en.wikipedia.org/wiki/ASP.NET', 'ASP.NET'),
					new Skill(false, 'http://en.wikipedia.org/wiki/C_Sharp_(programming_language)', 'C#'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Java_(programming_language)', 'Java'),
					new Skill(false, 'http://en.wikipedia.org/wiki/C++', 'C++'),
					
					new Skill(true, '', 'IDEs &amp; more'),
					new Skill(false, 'http://www.visualstudio.com/', 'Visual Studio'),
					new Skill(false, 'http://en.wikipedia.org/wiki/Android_Studio', 'Android Studio'),
					new Skill(false, 'https://www.eclipse.org/', 'Eclipse'),
					new Skill(false, 'https://unity3d.com/', 'Unity3D'),
					new Skill(false, 'http://bower.io/', "Bower"),
					new Skill(false, 'http://www.git-tower.com/blog/git-cheat-sheet/', 'Git'),
					new Skill(false, 'https://www.nuget.org/packages/sortingobservablecollection/', 'NuGet')
				);
			?>
			<ul class="list-unstyled">
				<?php
					for ($i = 0; $i < count($skills); $i++) {
						if ($skills[$i]->IsHeader) {
							if ($i > 0) {
								echo '</div>';
							}
							/*if (($i % 2) == 0) {
								if ($i > 0) {
									echo '</div>';
								}
								echo '<div class="visible-xs row">';
							}*/
							echo '<div class="col-xs-6 col-sm-2">';
						}

						$skills[$i]->EchoListItem();
					}

					echo '</div>'; // close the last div
				?>
			</ul>
		</div>
	</section>
</div>
<div id="contact" class="section-custom-light section-custom-last">
	<section class="container">
		<div class="row">
			<div class="col-md-12 section-hook">
				<h1>
	            	<small>Contact</small>
	            	Get in Touch
	            </h1>
			</div>
		</div>
		<div class="row">
			<div id="contact-buttons" class="col-md-4 col-md-push-4">
				<a class="btn btn-default" href="http://www.quora.com/Weston-Thayer">
					<img class="btn-icon btn-icon-16" src="/images/quora-16px.png"/> Quora
				</a>
				<a class="btn btn-default" href="mailto:me@westonthayer.com"><span class="glyphicon glyphicon-envelope"></span> Email</a>
				<a class="btn btn-default" href="http://www.linkedin.com/profile/view?id=331065898" target="_blank">
					<img class="btn-icon btn-icon-16" src="/images/InBug-16px.png"/> LinkedIn
				</a>
			</div>
		</div>
		<div class="row">
			<div id="feather-big">
				<?php include('images/feather.svg') ?>
			</div>
		</div>
	</section>
</div>
<?php require_once('footer.php'); ?>