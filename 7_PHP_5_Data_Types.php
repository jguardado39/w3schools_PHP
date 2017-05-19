<!-- PHP String -->

<!DOCTYPE html>
<html>
	<body>
		<? php 
			$x = "Hello world!";
			$y = 'Hello world!';

			echo $x;
			echo "<br>";
			echo $y;
		?>
	</body>
</html>


<!-- PHP Integer -->

<!DOCTYPE html>
<html>
	<body>
		<? php 
			$x = 5985;
			var_dump($x);
		?>
	</body>
</html>


<!-- PHP Float -->

<!DOCTYPE html>
<html>
	<body>
		<? php 
			$x = 10.365;
			var_dump($x);
		?>
	</body>
</html>


<!-- PHP Boolean -->
<!-- A Boolean represents two possible states: TRUE or FALSE. -->


<!-- PHP Array -->
<!-- An array stores multiple values in one single variable. -->

<!DOCTYPE html>
<html>
	<body>
		<? php 
			$cars = array("Volvo", "BMW", "Toyota");
			var_dump($cars);
		?>
	</body>
</html>


<!-- PHP Object -->
<!-- An object is a data type which stores data and information on how to process that data. -->

<!DOCTYPE html>
<html>
	<body>
		<? php 
			class Car {
				function Car() {
					$this->model = "VW";
				}
			}
			// create an object
			$herbie = new Car();

			// show object properties
			echo $herbie->model;
		?>
	</body>
</html>


<!-- PHP NULL Value -->
<!-- Null is a special data type which can have only one value: NULL -->
<!-- A variable of data type NULL is a variable that has no value assigned to it. -->

<!DOCTYPE html>
<html>
	<body>
		<? php 
			$x = "Hello world!";
			$x = null;
			var_dump($x);
		?>
	</body>
</html>
