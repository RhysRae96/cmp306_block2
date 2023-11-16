<?php
//  code get the work email for a specific contact.
$xmltxt = file_get_contents('../model/contacts.xml'); 
$xml = simplexml_load_string($xmltxt)  ;
$result = $xml -> XPath("/contacts/contact[@id='c5103333']/addresses/address[@type='home']") ;
var_dump($result) ;
echo "<br/><br/>" ;
echo "The home address for id=c510333 is ".$result[0] ;
?>
