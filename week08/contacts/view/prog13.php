<?php
//  code to list the contacts plus their first phone number
$xmltxt = file_get_contents('../model/contacts.xml'); 
$xml = simplexml_load_string($xmltxt)  ;
$result = $xml -> xpath("/contacts/contact[@id='c5103333']/emails/email[@type='work']") ;
var_dump($result) ;
echo "<br/><br/>" ;
echo "Work email for id=c510333 is ".$result[0] ;
?>