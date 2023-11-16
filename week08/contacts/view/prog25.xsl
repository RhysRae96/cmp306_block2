<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="xml" version="1.0" omit-xml-declaration="yes" indent="yes" media-type="text/html" />

  <xsl:template match="/">
    <h1>
      <xsl:value-of select="contacts/contact[@id='l2304414']/name" />
      <xsl:text> lives at </xsl:text>
    </h1>
    <xsl:apply-templates select="contacts/contact[@id='l2304414']/addresses/address[@type='home']" />
  </xsl:template>

  <xsl:template match="contact">
    <p>
	  <xsl:value-of select="name" />
    </p>
  </xsl:template>
</xsl:stylesheet>


<!-- <?php
//  code get the work email for a specific contact.
$xmltxt = file_get_contents('../model/contacts.xml'); 
$xml = simplexml_load_string($xmltxt)  ;
$result = $xml -> XPath("/contacts/contact[@id='c5103333']/addresses/address[@type='home']") ;
var_dump($result) ;
echo "<br/><br/>" ;
echo "The home address for id=c510333 is ".$result[0] ;
?> -->
