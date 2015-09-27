<?php
// Declare the interface 'iTemplate'
interface DatabaseConfiguration
{
    public function getServerName();
	public function getUserName();
	public function getPassword();
	public function getDatabaseName();
}
?>