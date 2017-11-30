<?php
$pageTtl = "Web Animations APIサンプルページ";
include ("../../function.php");
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
        <p class="main-header__desc">Web Animations APIの動作サンプル</p>
      </div>
    </header>
    <?php
    $panAry[] = array("/_sample" ,"サンプル集");
    include ($inc_path."/lib/inc/pan.php");
    ?>

    <div class="main__conts conts">

      <section class="conts__item">
        <h3 class="u-ttl_m">1. Web Animations APIがつかえるブラウザかどうか確認</h3>
        <div id="caniuse">確認中</div>
        <p>ブラウザ対応状況（<a href="https://caniuse.com/#feat=web-animation" target="_blank" class="u-icon__link">Can I use</a>）</p>
        <h3 class="u-ttl_m">2. polyfillでつかえるようになったか確認</h3>

        <style>
        .box{
          box-sizing: border-box;
          display: block;
          max-width:340px;
          width: 100%;
          background-color: #eee;
          padding: 20px;
          text-align: center;
          margin: 0 auto 24px;
        }
        </style>
        <div class="box" id="caniuse_polyfill">box</div>
        <div class="u-btn">
        <label class="u-btn__item_s" id="caniuse_polyfill__btn_play">再生</label>
        <label class="u-btn__item_s" id="caniuse_polyfill__btn_pause">停止</label>
        </div>
      </section>

      <section class="conts__item">
        <h2 class="u-ttl_l">よくありそうな動作</h2>
        <h3 class="u-ttl_m">スライドしながらフェード</h3>
        <p>2.5回動いた後に、終了時の状態を継続。</p>
        <p>使い方は<a href="http://defghi1977.html.xdomain.jp/tech/webanim/webanim.htm" target="_blank" class="u-icon__link">こちら</a>が非常にわかりやすい。</p>

        <label class="box" id="sample1">クリックすると動くよ</label>

      </section>

    </div>
  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
