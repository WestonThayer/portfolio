<?php require_once('header.php'); ?>
<div class="section-custom-light">
	<section class="container">
	    <div class="row">
	    	<div class="col-md-3">
	        	<img class="img-circle" src="/images/me.jpg" width="200" height="200" />
	        </div>
	        <div class="col-md-9 section-hook">
	            <h1>
	            	<small>Hello,</small>
	            	I'm Weston
	            </h1>
	            <h4>My passion is <strong>crafting</strong> virtual and physical tools to enable new possibilities and innovations.</h4>
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
				new ProjectBox('/projects/ar/', '/images/ar_feature.jpg', 'Augmented Reality with Unity3D'),
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
<div class="section-custom-light">
	<section id="skills" class="container">
		<div class="row">
			<div class="col-md-12 section-hook">
				<h1>
	            	<small>Skills</small>
	            	What I'm Good At
	            </h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h3>Design</h3>
				<p>
					I care deeply about how to craft high quality products that are intuitive to use.
					This has led me to enjoy studying and using a variety of design and software
					methodologies. To name a few, lately I've been practicing UCD, Agile, MVVM,
					and data-driven design.
				</p>
			</div>
			<div class="col-md-6">
				<h3>Development</h3>
				<p>
					I care deeply about how to craft high quality products that are intuitive to use.
					This has led me to enjoy studying and using a variety of design and software
					methodologies. To name a few, lately I've been practicing UCD, Agile, MVVM,
					and data-driven design.
				</p>
			</div>
		</div>
		<div class="row">
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
		</div>
	</section>
</div>
<?php require_once('footer.php'); ?>