<?php
Class Connection {
private  $server = "mysql:host=localhost;dbname=muhmd_qasim";
private  $user = "root";
private  $pass = "";
private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
protected $con;
 
            public function openConnection()
             {
               try
                 {
          $this->con = new PDO($this->server, $this->user,$this->pass,$this->options);
          return $this->con;
                  }
               catch (PDOException $e)
                 {
                     echo "There is some problem in connection: " . $e->getMessage();
                 }
             }
public function closeConnection() {
     $this->con = null;
  }
}

try
{
    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * FROM data " ;
    foreach ($db->query($sql) as $row) {
    echo " ID: ".$row['Id'] . "<br>";
    echo " Name: ".$row['Name'] . "<br>";
    }
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
try
{
    $stmt=$db->prepare("INSERT INTO data(Id,name) values(:id,:name)");
      $stmt->execute(array(':id'=>555,':name'=>'wsdfre'));
      echo"data has been added successfully";
    }
      catch(PDOException $e){
        echo "there is some error".$e.getMessage();
      }
    $sql = "SELECT * FROM data " ;
    foreach ($db->query($sql) as $row) {
    echo " ID: ".$row['Id'] . "<br>";
    echo " Name: ".$row['Name'] . "<br>";
    }
?>
