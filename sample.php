<?php
$connection = new MongoClient();
$collection = $connection->student->regn->find();
echo '<pre>';
foreach ( $collection as $current )
print_r($current);
echo '</pre>';
?>

