<!-- PHP for loops execute a block of code a specified number of times. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			for ($x = 0; $x <= 10; $x++) {
				echo "The number is: $x <br>";
			}
		?>
	</body>
</html>


<!-- The PHP foreach Loop -->
<!-- The foreach loop works only on arrays, and it used to loop through each key/value pair in an array. -->
<!-- For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moed by one, until it reaches the last array element. -->

<!DOCTYPE html>
<html>
	<body>
	<? php
		$colors = array("red", "green", "blue", "yellow");

		foreach ($colors as $value) {
			echo "$value <br>"; // red <br> green <br> blue <br> yellow
		}
	?>
	</body>
</html>