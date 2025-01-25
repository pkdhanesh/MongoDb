<?php
$connection = new Mongo();
$database= $connection->selectDB('student');
$collection = $database->selectCollection('regn');
$cursor = $collection->find(array());
?>
<!DOCTYPE html>
<!DOCTYPE html >
<html >
<head>
<title>Contact Form</title>
</head>
<body bgcolor="yellow">

<p>Submitted Informations</p>
<td><a href=form.php>Home</a></td>
<ol>
<table>

<?php while($cursor->hasNext()):
$article= $cursor->getNext();?>
<tr>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>EmailId</th>
                    <th>District</th>
                    <th>Phoneno </th>
                    <th>Class X</th> 
                    <th>Class XII</th>
                    <th>Graduation</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                        <tr>
                                <td><?php echo $results->data[$i]['name']; ?></td>
                                <td><?php echo $results->data[$i]["gender"]; ?></td>
                                <td><?php echo $results->data[$i]["age"]; ?></td>
                                <td><?php echo $results->data[$i]["DOB"]; ?></td>
                                <td><?php echo $results->data[$i]["Address"]; ?></td>
                                <td><?php echo $results->data[$i]["email"]; ?></td>
                                <td><?php echo $results->data[$i]["district"]; ?></td>
                                <td><?php echo $results->data[$i]["phoneno"]; ?></td>
                                <td><?php echo $results->data[$i]["classX"]; ?></td>
                                <td><?php echo $results->data[$i]["classXII"]; ?></td>
                                <td><?php echo $results->data[$i]["Graduation"]; ?></td>
                                <td><?php echo $results->data[$i]["course"]; ?></td>
                        </tr>
<a href="delete.php?id=<?php echo $article['_id'];?>">Delete</a>
<a href="update.php?id=<?php echo $article['_id'];?>">Update</a>
                <?php endfor; ?>
            </tbody>
        </table>
        <?php echo $paginator->createLinks($links); ?> 
    </div>
</body>
</html>
