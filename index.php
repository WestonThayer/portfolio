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
			}

			$projects = array
			(
				new ProjectBox("/projects/ringpack/", "/images/avoice/1.png", "RingPack for Android"),
				new ProjectBox("/projects/avoice/", "/images/avoice/1.png", "aVoice for Windows 8"),
				new ProjectBox("/projects/ar/", "/images/avoice/1.png", "Augmented Reality with Unity3D"),
				new ProjectBox("/projects/androidj/", "/images/avoice/1.png", "AndroiDJ Concept"),
				new ProjectBox("/projects/india/", "/images/avoice/1.png", "laXmi for Android"),
				new ProjectBox("/projects/cole/", "/images/avoice/1.png", "Wedding in Flash"),
				new ProjectBox("/projects/cryclops/", "/images/avoice/1.png", "cryclops.com"),
				new ProjectBox("/projects/vertigo/", "/images/avoice/1.png", "2D Platformer in Java"),
				new ProjectBox("/projects/kiteboard/", "/images/avoice/1.png", "Kiteboard"),
				new ProjectBox("/projects/surfboard/", "/images/avoice/1.png", "Surfboard")
			);

			function echoGalleryBox($columnClass, $link, $image, $caption) {
				echo '<div class="' . $columnClass . ' gallery-box">
				          <a href="' . $link . '">
				              <div class="img-overlay">
				                  <img src="' . $image . '" />
				                  <div class="caption"
				                      <p>' . $caption . '</p>
				                  </div>
				              </div>
				          </a>
				      </div>';
			}

			$index = 0;

			for ($row = 0; $row < 3; $row++) { ?>
				<div class="row gallery" <?php if ($row == 0) { echo 'id="row-gallery-1"'; } ?>>
					<?php
						if ($index == 0) {
							echoGalleryBox("col-md-6", $projects[$index]->Link, $projects[$index]->Image, $projects[$index]->Caption);
							$index++;
						}

						for ($i = 0; $index < count($projects) && $i < 4; $i++) {
							echoGalleryBox("col-md-3", $projects[$index]->Link, $projects[$index]->Image, $projects[$index]->Caption);
							$index++;
						}
					?>
				</div>
			<?php	} ?>
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
	</section>
</div>
<?php require_once('footer.php'); ?>