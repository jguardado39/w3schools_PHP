<!-- Creating (Declaring) PHP Variables -->
<!-- In PHP, a variable starts with the $ sign, followed by the nam of the variable: -->

<!DOCTYPE html>
<html>
	<body>
	<? php
		$txt = "Hello world!";
		$x = 5;
		$y = 10.5;

		echo $txt;
		echo "<br>";
		echo $x;
		echo "<br>";
		echo $y;
	?>
	</body>
</html>


<!-- Output Variables -->
<!-- The PHP echo statement is often used to output data to the screen. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$txt = "W3Schools.com";
			echo "I love $txt!";
		?>
	</body>
</html>

<!-- The following example will produce the same output as the example above: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$txt = "W3Schools.com";
			echo "I love ". $txt . "!";
		?>
	</body>
</html>

<!-- The following example will output the sum of two variables: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$x = 5;
			$y = 4;
			echo $x + $y;
		?>
	</body>
</html>


<!-- Global and Local Scope -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$x = 5; //global scope

			function myTest() {
				// using x inside this function will generate an error
				echo "<p> Variable x inside function is: $x<p>";
			}
			myTest();

			echo "<p>Variable x outisde function is: $x<p>";
		?>
	</body>
</html>

<!-- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			function myTest_1() {
				$x = 5; // local scope
				echo "<p>Variable x inside function is: $x<p>";
			}
			myTest_1();

			// using x outside the function will generate an error
			echo "<p>Variable x outside funciton is: $x<p>";
		?>
	</body>
</html>


<!-- PHP The global Keyword -->
<!-- The global keyword is used to access a global variable from within a function. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$x = 5;
			$y = 10;

			function myTest_2() {
				global $x, $y;
				$y = $x + $y;
			}

			myTest_2();  // run function
			echo $y;     // output the new value for variable $y
		?>
	</body>
</html>

<!DOCTYPE html>
<html>
	<body>
		<? php
			$x = 5;
			$y = 10;

			function myTest_3() {
				$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
			}
			myTest_3();
			echo $y;
		?>
	</body>
</html>


<!-- PHP The static Keyword -->
<!-- When local vairables need NOT to be deleted. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			function myTest_4() {
				static $x = 0;
				echo $x;
				$x++;
			}

			myTest_4();
			echo "<br>";
			myTest_4();
			echo "<br>";
			myTest_4();
		?>
	</body>
</html>

