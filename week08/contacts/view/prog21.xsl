<?xml version="1.0" encoding="utf-8"?> 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0" >
<xsl:output method="xml" version="1.0" omit-xml-declaration="yes" indent="yes" media-type="text/html"/>
    
<xsl:template match="/">
	<xsl:element name="h1">
		<xsl:text>There are </xsl:text>
        <xsl:value-of select="count(contacts/contact)" />
        <xsl:text> contacts</xsl:text>
    </xsl:element>
	<xsl:apply-templates select="/contacts/contact/name" />
</xsl:template>

<xsl:template match="name">
	<xsl:value-of select="." />
	<xsl:element name="br" />
</xsl:template>

</xsl:stylesheet>

