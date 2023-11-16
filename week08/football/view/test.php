<?php
include("./connection.php");

$stmt = $conn->prepare("SELECT id, title, description FROM newsitems");
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TEST</title>
</head>
<body>
	<p> Hello world! </p>

	<table border="0" align="center">
		<tr>
			<th width="75">ID</th>
			<th width="255">TITLE</th>
			<th width="255">DESCRIPTION</th>
		</tr>

	<?php
	while ($a_row = $result->fetch_assoc())  ?>
	<tr>
		<td><?php echo $a_row['id']; ?></td>
		<td><?php echo $a_row['title']; ?></td>
		<td><?php echo $a_row['description']; ?></td>
</tr>
</table>
</body>
</html>