<header class="Header" id="header">

  <div class="Header-row">

    <div class="Header-item headerGroup">
      <h1 class="headerGroup-logo"><a href="<?php echo $base_url ?>/"><?php echo $sitename ?></a></h1>
      <p class="headerGroup-desc"><?php echo $description; ?></p>
      <div class="headerGroup-menu" id="menu"><span>menu</span></div>
    </div>

    <nav class="Header-item gNav">
      <ul class="gNav-row">
        <li class="gNav-item home"><a href="<?php echo $base_url ?>/"><span>Home</span></a></li>
        <li class="gNav-item markup"><a href="<?php echo $base_url ?>/markup/"><span>Markup</span></a></li>
        <li class="gNav-item speed"><a href="<?php echo $base_url ?>/speed/"><span>Speed</span></a></li>
        <li class="gNav-item responsive"><a href="<?php echo $base_url ?>/responsive/"><span>Responsive</span></a></li>
        <li class="gNav-item units"><a href="<?php echo $base_url ?>/units/"><span>Units</span></a></li>
        <li class="gNav-item readme"><a href="<?php echo $base_url ?>/readme/"><span>Readme</span></a></li>
      </ul>
    </nav>

  </div>

</header>

<?php include ($inc_path.'/inc/pan.php'); ?>

<main id="main">
<article id="article">
