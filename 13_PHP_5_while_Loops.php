<!-- PHP while loops execute a block of code while the specified condition is true. -->


<!-- The PHP while Loop -->
<!-- The while loop executes a block of code as long as the specified condition is true. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$x = 1;

			while ($x <= 5) {
				echo "The number is $x <br>";
				$x++;
			}
		?>
	</body>
</html>


<!-- The PHP do...while Loop -->
<!-- The do...while will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$x = 1;

			do {
				echo "The number is: $x <br>";
				$x++;
			} while ($x <= 5);
		?>
	</body>
</html>

<!DOCTYPE html>
<html>
	<body>
		<? php
			$x = 6;

			do {
				echo "The number is: $x <br>"; // The number is: 6
				$x++;
			} while ($x <= 5);
		?>
	</body>
</html>