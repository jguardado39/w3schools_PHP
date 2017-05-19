<!-- Basic PHP Syntax -->

<!DOCTYPE html>
<html>
	<body>
	<h1>My first PHP page</h1>

	<?php
		echo "Hello World!";
	?>
	</body>
</html>


<!-- Comments in PHP -->

<!DOCTYPE html>
<html>
	<body>
		<? php
		// This is a single-line comment

		# This is also a single-line comment

		/*
		This is a multiple-lines comment block
		that spans over multiple lines
		*/

		// You can also use comment to leave out parts of a code line

		$x = 5 /* + 15 */ + 5; // 10
		?>
	</body>
</html>


<!-- PHP Case Sensitivity -->
<!-- In PHP, all keywords, calsses, functions, and user-defined function are NOT case-sensitive. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			ECHO "Hello World!<br>"; // Hello World!
			echo "Hello World!<br>"; // Hello World!
			EcHo "Hello World!<br>"; // Hello World!
		?>
	</body>
</html>

<!-- However; all variables names are case-sensitive. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$color = "red";
			echo "My car is " . $color . "<br>"; // My car is red
			echo "My house is " . $COLOR . "<br>"; // My house is
			echo "My boat is " . $coLOR . "<br>"; // My boat is
		?>
	</body>
</html>