<?php
	// add lesson code
	try{
		$conn = new PDO('mysql:host=localhost;dbname=finalproject','root','mysql');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo "Connection failed: ", $e->getMessage();
	}




	// database class for when user is creating / editing users and objects
	class Planet{
		private $servername = "localhost";
		private $username = "root";
		private $password = "mysql";
		private $database = "finalproject";
		public $conn;
		// create our connection
		public function __construct(){
		  $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
		  if(mysqli_connect_error()){
			trigger_error("Failed to connect to the database: ". mysqli_connect_error());
		  }
		  else {
			return $this->conn;
		  }
	
	
		}
	
		// Insert customer data into customer table
		public function insertData($POST){
		  $objname = $this->conn->real_escape_string($_POST['objname']);
		  $objtype = $this->conn->real_escape_string($_POST['objtype']);
		  $objusername = $this->conn->real_escape_string($_SESSION['username']);
		  $info = $this->conn->real_escape_string($_POST['info']);
		  $query = "INSERT INTO spaceobjects(objname, objtype, username, info) VALUES('$objname','$objtype','$objusername','$info')";
		  $objsql = $this->conn->query($query);
	
		  if($objsql == true){
			header("Location:./catalogue.php");
		  }
		  else {
			echo "could not add record";
		  }
		  
		}
	
	
		// Fetch customer records for show listing
		public function displayData(){
		  $query = "SELECT * FROM spaceobjects";
		  $result = $this->conn->query($query);
		  if($result->num_rows > 1){
			$data[] = array();
	
			while($row = $result->fetch_assoc()){
			  $data[] = $row;
			}
			return $data;
	
		  }
		  else{
			echo "no records found";
		  }
	
		}
	
	
	
		// Fetch single data for edit from customer table
		public function displayRecordById($id){
		  $query = "SELECT * FROM spaceobjects WHERE ID = '$id'";
		  $result = $this->conn->query($query);
		  if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			return $row;
		  }
		  else{
			echo "record not found";
		  }
		}
	
	
		// Update customer data into customer table
		public function updateRecord($postData){
			$objname = $this->conn->real_escape_string($_POST['newname']);
			$objtype = $this->conn->real_escape_string($_POST['newtype']);
			$info = $this->conn->real_escape_string($_POST['newinfo']);
			$id = $this->conn->real_escape_string($_POST['ID']);
			
	
		  if(!empty($id) && !empty($postData)){
			$query = "UPDATE spaceobjects SET objname = '$name', objtype = '$objtype', info = '$info' WHERE ID = '$id'";
			$sql = $this->conn->query($query);
			
			if($sql == true){
			  header("Location:./catalogue.php");
			}
			else{
			  echo "could not update record";
			}
		  }
	
		}
	
	
	
	  }








?>