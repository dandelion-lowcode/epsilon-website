<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2006-05-29
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Epsilon Cinema";
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<!-- Main part -->
	<div id="midcolumn">
		<table width="100%">
			<tr>
				<td width="50%">
					<h1>$pageTitle</h1>
				</td>
				<td align="right">
					<img alt="Epsilon Logo" src="../resources/epsilonlogo.png" valign="top" />
				</td>
			</tr>
		</table>

		<h3>Cinema</h3>
		
		<ul>
		
		<li><a href="BuildOOInstance_part1.htm">Defining and instantiating an OO metamodel (Part 1)</a> In this
		example, we define a new metamodel using Emfatic and instantiate it manually using Exeed, an 
		enhanced version of the built-in EMF reflective editor.<br><br>
		
		<li><a href="BuildOOInstance_part2.htm">Populating an OO model using EOL (Part 2)</a> In this
		example, we populate an instance of the OO metamodel we defined in the previous example using EOL.<br><br>
		
		<li><a href="ModeLink_part1.htm">Establishing links between EMF models (Part 1)</a> In this
		example, we demonstrate using Emfatic and ModeLink for establishing type-safe links between models of different
		Ecore metamodels.<br><br>

		<li><a href="ModeLink_part2.htm">Validating links between EMF models (Part 2)</a> In this
		example, we use EVL to validate the intermediate model we defined in the previous example.<br><br>

		<li><a href="GMFWizards2.htm">GMF Wizards</a> In this
		example, we use <a href="http://www-users.cs.york.ac.uk/~dkolovos/publications/EWL.pdf">EWL</a> 
		to define a wizard that can be executed from within the GMF-based 
		UML 2 Class Diagram Editor <br><br>
		
		<li><a href="EglIntroduction.htm">Generating an HTML report from a Version Control model (Part 1) </a> In this
		example, we use EGL 
		to define a template that generates an HTML report from a simple Version Control model <br><br>
		
		<li><a href="EglVariables.htm">Generating an HTML report from a Version Control model (Part 2) </a> In this
		example, we present a more advanced solution that also makes use of the template coordination 
		mechanism featured by EGL<br><br>

		<li><a href="HUTN.htm">Human Usable Textual Notation (HUTN)</a> In this
		example, we present an implementation of HUTN for specifying EMF models 
		using a text-based editor<br><br>

		<li><a href="Eugenia.htm">EuGENia</a> In this
		example, we demonstrate implementing a GMF-based editor using
		<a href="http://epsilonlabs.wiki.sourceforge.net/EuGENia">EuGENia</a><br><br>
		
		<li><a href="EVLGMFValidation.htm">Evaluating EVL constraints in GMF-based editors</a> In this
		example, we present the integration of EVL with GMF-based editors. Technical details can be
		found in <a href="http://epsilonlabs.wiki.sourceforge.net/EVL-GMF+Integration">http://epsilonlabs.wiki.sourceforge.net/EVL-GMF+Integration</a>.<br><br>
					
		</ul>		
		
      	<hr class="clearer" />
	</div>

<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=2185757; 
var sc_invisible=0; 
var sc_partition=5; 
var sc_security="2d5ff082"; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div class="statcounter"><a class="statcounter" href="http://www.statcounter.com/"><img class="statcounter" src="http://c6.statcounter.com/2185757/0/2d5ff082/0/" alt="page hit counter" /></a></div></noscript>
<!-- End of StatCounter Code -->

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>