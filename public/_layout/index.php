<?php
$pageTtl = "レイアウト集";
include ("../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">
    <header class="main__header main-header">
      <div class="main-header__bg"></div>
      <div class="main-header__row">
        <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
        <p class="main-header__desc">AmiTemplateに初めから組み込まれているアレコレ（レイアウト）</p>
      </div>
    </header>
    <?php
    include ($inc_path."/lib/inc/pan.php");
    ?>
    <section class="main__item">
      <h2 class="u-ttl_l"><a href="<?php echo $base_url; ?>/_styleguide/" class="u-icon__link">親要素から子要素をはみ出して表示</a></h2>
      <p>.l-full</p>
    </section>
  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
