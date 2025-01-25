<?php
$id = $_GET['id'];
try{
$connection = new Mongo();
$collection = $connection->student->regn;
} catch (MongoConnectionException $e) {
die('Failed to connect to MongoDB '.$e->getMessage());
}
$collection->remove(array('_id' => new MongoId($id)));
echo "Successfully Deleted";
?>
<!DOCTYPE html> 
<html > 
<head> 
</head> 
<body  bgcolor="orange"> 
<p>
<a href="form.php">Home</a> 
</p>
</body> 
</html>
