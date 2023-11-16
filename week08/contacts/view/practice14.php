<?php
// Code to list the names of contacts without mobile phones
$xmltxt = file_get_contents('../model/contacts.xml');
$xml = simplexml_load_string($xmltxt);
$result = $xml->xpath("/contacts/contact[not(phones/phone[@type='mobile'])]");
$num = sizeof($result);

foreach ($result as $contact) {
    echo $contact->name . " does not have a mobile number.";
    echo "<br/>";
}
?>