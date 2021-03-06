<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

	<title>RentSFSU</title>

	<!-- JS -->
	<!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
	<!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->
	<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
	<script>
		var url = "<?php echo URL; ?>";
	</script>

	<!-- CSS -->
	<link href="<?php echo URL; ?>css/styles.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo URL; ?>css/screen.css" media="screen, projection" rel="stylesheet" type="text/css"/>
	<link href="<?php echo URL; ?>css/print.css" media="print" rel="stylesheet" type="text/css"/>
	<!--[if IE]>
	<link href="<?php echo URL; ?>css/ie.css" media="screen, projection" rel="stylesheet" type="text/css"/>
	<![endif]-->

	<!-- jQuery, imported for feature freeze -->
	<script src="<?php echo URL; ?>js/jquery-3.1.1.min.js"></script>
</head>
<body>
