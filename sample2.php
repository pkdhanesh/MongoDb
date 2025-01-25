<?php
$m= new MongoClient();
$std=$m->clg;
$stud=$std->st;
$document=array("name"=>"anu","course"=>"MCA");
$stud->insert($document);
print_r($document);
?>
