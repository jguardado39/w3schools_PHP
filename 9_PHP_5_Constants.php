<!-- Create a PHP Constant -->
<!-- The example below creates a constant with a case-sensitive name: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			// case-sensitive constant name
			define("GREETING", "Welcome to W3Schools.com!"); // outputs Welcome to W3Schools.com!
			echo GREETING; 
		?>
	</body>
</html>

<!-- The example below creates a constant with a case-insensitive name: -->

<!DOCTYPE html>
<html>
	<body>
		<? php 
			// case-insensitive constant name
			define("GREETING", "Welcom to W3Schools.com!", true); // outputs Welcome to W3Schools.com!
			echo greeting;
		?>
	</body>
</html>


<!-- Constants are Global -->
<!-- Constants are automatically global and can be used across the entire script. -->

<!DOCTYPE html>
<html>
	<body>
		<? php 
			define("GREETING", "Welcome to W3Schools.com!");

			function myTest_1() {
				echo GREETING;
			}

			myTest_1();
		?>
	</body>
</html>