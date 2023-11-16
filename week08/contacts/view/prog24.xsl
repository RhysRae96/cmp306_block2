<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="xml" version="1.0" omit-xml-declaration="yes" indent="yes" media-type="text/html" />

  <xsl:template match="/">
    <h1>
      <xsl:text>Users without a work number </xsl:text>
    </h1>
    <xsl:apply-templates select="contacts/contact[not(phones/phone[@type='mobile'])]" />
  </xsl:template>

  <xsl:template match="contact">
    <p>
	  <xsl:value-of select="name" />
    </p>
  </xsl:template>
</xsl:stylesheet>
