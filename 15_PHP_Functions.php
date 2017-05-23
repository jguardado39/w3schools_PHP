<!-- The real power of PHP comes from its function; it has more than 1000 built-in functions. -->


<!-- Create a User Defined Function in PHP -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			function writeMsg() {
				echo "Hello world!";
			}

			writeMsg(); // Hello world!
		?>
	</body>
</html>


<!-- PHP Function Arguments -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			function familyName($fname) {
				echo "$fname Refsnes.<br>";
			}

			familyName("Jani");    // Jani Refsnes.
			familyName("Hege");    // Hege Refsnes.
			familyName("Stale");   // Stale Refsnes.
			familyName("Kai Jim"); // Kai Jim Refsnes.
			familyName("Borge");   // Borge Refsnes.
		?>
	</body>
</html>

<!-- The following example has a function with two arguments -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			function familyName($fname, $year) {
				echo "$fname Refsnes. Born in $year <br>";
			}

			familyName("Hege","1975");     // Hege Refsnes. Born in 1975
			familyName("Stale", "1978");   // Stale Refsnes. Born in 1978
			familyName("Kai Jim", "1983"); // Kai Jim Refsnes. Born in 1983
		?>
	</body>
</html>


<!-- PHP Defalut Argument Value -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			function setHeight($minheight = 50) {
				echo "The height is : $minheight <br>";
			}

			setHeight(350); // The height is: 350
			setHeight();    // The height is: 50
			setHeight(135); // The height is: 135
			setHeight(80);  // The height is: 80
		?>
	</body>
</html>


<!-- PHP Function - Returning values -->
<!-- To let a function return a value, use the return statement: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			function sum($x, $y) {
				$z = $x + $y;
				return $z;
			}
			echo "5 + 10 = " . sum(5,10) . "<br>"; // 5 + 10 = 15
			echo "7 + 13 = " . sum(7,13) . "<br>"; // 7 + 13 = 20
			echo "2 + 4 = " . sum(2,4) . "<br>";   // 2 + 4 = 6
		?>
	</body>
</html>