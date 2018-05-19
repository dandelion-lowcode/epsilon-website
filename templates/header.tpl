<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $tplTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="<?php echo Epsilon::getRelativeLocation('css/bootstrap-united.css'); ?>" rel="stylesheet">
	<link href="<?php echo Epsilon::getRelativeLocation('css/general.css'); ?>" rel="stylesheet">
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link href="<?php echo Epsilon::getRelativeLocation('js/google-code-prettify/prettify.css'); ?>" rel="stylesheet">

	<?php echo $tpl_styles; ?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

	<?php include_once 'menu.tpl' ?>

	<div class="container">
		<br/>
		<br/>