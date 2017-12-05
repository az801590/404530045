<?php
	$data=array
	(
		array("Volvo",22,18),
		array("BWM",15,13),
		array("Saab",5,2),
		array("Land Rover",17,15)
	);
?>
<html>
	<head>
		<title>20171120</title>
		<style>
			table
			{
				border-collapse:collapse;
			}
			table,th,td
			{
				border:1px solid lightgray;
				font-size:20px;
				text-align:center;
			}
			td,th
			{
				width:100px;
				padding :10px;
			}
		</style>
	</head>

	<body>
		<table>
			<tr>
				<th>Name</th>
				<th>Stock</th>
				<th>Sold</th>
			</tr>
			<?php
				for($i=0;$i<4;$i++)
				{
					echo "<tr>";
					for($j=0;$j<3;$j++)
					{
						echo "<td>".$data[$i][$j]."</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
		<br>
		<table>
			<tr>
				<th>Name</th>
				<th>Stock</th>
				<th>Sold</th>
			</tr>
			<?php
				foreach($data as $value)
				{
					echo "<tr>";
					foreach($value as $key)
					{
						echo "<td>".$key."</td>";
					}
					echo "</tr>";
				}
			?>
		</table>
		<br>
		<table>
			<tr>
				<th>Name</th>
				<th>Stock</th>
				<th>Sold</th>
			</tr>
			<?php
				function innerTable($value)
				{
					$string="<tr><td>";
					$string.=$value[0]."</td><td>";
					$string.=$value[1]."</td><td>";
					$string.=$value[2]."</td></tr>";
					echo $string;
				}

				array_map("innerTable", $data);
			?>
		</table>
	</body>
</html>
