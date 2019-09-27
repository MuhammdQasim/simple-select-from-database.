<?php
require_once('databaseff.php');
try{
	$database = new databaseff();
    $db = $database->openConnection();
    $sty="DELETE FROM student WHERE ID=5534";
    $db->exec($sty);
}
catch(PDOException $e){
	echo "Data has been deleted successfully".$e->getMessage();
}

  ?>