<?php
//  code to get the phone numbers of contact 2
$xmltxt = file_get_contents('../model/contacts.xml'); 
$xml = simplexml_load_string($xmltxt)  ;
$result = $xml -> xpath("/contacts/contact[2]/phones/phone") ;
var_dump($result) ;
echo "<br/><br/>" ;
$num = sizeof($result) ;
echo "<h1>There are $num phones</h1>" ;
echo "<br/>" ;
for ($i=0; $i<$num; $i++) {
	echo $result[$i] ;
	echo "<br/>" ;
}
?>