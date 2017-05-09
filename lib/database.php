<?php

class database{

public $host=DB_HOST;
public $user=DB_USER;
public $password=DB_PASS;
public $db_name=DB_NAME;	

public $conn;

public function __construct(){$this->connect();}

private function connect(){$this->conn= new mysqli($this->host, $this->user, $this->password, $this->db_name);}

public function select($query){ $result=$this->conn->query($query);
if($result->num_rows> 0)
{
 return $result;
}else{	return false;}
}
  
public function insert($query){
$insert=$this->conn->query($query);

if($insert){
	header("location: admin.php?insert=Post inserted...");
}else{
	echo"Post did not insert";
}

}
public function update($query){
$update=$this->conn->query($query);

if($update){
	header("location: admin.php?update=Post updated...");
}else{
	echo"Post did not update";
}

}
public function delete($query){
$delete=$this->conn->query($query);

if($delete){
	header("location: admin.php?delete=Post deleted...");
}else{
	echo"Post did not delete";
}

}



}
?>