<!DOCTYPE html>
<html>
<head>
	<title>ralign_pyramid</title>
</head>
<body>
	<form method="post">
		<input type="text" name="number" value="" placeholder="Enter number"/>
		<input type="submit" name="submit" value="Submit"/> </td>
	</form>
	<br>
	<?php
		if (isset($_POST['submit'])) {
			function pyramid($n)
			{
				$n = $_POST['number'];
				for($i = 0; $i < $n; $i++) {
			        for($j = 1; $j < $n - $i; $j++) {
			            echo "&nbsp;&nbsp;";
			        }
			        for($k = 0; $k <= $i; $k++) {
			            echo "*";
			        }
			        echo "<br>";
			    }
			}
			pyramid($n);
		}
	?>
</body>
</html>