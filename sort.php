

<?php 

	$us = array(
		'New Youk' => ['NY', 8175133],
		'Los Angeles' => ['CA', 3792621],
		'Chicago' => ['IL', 2695598],
		'Houston' => ['TX', 2100263],
		'Philadelphia' => ['PA', 1526006],
		'Phoenix' => ['AZ', 1445632],
		'San Antonio' => ['TX', 1327407],
		'San Diego' => ['CA', 1307402],
		'Dallas' => ['TX', 1197816],
		'San Jose' => ['CA', 945942],
	);
	
	
 ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="20" style="margin: 0 auto;">
		<thead>
			<th>City</th>
			<th>location</th>
			<th>Population</th>
		</thead>
		<tbody>
			<?php 
			ksort($us);
			// arsort($us);
			foreach ($us as $x => $x_value) {
	    		echo "<tr><td>".$x."</td><td>".$x_value[0]."</td><td>".$x_value[1]."</td></tr>";
			} ?>
		</tbody>
		<tfoot>
			<?php 
				$x = 0;
				foreach ($us as $y => $y_value) {
				    $x+=$y_value[1];
				}
				echo "<tr><td colspan='2'>Total Population</td><td>".$x."</td></tr>";
			 ?>
		</tfoot>
	</table>
</body>
</html>



















