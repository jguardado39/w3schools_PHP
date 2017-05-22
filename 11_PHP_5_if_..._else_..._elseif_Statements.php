<!-- PHP - The if Statement -->
<!-- The if statement executes some cod  if one condition is true -->


<!DOCTYPE html>
<html>
	<body>
		<? php 
			$t = date("H");

			if ($t < "20") {
				echo "Have a good day!";
			}
		?>
	</body>
</html>


<!-- PHP - THe if...else Statement -->
<!-- The if...else statement executes some code if a condition is true and another code if that codition is false -->

<!DOCTYPE html>
<html>
	<body>
		<? php 
			$t = date("H");

			if ($t < "20") {
				echo "Have a good day!";
			} else {
				echo "Have a good night!";
			}
		?>
	</body>
</html>


<!-- PHP - The if...elseif...else Statement -->
<!-- The if...elseif...else statement executes different codes for more than two conditions. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$t = date("H");
			echo "<p>The hour (of the server) is " . $t;
			echo ", and will give the following messagte:</p>";

			if ($t < "10") {
				echo "Have a good moring!";
			} elseif ($t < "20") {
				echo "Have a good day!";
			} else {
				echo "Have a good night!";
			}
		?>
	</body>
</html>