<?php

class FileWriter{

	private $fptr;
	/**
	* Constructor
	* @param String - fileName, the name of the file.
	*/
	function __construct($fileName){
		$this->fptr = fopen($fileName,"w");	
	}
	
	/*
	* Write the string agrument, data, to the file.
	* @param String - Data to write to the file.
	*/
	public function writeToFile($data){	
		fwrite($this->fptr,$data);
	}

	/*
	* Destructor - close the file.
	*/
	function __destruct(){
		fclose($this->fptr);
	}	
}
?>