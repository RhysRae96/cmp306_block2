<?php
$xmltxt = file_get_contents('../model/contacts.xml');
$xml = simplexml_load_string($xmltxt);
$contacts = $xml->xpath("/contacts/contact[phones/phone = '07770444444']");

foreach ($contacts as $contact) {
    echo "Name: " . $contact->name . "<br/>";
    echo "Phone: " . $contact->phones->phone . "<br/><br/>";
}
?>