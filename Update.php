<?php
require_once('databaseff.php');
try{
	$database = new databaseff();
    $db = $database->openConnection();
    $str="UPDATE student SET name='qwer' WHERE ID=5534";
    $db->exec($str);
    echo "data has been updated ";
}
    catch(PDOException $e){
    	echo "not updated ".$e->getMessage();

    }

  ?>