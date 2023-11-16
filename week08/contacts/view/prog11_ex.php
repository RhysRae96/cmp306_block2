<?php
// code to list the contacts
$xmltxt = file_get_contents('../model/contacts.xml');
$xml = simplexml_load_string($xmltxt);

// iterate over each contact and output the name and phone number
foreach ($xml->contact as $contact) {
    echo "<h2>{$contact->name}</h2>";
    foreach ($contact->phones->phone as $phone) {
        echo "<p>{$phone['type']}: {$phone}</p>";
    }
    echo "<br/>";
}
?>