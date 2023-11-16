<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The site uses Bootstrap v5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<!-- add a local stylesheet -->
	<link rel="stylesheet" href="chelsea.css?v=1.0" />

	
    <title>Chelsea News Feed</title>
  </head>
  
  <body>
  	<!-- overall container for page -->
    <div class="container">
  	<?php 
  		$url = "https://feeds.bbci.co.uk/sport/football/teams/chelsea/rss.xml" ;
  		$xml = new DOMDocument() ;
  		$xml->load($url) ;
  		// var_dump($xml) ;
  		$xsl = new DOMDocument() ;
  		$xsl->load("../xsl/rss.xsl") ;
  		//var_dump($xsl) ;
  		$proc = new XSLTProcessor() ;
  		$proc -> importStyleSheet($xsl) ;
  		$result = $proc -> transformtoXML($xml) ;
  		// echo $result ;
		// echo "<br/><br/>" ;
		//https://feeds.bbci.co.uk/sport/football/teams/chelsea/rss.xml
		

		echo '<div class="card">' ;
		echo '<div class="card-header">Chelsea</div>' ;
		echo '<div class="card-body">' ;
		echo $result ;
		echo '</div>' ;
		echo '<div class="card-footer">Data &#169;bbc.co.uk/news.org</div>' ;
		echo '</div>' ;
	?>
	</div>

 	</body>
</html>