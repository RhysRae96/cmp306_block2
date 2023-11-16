<?php

	// Library of methods to support the Web Service	
	
	//  function to convert a single record from database to XML
	function convertToXML($query) {
		$txt ='<news>' ;
		$txt = $txt.'<id>'.$query["id"].'</id>' ;
		$txt = $txt.'<title>'.$query["title"].'</title>' ;
		$txt = $txt.'<description>'.$query["description"].'</description>' ;
		$txt = $txt.'</news>' ;
		return $txt ;
	}	

	// function to get all (max 12) employees
	function getAllNews()
	{
		global $conn;
		$query="select * from newsitems order by id desc limit 12";
		$result=mysqli_query($conn, $query);
		$txt = '<news>';
		while($row=mysqli_fetch_array($result))
		{
			$txt = $txt.convertToXML($row) ;
		}
		$txt = $txt.'</news>' ;
		return $txt ;
	}

	
	//  function to get a specific employee
	function getNews($id)
	{
		global $conn;
		$query="select * FROM newsitems where id=".$id ;
		$result=mysqli_query($conn, $query);
		$response = mysqli_fetch_array($result) ;
		$txt = convertToXML($response) ;
		return $txt ;
	}
	
	//  function to insert a single employee
	function insertNews($xml)
	{
		global $conn;
		$data = simplexml_load_string($xml);
		$title=$data -> title;
		$description=$data -> description;
		$query="INSERT INTO newsitems SET title='".$title."', description='".$description."'";
		$response = mysqli_query($conn, $query) ;
		$last_id = mysqli_insert_id($conn) ;
		if($response)
		{
			$resp = $last_id ;
		}
		else
		{
			$resp = 0 ;
		}
		return $resp ;
	}
	
	//  function to update a specific news
	function updateNews($id, $xml)
	{
		global $conn;
		$data = simplexml_load_string($xml);
		$title=$data -> title;
		$description=$data -> description;
		$query="UPDATE newsitems SET title='".$title."', description='".$description."' WHERE id=".$id;
		$response = mysqli_query($conn, $query) ;
		if($response)
		{
			$resp = 1 ;
		}
		else
		{
			$resp = 0 ;
		}
		return $resp ;
	}
	
	//  function to delete a specific employee
	function deleteNews($id)
	{
		global $conn;
		$query="DELETE FROM newsitems WHERE id=".$id;
		$response = mysqli_query($conn, $query) ;
		if($response)
		{
			$resp = 1 ;
		}
		else
		{
			$resp = 0 ;
		}
		return $resp ;
	}
	
?>