<?php

include_once "DatabaseConfiguration.php";

class PortfolioConfiguration implements DatabaseConfiguration
{
    // property declaration
    private $servername = "localhost";
	private $username = "lchasteen";
	private $password = "!flut3dBlu3y";
	private $databasename = "portfolio";
	

    // method declaration
    public function getServerName() { return $this->servername; }
	public function getUserName() { return $this->username; }
	public function getPassword() { return $this->password; }
	public function getDatabaseName() { return $this->databasename; }
}	
?>