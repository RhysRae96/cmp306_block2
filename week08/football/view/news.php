<?php
	// Connect to database
	include("connection.php");
	$conn =  getDatabaseConnection();
	
	// library contains all the methods required from the Web Service
	include("library.php") ;
 
	$request_method=$_SERVER["REQUEST_METHOD"];
	// $call = $_SERVER["PHP_SELF"];
	// $request = $_SERVER['REQUEST_URI'];
	
	switch($request_method)
	{
		case 'GET':
			// Retrive Employees
			if(isset($_GET['id']))
			{
				$id=$_GET["id"];
				$resp = getNews($id);
				header('Content-Type: text/xml');
				echo $resp ;
			}
			else
			{
				$resp = getAllNews();
				header('Content-Type: text/xml');
				echo $resp ;
			}
			break;
		// case 'POST':
		// 	// Insert Employee
		// 	$xml = file_get_contents('php://input') ;
		// 	$resp = insertEmployee($xml);
		// 	echo $resp ;
		// 	break;
		// case 'PUT':
		// 	// Update Employee
		// 	$id=$_GET["id"];
		// 	$xml = file_get_contents('php://input') ;
		// 	$resp = updateEmployee($id, $xml);
		// 	echo $resp ;
		// 	break;	
		// case 'DELETE':
		// 	// Delete Employee
		// 	$id=$_GET["id"];
		// 	$resp = deleteEmployee($id);
		// 	echo $resp ;
		// 	break;
		
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}

?>