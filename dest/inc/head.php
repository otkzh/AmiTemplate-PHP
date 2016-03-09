<?php my_head_meta(); ?>
<!DOCTYPE html>
<html lang="ja" class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php echo $meta_description; ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <meta name="Identifier-URL" content="<?php echo $link_url ?>/">
  <script src="<?php echo $base_url ?>/js/vendor/modernizr.min.js"></script>
  <link rel="stylesheet" href="<?php echo $base_url ?>/css/base.css">
  <link rel="stylesheet" href="<?php echo $base_url ?>/css/common.css">
  <link rel="stylesheet" href="<?php echo $base_url ?>/css/page.css">
  <link rel="apple-touch-icon" href="<?php echo $base_url ?>/img/icons/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo $base_url ?>/img/icons/favicon.ico">
  <title><?php echo $meta_title ?></title>
  
  <!-- OGP -->
  <meta property="og:title" content="<?php echo $title ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $meta_description; ?>" />
  <meta property="og:url" content="<?php echo $_SERVER[" REQUEST_URI "]; ?>" />
  <!-- meta property="og:image" content="" -->
  <meta property="og:site_name" content="<?php echo $sitename ?>" /> </head>

<body class="<?php echo $body_class." ".$mydir." ".$filename ?>">
<?php include ($inc_path."/inc/ie10.php") ?>
<div id="all">