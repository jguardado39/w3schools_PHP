<!-- PHP echo and print Statements -->
<!-- The differences are small: echo has not return value while proint has a return value of 1; echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is  marginally faster than print -->


<!-- The PHP echo Statement -->
<!-- The echo statement can be used with or without parentheses: echo or echo(): -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			echo "<h2>PHP is Fun!</h2>";
			echo "Hello world!<br>";
			echo "I'm about to learn PHP!<br>";
			echo "This ", "string ", "was ", "made ", "with multiople parameters.";
		?>
	</body>
</html>

<!-- Display Variables -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$txt1 = "Learn PHP";
			$txt2 = "W3Schools.com";
			$x = 5;
			$y = 4;

			echo "<h2>" . $txt1 . "</h2>";
			echo "Study PHP at " . $txt2 . "<br>";
			echo $x + $y;
		?>
	</body>
</html>


<!-- The PHP print Statement -->
<!-- The print statement can be used with or without parentheses: print or print() -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			print "<h2>PHP is Fun!</h2>";
			print "Hello world!<br>";
			print "I'm about to learn PHP!";
		?>
	</body>
</html>

<!-- The following examples show how to output text and variables with the print statement: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$txt1 = "Learn PHP";
			$txt2 = "W3Schools.com";
			$x = 5;
			$y = 4;

			print "<h2>" . $txt1 . "</h2>";
			print "Study PHP at " . $txt2 . "<br>";
			print $x + $y;
		?>
	</body>
</html>