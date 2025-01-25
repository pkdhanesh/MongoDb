<?php 
$m= new MongoClient(); 
$std=$m->clg; 
$stud=$std->st; 
$document=array("name"=>"dhanesh","course"=>"MCA"); 
$stud->insert($document); 
print_r($document); 
?> 
