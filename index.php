<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$x = "forms";
		if($x == "form") {
			?>
				<form action="">
					<label for="">Text</label>
					<input type="text">

					<label for="">Text</label>

					<input type="text">
					<label for="">Text</label>

					<input type="text">
				</form>
			<?php
		}else{
			?>
				<table>
					<thead>
						<tr>
							<th>1</th>
							<th>3</th>
							<th>5</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>a</td>
							<td>b</td>
							<td>c</td>
						</tr>
						<tr>
							<td>a</td>
							<td>b</td>
							<td>c</td>
						</tr>
					</tbody>
				</table>
			<?php
		}

	?>

</body>
</html>