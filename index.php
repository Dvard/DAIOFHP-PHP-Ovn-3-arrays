<?php
$code = array('python', 'java', 'javascript', 'php');

$data = array(
	array('Bulla', 1.50, 10),
	array('Kaka', 5.00, 4),
	array('Pirog', 2.50, 12),
);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP Övning - 3</title>
	</head>
	<body>
		<!-- 1 & 2 -->
		<ul> <?php foreach ($code as $item) {?>
				<li><?php echo $item ?></li>
			<?php } ?>
		</ul>
		<!-- 3 (a) -->
		<table>
			<tr>
				<th>Bakelse</th>
				<th>Pris</th>
				<th>Antal</th>
			</tr>
            <?php foreach ($data as $element) {?>
				<tr>
					<?php foreach ($element as $value ) {?>
						<td><?php echo $value?></td>
					<?php }?>
				</tr>
			<?php }?>
		</table>

		<!-- 3 (b) -->
		<p>Priset på bullar: <?php echo $data[0][1]?></p>
		<p>Antalet piroger: <?php echo $data[2][2]?></p>

		<!-- 3 (c) -->
		<p>Antalet olika bakelser: <?php echo count($data)?></p>

		<!-- 3 (d) -->
		<p>Totala antalet varor: <?php echo $data[0][2] + $data[1][2] + $data[0][3]?></p>
	</body>
</html>
