<?php
class DbConfig 
{	
	private $_host = 'Host_Name';
	private $_username = 'User_Name';
	private $_password = 'password';
	private $_database = 'DB_Name';
	
	protected $connection;
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			
			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}			
		}	
		
		return $this->connection;
	}
}
?>
