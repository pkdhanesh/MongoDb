<?php
$connection = new Mongo();
$database= $connection->selectDB('student');
$collection = $database->selectCollection('regn');
$cursor = $collection->find(array());
?>


<!DOCTYPE html >
<html >
<head>
<title>Contact Form</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body{
	background-image: url("bg4.jpg");
font: black  }
</style>
<p><h3>&nbsp;&nbsp;Submitted Informations</h3></p>&nbsp;&nbsp;
<td><a href=form.php?id=<?php echo $article['_id'];?>" class="btn btn-default">Home</a></td>
<ol>

<div class="container-fluid">
<?php while($cursor->hasNext()):
$article= $cursor->getNext();?>
<div class="col-md-4">


Name       :<?php echo $article['name'];?><br>
Gender     :<?php echo $article["gender"]?><br>
Age        :<?php echo $article["age"]?><br>
DOB        :<?php echo $article["DOB"]?><br>
Address    :<?php echo $article["Address"]?><br>
EmailId    :<?php echo $article["email"]?><br>
District   :<?php echo $article["district"]?><br>
Phoneno    :<?php echo $article["phoneno"]?><br>
Class X    :<?php echo $article["classX"]?><br>
Class XII  :<?php echo $article["classXII"]?><br>
Graduation :<?php echo $article["Graduation"]?><br>
Course     :<?php echo $article["course"]?><br>
<br>
<a href="delete.php?id=<?php echo $article['_id'];?>" class="btn btn-danger">Delete</a>
<a href="update.php?id=<?php echo $article['_id'];?>" class="btn btn-warning">Update</a>
</div>
 
<?php endwhile;?>
</div>

</body>
</html>

