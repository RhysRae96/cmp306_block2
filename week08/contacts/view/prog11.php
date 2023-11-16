<?php
//  code to list the contacts
$xmltxt = file_get_contents('../model/contacts.xml'); 
$xml = simplexml_load_string($xmltxt);
$result = $xml -> XPath("/contacts/contact/name");
var_dump($result) ;
echo "<br/><br/>" ;
$num = sizeof($result) ;
echo "<h1>There are $num contacts</h1>" ;
echo "<br/>" ;
for ($i=0; $i<$num; $i++) {
	echo $result[$i] ;
	echo "<br/>" ;
}
?>
