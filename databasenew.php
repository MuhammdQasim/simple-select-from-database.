<?php 
require_once("config.php");
class databasenew{

private $host=DB_HOST;
private $user=DB_USER;
private $pas=DB_PWD;
private $name=DB_NAME;

private $connection;
private $error;
private $stmt;
private $isconnect=false;

public function __construct(){
$dsn= 'mysql:host='.$this->host .';dbname=' .$this->name;
$options= array(PDO::ATTR_PERSISTENT =>true ,
PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );
try {
	$this->connection=new PDO($dsn,$this->user,$this->pas,$options);
	$this->isconnect=true;
} catch (PDOException $e) {
	return $this->error=$e->getMessage().PHP_EOL;
}

}
public function isConnsected(){
	return $this->isconnect;
  echo"is connected";
}
public function geterror(){
	return $this->error;
}
public function getquery($query1){
$this->stmt=$this->connection->prepare($query1);
 $this->stmt->execute();
}

public function getresult(){
$this->stmt->fetchALL(PDO::FETCH_COLUMN);
}
public function oneresult(){
	$this->stmt->fetch(PDO::FETCH_COLUMN);
}
public function getrow(){
return $this->stmt->rowCount();
}
#public function bind($param,$value,$type=null){
#if(is_null($type)
#{
##	switch($a) {
#		case is_int($value):
#			$type=PDO::PARAM_INT;
#			break;
		
#		default:
#			echo "it is int";
#			break;
#	}
#}
#$this->stmt->bindValue($param,$value,$type);
}
 ?>