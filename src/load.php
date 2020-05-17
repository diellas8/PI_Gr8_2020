<?php
	require_once("php/mysql_conncect.php");
	$sql = "SELECT * FROM user_data";
	$result = $connection->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
            <td><?=$row['name'];?></td>
            <td><?=$row['lastname'];?></td>
			<td><?=$row['email'];?></td>
			<td><?=$row['phone'];?></td>
            <td><?=$row['city'];?></td>
		</tr>
<?php	
	}
	}
	else {
		echo "Nuk eshte gjetur asnje rezultat!";
	}
	mysqli_close($connection);
?>
 