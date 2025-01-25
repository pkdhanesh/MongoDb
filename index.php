<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM student ORDER BY id ASC");
?>
<html>
<head>
<title>Homepage</title>
</head>
<body>
<a href="add.html">Add New Data</a><br/><br/><table width='80%' border=0>
<tr bgcolor='#CCCCCC'>
<td>ID</td>
<td>Name</td>
<td>Gender</td>
<td>Mark1</td>
<td>Mark2</td><td>Mark3</td>
</tr>
<?php
while($res = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$res['id']."</td>";
echo "<td>".$res['name']."</td>";
echo "<td>".$res['gender']."</td>";
echo "<td>".$res['mark1']."</td>";
echo "<td>".$res['mark2']."</td>";
echo "<td>".$res['mark3']."</td>";
echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\"
onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
}
?>
</table>
</body>
</html>
