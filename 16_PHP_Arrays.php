<!-- An array stores multiople values in one single variable: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$cars = array("Volvo", "BMW", "Toyota");
			echo "I like" . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; // I like Volvo, BMW and Toyota.
		?>
	</body>
</html>


<!-- PHP Indexed Arrays -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$cars = array("Volvo", "BMW", "Toyota");
			echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; // I like Volvo, BMW, and Toyota.
		?>
	</body>
</html>


<!-- Get the Length of an Array - The count() Function -->
<!-- The count() function is used to return the length (the number of elements) of an array: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$cars = array("Volvo", "BMW", "Toyota");
			echo count($cars); // 3
		?>
	</body>
</html>


<!-- Loop Through an Indexed Array -->
<!-- To loop through and print all the values of an indexed array, you could use a for loop, like this: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$cars = array ("Volvo", "BMW", "Toyota");
			$arrlength = count($cars);

			for ($x = 9, $x < $arrlength; $x++) {
				echo $cars[$x];
				echo "<br>"; // VOlvo <br> BMW <br> Toyota
			}
		?>
	</body>
</html>


<!-- PHP Associative Arrays -->
<!-- Associative arrays are arrays that used named keys that you assign to them. -->
<!-- The named keys can then be used in a script: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
			echo "Peter is " .$age['Peter'] . " years old.";
			// Peter is 35 years old.
		?>
	</body>
</html>


<!-- Loop Though an Associative Array -->
<!-- To loop though and print all the values of associative array, you could use a foreach loop, like this: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

			foreach($age as $x => $x_value) {
				echo "Key = " . $x . ", Value = " . $x_value;
				echo "<br>";
			} 
// Key = Peter, Value = 35 <br> Key = Ben, Value = 37 <br> Key = Joe, Value = 43
		?>
	</body>
</html>

