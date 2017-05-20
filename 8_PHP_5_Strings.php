<!-- Get The Length of a String -->
<!-- The PHP strlen() function returns the length of a string. -->

<!DOCTYPE html>
<html>
	<body>
		<? php 
			echo strlen("Hello world!"); // outputs 12
		?>
	</body>
</html>


<!-- Count The Number of Words in a String -->
<!-- The PHP str_word_count() function counts the number of words in a string: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			echo str_word_count("Hello world!"); // outputs 2
		?>
	</body>
</html>


<!-- Reverse a String -->
<!-- The PHP strrev() function reverses a string: -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			echo strrev("Hello world!"); //outputs !dlrow olleH
		?>
	</body>
</html>


<!-- Search For a Specific Text Within a String -->
<!-- The PHP strpos() function searches for a specific text within a string -->
<!-- If match is found, the function returns the character position of the first match. If no match is found, it will return FALSE. -->


<!DOCTYPE html>
<html>
	<body>
		<? php 
			echo strpos("Hello world!", "world"); // output 6
		?>
	</body>
</html>


<!-- Replace Text Within a String -->
<!-- The PHP str_replace() function replaces some characters with some other characters in a string. -->

<!DOCTYPE html>
<html>
	<body>
		<? php
			echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
		?>
	</body>
</html>


<!--  -->