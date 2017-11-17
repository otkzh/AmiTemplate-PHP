<?php
$pageTtl = "トップ";
include ("function.php");
$metaTtl = $siteName;
$metaDesc = $siteDescription;
$body_class ="home vue";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">

    <section class="main__item">
      <header class="main__head">
        <h2 class="u-ttl_l">本サイトは・・・</h2>
        <p >AmiTemplateのサンプル集です（開発中）</p>
      </header>
      <article class="main__body">
        <p>普段使っている中規模サイト制作用の雛形です。LAMP環境構築から、gulp設定、scssのmixin、webpackを使ったjsファイルの管理などなど…ノウハウ詰まっている。ベストとは言えないけど、ベタープラクティスをまとめて随時更新。</p>

        <h3 class="u-ttl_m">各種テンプレート</h3>
        <a href="<?php echo $base_url; ?>/_template/" class="u-icon__link">こちら</a>

        <h3 class="u-ttl_m">スタイルガイド</h3>
        <a href="<?php echo $base_url; ?>/_styleguide/" target="_blank" class="u-icon__link">こちら</a>

      </article>
      <footer class="main__foot">
        <p>footer1</p>
      </footer>
    </section>

    <section class="main__item">
      <header class="main__head">
        <h2 class="u-ttl_l">基本要素（セクションタイトル）</h2>
        <p >基本要素の説明（ディスクリプション）</p>
      </header>
      <article>
        <figure class="u-figure">
          <img
          data-src="<?php echo $base_url ?>/lib/img/dummy/bronze.png"
          data-retina="<?php echo $base_url ?>/lib/img/dummy/bronze@2x.png"
          alt="dummy"
          class="u-img__max">
          <figcaption class="u-figure__cap">キャプション</figcaption>
        </figure>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repudiandae, nihil consectetur dignissimos facere, ipsa recusandae. Enim possimus distinctio, vel voluptatibus amet velit nisi iste quisquam tempore voluptates, doloremque impedit.</p>
      </article>
      <footer class="main__foot">
        <p>セクションフッター</p>
      </footer>
    </section>

  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
