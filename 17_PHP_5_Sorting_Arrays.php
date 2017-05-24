<!-- The elements in an array can be soreted ini alphabetical or numerical order, descending or ascending -->


<!-- Sort Array in Ascending Order - sort() -->
<!-- The following example sorts the elements of the $cars array in ascending alpahbetical order: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$cars = array("Volvo", "BMW", "Toyota");
			sort($cars);

			$clength = count($cars);
			for ($x = 0, $x < $clength; $x++) {
				echo $cars[$x];
				echo "<br>";
			} // BMW <br> Toyota <br> Volvo
		?>
	</body>
</html>

<!-- The following example sorts the elements of the $number array in ascending numerical order: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$numbers = array(4,6,2,22,11);
			sort($numbers);

			$arrlength = count($numbers);
			for($x = 0; $x < $arrlength; $x++) {
				echo $numbers[$x];
				echo "<br>";
			} // 2 <br> 4 <br> 6 <br> 11 <br> 22
		?>
	</body>
</html>


<!-- Sort Array (Ascending Order), According to Value - asort() -->
<!-- The following example sorts an associative array in ascending order, according to the value: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
			asort($age);

			foreach($age as $x => $x_value) {
				echo "Key = " . $x . ", value = " . $x_value;
				echo "<br>";
// Key = Peter, Value = 35 <br> Key = Ben, Value = 37 <br> Key = Joe, Value = 43
			}
		?>
	</body>
</html>


<!-- Sort Array (Ascending Order), According to Key - ksort() -->
<!-- The following examples sorts an associative array in ascending order, according to the key: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
			ksort($age);

			foreach($age as $x => $x_value) {
				echo "Key = " . $x . ", Value = " . $x_value;
				echo "<br>";
// Key = Ben, Value = 37 <br> Key = Joe, Value = 43, <br> Key = Peter, Value = 35
			}
		?>	
	</body>
</html>


<!-- Sort Array (Descending Order), According to Value - arsort() -->
<!-- The following example sorts an associative array in descending order, according to the value: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
			arsort($age);

			foreach($age as $x => $x_value) {
				echo "$Key = " . $x . ", Value = " . $x_value;
				echo "<br>";
// Key = Joe, Value = 43 <br> Key = Ben, Value = 37 <br> Key = Peter, Value = 35
			}
		?>
	</body>
</html>


<!-- Sort Array (Descending Order), According to Key - krsort() -->
<!-- The following example sorts an associative array in descending order, according to the key:-->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
			krsort($age);

			foreach ($age as $x => $x_value) {
				echo "Key = " . $x . ", Value =" . $x_value;
				echo "<br>";
// Key = Peter, Value = 35 <br> Key = Joe, Value = 43 <br> Key = Ben, Value = 37
			}
		?>
	</body>
</html>