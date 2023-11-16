<?php
//  code to list the contacts
$xml = new DOMDocument();
$xml->load('../model/contacts.xml');
var_dump($xml) ;
echo "<br/><br/>" ;

$xsl = new DOMDocument;
$xsl->load('prog23.xsl');
var_dump($xsl) ;
echo "<br/><br/>" ;

$proc = new XSLTProcessor() ;
$proc->importStyleSheet($xsl);
$result = $proc->transformtoXML($xml) ;

echo $result;
?>