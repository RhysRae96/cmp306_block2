<?php
	function getDatabaseConnection() {
		//  Database connections 
		$servername = "lochnagar.abertay.ac.uk";
		$username = "sql2303314";
		$password = "trap bank arnold suse";
		$dbname = "sql2303314";
		$conn = mysqli_connect($servername, $username, $password, $dbname) ;
		return $conn ;
		}
?>