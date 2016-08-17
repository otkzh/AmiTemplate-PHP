<?php my_head_meta(); ?>
<!DOCTYPE html>
<html class="no-js" lang="ja" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $meta_description; ?>">
  <meta name="Identifier-URL" content="<?php echo $link_url ?>/">

  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $base_url ?>/css/base.css">
  <link rel="stylesheet" href="<?php echo $base_url ?>/css/common.css">
  <link rel="stylesheet" href="<?php echo $base_url ?>/css/page.css">
  <link rel="apple-touch-icon" href="<?php echo $base_url ?>/img/icons/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo $base_url ?>/img/icons/favicon.ico">

  <script src="<?php echo $base_url ?>/js/vendor/modernizr.min.js"></script>

  <title>
    <?php echo $meta_title ?>
  </title>

  <!-- OGP -->
  <meta property="og:title" content="<?php echo $title ?>">
  <meta property="og:type" content="website">
  <meta property="og:description" content="<?php echo $meta_description ?>">
  <meta property="og:url" content="<?php echo $link_url ?>/">
  <!-- meta property="og:image" content="" -->
  <meta property="og:site_name" content="<?php echo $sitename ?>">

</head>

<body class="<?php echo $body_class." ".$mydir." ".$filename ?>">
<?php include ($inc_path."/inc/ie10.php") ?>
<div id="all">
