<?php
include 'function.php';
$title = 'AmiTemplate - php';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = 'メタディスクリプション。'.$description;
$body_class = 'home';
?>
<?php include($inc_path.'/inc/head.php') ?>
<?php include($inc_path.'/inc/header.php') ?>
<?php include($inc_path.'/inc/pan.php') ?>

<div role="main">
<article>

  <header class="main-head">
    <h1 class="main-ttl"><?php echo $title ?></h1>
  </header>

  <div id="conts">

    <section class="wrap">
      <ul class="links">
        <li>
          <a href="<?php echo $base_url ?>/markup">
            <figure><img src="img/dummy/img.png" alt="MARK UP"><figcaption>MARK UP</figcaption></figure>
          </a>
        </li>
        <li>
          <a href="<?php echo $base_url ?>/speed">
            <figure><img src="img/dummy/img.png" alt="SPEED"><figcaption>SPEED</figcaption></figure>
          </a>
        </li>
        <li>
          <a href="<?php echo $base_url ?>/responsive">
            <figure><img src="img/dummy/img.png" alt="RESPONSIVE"><figcaption>RESPONSIVE</figcaption></figure>
          </a>
        </li>
      </ul>
    </section>

    <section class="conts-sec wrap">

      <h2 class="conts-sec-ttl">conts-sec-ttl（contents-section-title）</h2>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
      <h3 class="conts-l-ttl">conts-l-ttl（contents-large-title）</h3>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
      <h4 class="conts-m-ttl">conts-m-ttl（contents-middle-title）</h4>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
      <h5 class="conts-s-ttl">conts-s-ttl（contents-small-title）</h5>
      <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>

    </section>

  </div>
</article>
</div>

<?php include($inc_path.'/inc/footer.php') ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include($inc_path.'/inc/foot.php') ?>
