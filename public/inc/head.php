<?php my_head_meta(); ?>
<!DOCTYPE html>
<html class="no-js" lang="ja" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $meta_description; ?>">

  <link rel="stylesheet" href="<?php echo $base_url ?>/css/base.css">
  <link rel="stylesheet" href="<?php echo $base_url ?>/css/common.css">
  <link rel="stylesheet" href="<?php echo $base_url ?>/css/page.css">
  <link rel="apple-touch-icon" href="<?php echo $base_url ?>/img/icons/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo $base_url ?>/img/icons/favicon.ico">

  <script src="<?php echo $base_url ?>/js/modernizr.js"></script>

  <title><?php echo $meta_title ?></title>

  <!-- OGP -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?php echo $sitename ?>">
  <meta property="og:title" content="<?php echo $title ?>">
  <meta property="og:description" content="<?php echo $meta_description ?>">
  <meta property="og:url" content="<?php echo $my_url ?>">
<?php
  if(isset($meta_image)){
    echo '  <meta property="og:image" content="'.$meta_image.'">';
    echo "\n";
  };
?>

</head>

<body class="<?php echo $body_class." ".$mydir." ".$filename ?>">
<?php include ($inc_path."/inc/ie10.php") ?>
<div id="all">
