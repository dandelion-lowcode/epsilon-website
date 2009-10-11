<?php

	# set default theme
	$_theme = "Nova";
	$theme = "";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}

	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
	<STYLE TYPE="text/css">
	  .sideitem { border-width: 1px 1px; }
	  body { font-size: small; }
	  #midcolumn { margin-top: 5px; }
	</STYLE>

EOBRANDING;
	$Menu->setProjectBranding($branding);
	$Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=modeling.gmt.epsilon", "", 1);
	
	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addNavSeparator("Epsilon", "/gmt/epsilon/");
	$Nav->addCustomNav("Home", "/gmt/epsilon/", "_self", 1);
	$Nav->addCustomNav("Live", "/gmt/epsilon/live", "_self", 1);
	$Nav->addCustomNav("Download", "/gmt/epsilon/download", "_self", 1);
	//$Nav->addCustomNav("Source code", "http://dev.eclipse.org/viewsvn/index.cgi/?root=Modeling_EPSILON", "_self", 1);
	$Nav->addNavSeparator("Resources", "#");
	$Nav->addCustomNav("Documentation", "/gmt/epsilon/doc/", "_self", 1);
	$Nav->addCustomNav("Articles", "/gmt/epsilon/doc/articles/", "_self", 1);
	$Nav->addCustomNav("Screencasts", "/gmt/epsilon/cinema/", "_self", 1);
	$Nav->addCustomNav("Examples", "/gmt/epsilon/examples", "_self", 1);
	$Nav->addCustomNav("FAQs", "/gmt/epsilon/faq", "_self", 1);
	$Nav->addCustomNav("Book", "/gmt/epsilon/doc/book", "_self", 1);
	$Nav->addCustomNav("Blog", "http://epsilonblog.wordpress.com", "_self", 1);
	$Nav->addCustomNav("EpsilonLabs", "/gmt/epsilon/labs", "_self", 1);
	
	$Nav->addNavSeparator("Community", "#");
	$Nav->addCustomNav("Forum", "/gmt/epsilon/forum", "_self", 1);
	$Nav->addCustomNav("Spread the word", "/gmt/epsilon/spreadtheword/", "_self", 1);
	$Nav->addNavSeparator("Bugzilla", "#");
		$Nav->addCustomNav("Report a new bug", "https://bugs.eclipse.org/bugs/enter_bug.cgi?product=GMT&component=Epsilon", "_self", 1);
	$Nav->addCustomNav("View open bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?product=gmt&component=Epsilon&cmdtype=doit&order=Reuse+same+sort+as+last+time&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_status=VERIFIED", "_self", 1);
	$Nav->addCustomNav("View fixed bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?product=gmt&component=Epsilon&cmdtype=doit&order=Reuse+same+sort+as+last+time&bug_status=RESOLVED", "_self", 1);
	$Nav->addCustomNav("View all bugs", "https://bugs.eclipse.org/bugs/buglist.cgi?product=gmt&component=Epsilon&cmdtype=doit&order=Reuse+same+sort+as+last+time", "_self", 1);
	$Nav->addNavSeparator("GMT", "/gmt/");
	$Nav->addCustomNav("Download", "/gmt/download/", "_self", 1);
	$Nav->addCustomNav("Documentation", "/gmt/doc/", "_self", 1);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/GMT", "_self", 1);
	
	$App->SetGoogleAnalyticsTrackingCode("UA-1498421-2");
	
?>
