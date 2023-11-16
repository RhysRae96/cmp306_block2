<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="xml" version="1.0" omit-xml-declaration="yes" indent="yes" media-type="text/html" />

  <xsl:template match="/">
    <h1>
      <xsl:text> Home phone directory </xsl:text>
    </h1>
    <xsl:apply-templates select="contacts/contact" />
  </xsl:template>

  <xsl:template match="contact">
    <p>
      <xsl:value-of select="name" />
      <xsl:text>: </xsl:text>
      <xsl:value-of select="phones/phone[@type='home']" />
    </p>
  </xsl:template>
</xsl:stylesheet>


<!-- <?php
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
?> -->