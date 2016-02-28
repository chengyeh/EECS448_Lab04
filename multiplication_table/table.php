<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<link href='style.css' rel='stylesheet' type='text/css'>";

function table(){
	
	echo "<table>";
		echo "<tr>";
		echo "<td></td>";
		for($i = 1; $i <= 100; $i++)
		{
			echo "<th>" . $i . "</th>";
		}
		echo "</tr>";
		
		for($row = 1; $row <= 100; $row++)
		{	
			echo "<tr>";
			echo "<th>" . $row . "</th>";
			for($col = 1; $col <= 100; $col++)
			{
				echo "<td>" . ($row * $col) . "</td>";
			}	
			echo "</tr>";
		}
	echo "</table>";

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab4 - Multiplication Table</title>
    </head>
    <body>
        <h1>Multiplication Table</h1>
        <?php table(); ?>
    </body>
</html>
