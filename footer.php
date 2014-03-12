			<div id="footer" class="section-custom-dark">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-push-4">
							<p>&copy; Weston Thayer 2014</p>
							<p>Built with Bootstrap, Sass, and PHP</p>
						</div>
						<div class="col-md-4 col-md-push-4">
							<?php
								$filename = $_SERVER['SCRIPT_FILENAME'];
								if (file_exists($filename)) {
									echo "<p>Last modified: " . date ("F d Y", filemtime($filename)) . "</p>";
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end content -->

		<!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <script src="../../dist/js/bootstrap.min.js"></script>

	    <script type="text/javascript" src="js/prototype.js"></script>
		<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
		<script type="text/javascript" src="js/lightbox.js"></script>
	</body>
</html>