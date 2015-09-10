<?php

require_once "config/DatabaseConfig.php";
/**
* Database connection object. Get data from portfolio database.
*
*/
class Database
{
    // property declaration   
	private $conn;
	private $conf;	
	
	/**
	* Constructor
	*/
	function __construct(){
		
				
		$this->conf = new DatabaseConfig();
		$this->conn = new mysqli($this->conf->getServerName(), $this->conf->getUserName(), $this->conf->getPassword(), $this->conf->getDatabaseName());
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		} 
		echo "Connected successfully";
	}
	
	/**
	* 
	*/
	public function getData($query){
		
		$result = $this->conn->query($query);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "title: " . $row["title"]. " - description: " . $row["description"]. "<br>";
			}	
		} else {
			echo "0 results";
		}

			
	}
	
	
	
	/**
	* Destructor.
	*/
	function __destruct(){
		echo "Close connection.";
		$this->conn->close();
	}
    
}

class DatabaseService{
	public function run(){
	 $dbase = new Database();
	 $dbase->getData("SELECT  title, description FROM titledescription");
	}
}
$instance = new DatabaseService();
$instance->run();
?>