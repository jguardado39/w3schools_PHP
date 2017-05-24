<!-- PHP $GLOBALS -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			$x = 75;
			$y = 25;

			function addition() {
				$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
			}

			addition();
			echo $z;  // 100
		?>
	</body>
</html>

<!-- In the example above, since z is a variable present within the $GLOBALS array, it is also accessible from outside the function! -->


<!-- PHP $_SERVER -->
<!-- $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			echo $_SERVER['PHP_SELF'];
			echo "<br>";
			echo $_SERVER['SERVER_NAME'];
			echo "<br>";
			echo $_SERVER['HTTP_HOST'];
			echo "<br>";
			echo $_SERVER['HTTP_REFERER'];
			echo "<br>";
			echo $_SERVER['HTTP_USER_AGENT'];
			echo "<br>";
			echo $_SERVER['SCRIPT_NAME'];
		?>
	</body>
</html>


<!-- PHP $_REQUEST -->
<!-- PHP $_REQUEST is used to collect data after submitting an HTML form. -->

<!DOCTYPE html>
<html>
	<body>
		<form method = "post" action = "<? php echo $_SERVER['PHP_SELF'];?>">
			Name: <input type = "text" name = "fname">
			<input type = "submit">
		</form>

		<? php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				// collect value of input field
				$ name = htmlspecialchars($_REQUEST ['fname']);
					if (empty($name)) {
						echo "Name is empty";
					} else {
						echo $name;
					}
			}
		?>
	</body>
</html>


<!-- PHP $_POST -->


<!-- PHP $_GET -->

<!DOCTYPE html>
<html>
	<body>
		<a href = "test.get.php?subject=PHP&web=W3schools.com">Test$GET</a>
	</body>
</html>