	<?php 

	include("./header.php");

	$api = "09d1f0535073724dd3f8fcdc0dffc4b2";

	// Glasgow Weather
	$url = "https://api.openweathermap.org/data/2.5/weather?q=Glasgow&appid=" . $api . "&mode=xml";
	$xmltxt = file_get_contents($url);
	$xml = simplexml_load_string($xmltxt);
	echo '<div class="row">';

	echo '<div class="col-sm-4">';
	echo '<div class="card">';
	echo '<div class="card-header">' . $xml->city["name"] . '</div>';
	echo '<div class="card-body">';
	echo 'Update: ' . $xml->lastupdate["value"] . "<br/>";
	echo 'Sunrise: ' . $xml->city->sun["rise"] . "<br/>";
	echo 'Sunset: ' . $xml->city->sun["set"] . "<br/>";
	echo '<br/>';
	echo 'Current Weather:<br/>';
	$precipitation = $xml->precipitation['mode'];
	echo 'Precipitation: ' . $precipitation . "<br/>";
	$temperature = $xml->temperature["value"] - 273;
	echo 'Temperature: ' . $temperature . "<br/>";
	$wind = $xml->wind;
	$speed = round($wind->speed["value"] * 3.6);
	echo 'Wind: ' . $wind->speed["name"] . ' ' . $speed . 'kph ' . $wind->direction["code"] . '<br/>';
	echo '</div>';
	echo '<div class="card-footer">Data &#169;openweathermap.org</div>';
	echo '</div>';
	echo '</div>';

	echo '<div class="col-sm-4">';
	echo '<div class="card">';
	echo '<div class="card-header">Glasgow Map</div>';
	echo '<div class="card-body">';
	echo '<div id="map" style="height: 200px; width: 100%;"></div>';
	echo '</div>';
	echo '<div class="card-footer">Data &#169;googlemaps.com</div>';
	echo '</div>';
	echo '</div>';

	echo '<div class="col-sm-4">';
	echo '<div class="card">';
	echo '<div class="card-header">Glasgow RSS</div>';
	echo '<div class="card-body">';
	echo '<a href="https://feeds.bbci.co.uk/news/scotland/glasgow_and_west/rss.xml">BBC News - Glasgow & West Scotland</a>';
	echo '</div>';
	echo '<div class="card-footer">Data &#169;bbcnews.com</div>';
	echo '</div>';
	echo '</div>';

	echo '</div>';
?>

<!-- https://feeds.bbci.co.uk/news/scotland/glasgow_and_west/rss.xml -->
<!-- Glasgow Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSEsAT1Mzk9E1SP8RzWXS0mYUV9zrdev4&callback=initMap" async defer></script>
<script>
function initMap() {
    var glasgow = {lat: 55.8642, lng: -4.2518};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: glasgow
    });
    var marker = new google.maps.Marker({
        position: glasgow,
        map: map,
        title: 'Glasgow Map'
    });
}
</script>

	<!-- // RSS FEED HERE


	// 6 BBC NEWS ITEMS -->
<?php
 $url = "http://newsrss.bbc.co.uk/rss/newsonline_uk_edition/scotland/glasgow_and_west/rss.xml"; 
 $xml = new DOMDocument();
 $xml->load($url);
 $num = min(6, count($xml->getElementsByTagName('item')));
 
 echo '<div class="row">';
 for ($i = 0; $i < $num; $i++) {
   echo '<div class="col-sm-4">';
   echo '<div class="card">';
   echo '<div class="card-header">' . $xml->getElementsByTagName('item')[$i]->getElementsByTagName('title')[0]->nodeValue . '</div>';
   echo '<div class="card-body">';
   echo $xml->getElementsByTagName('item')[$i]->getElementsByTagName('description')[0]->nodeValue;
   echo '</div>';
   echo '</div>';
   echo '</div>';
 }
 echo '</div>';

 // 6 DATABASE NEWS ITEMS 
 $url = "./news.xml" ;
 $xmltxt = file_get_contents($url); 
$xml = simplexml_load_string($xmltxt)  ; 
//var_dump($xml) ;

echo '<div class="row">' ;
$num = sizeof($xml->news) ;
for ($i=0; $i<$num; $i++) {
   echo '<div class="col-sm-4">' ;
	  echo '<div class="card">' ;
	  echo '<div class="card-header">'.$xml->news[$i] -> title.'</div>' ;
   echo '<div class="card-body">' ;
   echo $xml -> news[$i] -> description[0] ;
   echo '</div>' ;
   echo '</div>' ;
   echo '</div>' ;
}
echo '</div>' ;


 ?>

	</div>

 	</body>
</html>