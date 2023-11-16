<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="xml" version="1.0" omit-xml-declaration="yes" indent="yes" media-type="text/html" />

  <xsl:template match="/">
    <h1>
      <!-- <xsl:value-of select="contacts/contact/name" /> -->
      <xsl:text> has the </xsl:text>
    </h1>
    <xsl:apply-templates select="contacts/contact[phones/phone = '07770666666']" />
  </xsl:template>

  <xsl:template match="contact">
    <p>
      <xsl:value-of select="name" />
    </p>
  </xsl:template>
</xsl:stylesheet>


<!-- <?php
$xmltxt = file_get_contents('../model/contacts.xml');
$xml = simplexml_load_string($xmltxt);
$contacts = $xml->xpath("/contacts/contact[phones/phone = '07770444444']");

foreach ($contacts as $contact) {
    echo "Name: " . $contact->name . "<br/>";
    echo "Phone: " . $contact->phones->phone . "<br/><br/>";
}
?> -->