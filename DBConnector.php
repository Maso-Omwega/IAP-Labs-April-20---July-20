<?php
	define('DB_SERVER','localhost');//we use the local machine
	define('DB_USER','root');//user is root
	define('DB_PASS','');//data has not been set
	define('DB_NAME','btc3205');//this is my database name
	
	class DBConnector{
		public $conn;
		/*We connect to our database inside our class constructor
		so we can always cause a database connection whenever an object is created.*/
		function __construct(){
			$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die ("Error:" .mysql_error());
			mysqli_select_db($this->conn,DB_NAME);
		}
		/*Once we are done with database reads,updates,deletes
		This public function does exactly that.*/
		public function closeDatabase(){
			mysqli_close($this->conn);
		}
	}
?>