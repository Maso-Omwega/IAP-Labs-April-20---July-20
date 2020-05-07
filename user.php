<?php
	include "Crud.php";
	class User implements Crud{
		private $user_id;
		private $first_name;
		private $last_name;
		private $city_name;
		
		/*We can use the class constructor to initialize our values
		member variables cannot be instantiated from elsewhere; They are private*/
		function __construct($first_name,$last_name,$city_name){
			$this->first_name=$first_name;
			$this->last_name=$last_name;
			$this->city_name=$city_name;
		}
		//user_id setter
		public function setUserId($user_id){
			$this->user_id=$user_id;
		}
		//user_id getter
		public function getUserId($user_id){
			return $this->user_id;
		}
		/*Because we implemented the 'Crud' intertface, we have
		to define all the methods,otherwise we will run into an error
		For now, we only implement save () and readAll() functions,we
		will return nulls in the other faunctions in order to implement them*/
		public function save(){
			$fn=$this->first_name;
			$ln=$this->last_name;
			$city=$this->city_name;
			$conn=new DBConnector;
			$res=mysqli_query($conn->conn,"INSERT INTO user(first_name,last_name,user_city)VALUES('$fn','$ln','$city')")or die("Error " .mysql_error());
			return $res;
		}
		public function readAll(){
			return null;
		}
		public function readUnique(){
			return null;
		}
		public function search(){
			return null;
		}
		public function update(){
			return null;
		}
		public function removeOne(){
			return null;
		}
		public function removeAll(){
			return null;
		}
	}
?>