<header class="Header" id="header">

  <div class="Header-row">

    <div class="Header-item hgroup">
      <h1 class="logo"><a href="<?php echo $base_url ?>/"><?php echo $sitename ?></a></h1>
      <p class="desc"><?php echo $description; ?></p>
      <a href="<?php echo $no_link ?>" class="menu"><span>menu</span></a>
    </div>

    <nav class="Header-item nav">
      <ul class="gnav">
        <li class="home"><a href="<?php echo $base_url ?>/"><span>Home</span></a></li>
        <li class="markup"><a href="<?php echo $base_url ?>/markup/"><span>Markup</span></a></li>
        <li class="speed"><a href="<?php echo $base_url ?>/speed/"><span>Speed</span></a></li>
        <li class="responsive"><a href="<?php echo $base_url ?>/responsive/"><span>Responsive</span></a></li>
        <li class="units"><a href="<?php echo $base_url ?>/units/"><span>Units</span></a></li>
        <li class="readme"><a href="<?php echo $base_url ?>/readme/"><span>Readme</span></a></li>
      </ul>
    </nav>

  </div>

</header>

<?php include ($inc_path.'/inc/pan.php'); ?>

<main id="main">
<article id="article">
