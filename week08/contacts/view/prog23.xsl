<?xml version="1.0" encoding="utf-8"?> 
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0" >
<xsl:output method="xml" version="1.0" omit-xml-declaration="yes" indent="yes" media-type="text/html"/>
    
<xsl:template match="/">
	<xsl:element name="h1">
    	<xsl:text>Work Email for </xsl:text>
    	<xsl:value-of select="contacts/contact[@id='c5103333']/name" />
    </xsl:element>
	<xsl:apply-templates select="/contacts/contact[@id='c5103333']/emails/email[@type='work']" />
</xsl:template>

<xsl:template match="email">
	<xsl:element name="p">
		<xsl:value-of select="." />
	</xsl:element>
</xsl:template>

</xsl:stylesheet>
