<?php 
require_once('databasenew.php');
$db= new databasenew();
echo $db->isConnsected() ? "DB connected" .PHP_EOL:"DB Not connected".PHP_EOL;
$db->getquery("SELECT * FROM af");
$db->getresult();
var_dump($db->getresult());
echo "row=".$db->getrow();

 ?>