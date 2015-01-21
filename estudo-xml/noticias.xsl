<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="UTF-8"/>
	
	<xsl:template match="/">
<!--
		<html>
			<body>
-->
				<h2><xsl:value-of select="noticias/noticia/grupodenoticias"/></h2>
				<h4>Listando todas as notícias</h4>
				<xsl:for-each select="noticias/noticia">
					<div>
						<span><xsl:value-of select="dataNoticia"/> - <xsl:value-of select="titulo"/></span>
					</div>
				</xsl:for-each>
				
				<br/><hr/><br/>
				
				<h2><xsl:value-of select="noticias/noticia/grupodenoticias"/></h2>
				<h4>Selecionando elementos específicos</h4>
				<xsl:for-each select="noticias/noticia[dataNoticia='28/04/2006']">
					<div>
						<span><xsl:value-of select="dataNoticia"/> - <xsl:value-of select="titulo"/></span>
					</div>
				</xsl:for-each>
<!--
			</body>
		</html>
-->
	</xsl:template>

</xsl:stylesheet> 