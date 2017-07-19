<!DOCTYPE html>
<html class="no-js">
<head>
<?php include ($inc_path."/lib/inc/head_gtm.txt"); ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />

<title><?php echo $metaTtl ?></title>
<meta name="description" content="<?php echo $metaDesc; ?>">
<script src="<?php echo $base_url ?>/lib/js/modernizr.js"></script>
<link rel="stylesheet" href="<?php echo $base_url ?>/lib/css/styles.css">
<!--link rel="shortcut icon" href="<?php echo $base_url ?>/lib/img/icons/favicon.ico"-->

<!-- OGP -->
<meta property="og:title" content="<?php echo $metaTtl ?>" />
<meta property="og:type" content="website" />
<meta property="og:description" content="<?php echo $metaDesc; ?>" />
<meta property="og:url" content="<?php echo $_SERVER["REQUEST_URI"]; ?>" />
<meta property="og:site_name" content="<?php echo $siteName; ?>" />

</head>
<body class="<?php echo $body_class." ".$mydir." ".$filename ?>">
<?php include ($inc_path."/lib/inc/body_gtm.txt"); ?>
<?php include ($inc_path."/lib/inc/ie10.php"); ?>
<div id="all">
