<?php

require_once('databaseff.php');
try{
	$database = new databaseff();
    $db = $database->openConnection();
	$st="CREATE TABLE `Student` ( `ID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , `name`VARCHAR(40) NOT NULL )";
	$db->exec($st);
	echo"Table has created";
}
	catch(PDOException $e){
		echo "some problem".$e->getMessage();
	}

$stmt=$db->prepare("INSERT INTO Student(ID,name) values(:id,:name)");
      $stmt->execute(array(':id'=>5534,':name'=>'wfrfsdfre'));
      echo"data has been added successfully";
  ?>