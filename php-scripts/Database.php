<?php

require_once "config/PortfolioConfiguration.php";
require_once "FileWriter.php";
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
	function __construct(DatabaseConfiguration $db){
				
		$this->conf = $db;
		$this->conn = mysqli_connect($this->conf->getServerName(), $this->conf->getUserName(), $this->conf->getPassword(), $this->conf->getDatabaseName());
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		} 
		//echo "Connected successfully";
	}
	
	/**
	* This method returns the result 
	* @param String $query, a string value for the query to execute.  
	*/
	public function getJSONDataFromQuery($query){
		$sjson = "{\"records\":[";
		
		$result = $this->conn->query($query);
		$irow = $result->num_rows;
		if ($irow > 0) {
			// fetch the column data for the result.
			$info = mysqli_fetch_fields($result);
			
			// get the number of rows
			$icol = count($info);
			echo $icol;
			$i = 1;
			
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$sjson = $sjson . "{";
				$j = 1;
				// loop through each column name
				foreach($info as $val){
					$sjson =  $sjson . "\"" . $val->name . "\":\"" . $row[$val->name] . "\"";	
					if ( $j < $icol){
						$sjson = $sjson . ",";
					}
					$j++;
				}// end foreach
				
				$sjson = $sjson . "}";
				if ( $i < $irow){
					$sjson = $sjson . ",";
				}
				$i++;
			}// end while			
        mysqli_free_result($result);			
		} else {
			//echo "0 results";
		}
		$sjson =  $sjson . "]}";
		return $sjson;		
	}
	
	
	
	/**
	* Destructor.
	*/
	function __destruct(){
		//echo "Close connection.";
		mysqli_close($this->conn);
	}
    
}

class DatabaseService{
	public function run(){
	 $dbconn = new PortfolioConfiguration();
	 $dbase = new Database($dbconn);
	 $sjd = $dbase->getJSONDataFromQuery("SELECT  title, description FROM titledescription");
	 $fwinstance = new FileWriter("./data/home-data.php");
	 $fwinstance->writeToFile($sjd);
	 //echo $sjd;
	}
}
$instance = new DatabaseService();
$instance->run();
?>