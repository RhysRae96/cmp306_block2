<?xml version="1.0" encoding="utf-8"?> 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0" >
<xsl:output method="xml" version="1.0" omit-xml-declaration="yes" indent="yes" media-type="text/html"/>
    
<xsl:template match="/">
	<xsl:element name="h1">
    	<xsl:text>Contact </xsl:text>
    	<xsl:value-of select="contacts/contact[2]/name" />
    </xsl:element>
   <xsl:element name="h2">
    	<xsl:text>There are </xsl:text>
        <xsl:value-of select="count(contacts/contact[2]/phones/phone)" />
        <xsl:text> phones recorded</xsl:text>
    </xsl:element>
    <xsl:apply-templates select="/contacts/contact[2]/phones/phone" />
</xsl:template>

<xsl:template match="phone">
	<xsl:value-of select="@type"/>
	<xsl:value-of select="." />
	<xsl:element name="br" />
</xsl:template>

</xsl:stylesheet>