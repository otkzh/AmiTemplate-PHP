<?php
include 'function.php';
$title = 'AmiTemplate - php';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = 'メタディスクリプション。'.$description;
$body_class = 'home list-page';
?>
<?php include($inc_path.'/inc/head.php') ?>
<?php include($inc_path.'/inc/header.php') ?>
<?php include($inc_path.'/inc/home-main-v.php') ?>

<main id="main">
<article>
   <div  id="container">
    
    <div id="conts">
     
     <section class="conts-sec">
      <h2 class="conts-s-ttl mt0">New-記事一覧</h2>
       <?php include ($inc_path."/readme/inc/list-art.php") ?>
       <?php include ($inc_path."/readme/inc/list-art.php") ?>
      <div class="more"><a href="<?php echo $base_url ?>/readme/list-small.php" class="a-arrow">新着記事をもっと見る</a></div>
     </section>
     
      <section class="conts-sec">

        <h2 class="conts-sec-ttl mt0 pt0">conts-sec-ttl（contents-section-title）</h2>
        <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
        <h3 class="conts-l-ttl">conts-l-ttl（contents-large-title）</h3>
        <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
        <h4 class="conts-m-ttl">conts-m-ttl（contents-middle-title）</h4>
        <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
        <h5 class="conts-s-ttl">conts-s-ttl（contents-small-title）</h5>
        <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>

      </section>
      
      <section class="conts-sec">
      <h2 class="conts-sec-ttl">３つ並びコンテンツ</h2>
      <p>３つ並びの時にどう表示されるかテスト。</p>
      <ul class="links">
        <li>
          <a href="<?php echo $base_url ?>/markup">
            <figure><img src="img/dummy/img.png" alt="MARK UP">
              <figcaption>MARK UP</figcaption>
            </figure>
          </a>
        </li>
        <li>
          <a href="<?php echo $base_url ?>/speed">
            <figure><img src="img/dummy/img.png" alt="SPEED">
              <figcaption>SPEED</figcaption>
            </figure>
          </a>
        </li>
        <li>
          <a href="<?php echo $base_url ?>/responsive">
            <figure><img src="img/dummy/img.png" alt="RESPONSIVE">
              <figcaption>RESPONSIVE</figcaption>
            </figure>
          </a>
        </li>
      </ul>
    </section>

    </div>

    <?php include($inc_path.'/inc/side.php') ?>
</div>
</article>
</main>

<?php include($inc_path.'/inc/footer.php') ?>

<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include($inc_path.'/inc/foot.php') ?>
