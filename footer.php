		<div id="footer">
			<div id="text">
				<?php
					$filename = $_SERVER['SCRIPT_FILENAME'];
					if (file_exists($filename)) {
						echo "<p>Last modified: " . date ("F d Y", filemtime($filename)) . "</p>";
					}
				?>
				<p>&copy; Weston Thayer 2011</p>
			</div>
		</div>
	</body>
</html>