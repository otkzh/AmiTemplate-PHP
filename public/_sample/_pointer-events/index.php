<?php
$pageTtl = "PointerEventsサンプルページ";
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
        <p class="main-header__desc">mouseEvents/touchEvents/pointerEventsの動作表</p>
      </div>
    </header>
    <?php
    $panAry[] = array("/_sample" ,"サンプル集");
    include ($inc_path."/lib/inc/pan.php");
    ?>

    <div class="main__conts conts">

      <section class="conts__item">
        <h2>1. PointerEventsがつかえるブラウザかどうか確認</h2>
        <div id="caniuse">確認中</div>
        <h2>2. polyfillでつかえるようになったか確認</h2>
        <div id="caniuse_polyfill">クリックしてね</div>
      </section>

      <section class="conts__item">
        <h2>対応表</h2>
        <table class="u-table">
          <thead>
            <tr><th>マウス</th><th>タッチ</th><th>総合（ポインタ）</th></tr>
          </thead>
          <tbody>
            <tr><td><span>マウス：</span>mousedown</td><td><span>タッチ</span>touchstart</td><td><span>総合（ポインタ）</span>pointerdown</td></tr>
            <tr><td><span>マウス：</span>mouseenter</td><td><span>タッチ</span>touchenter</td><td><span>総合（ポインタ）</span>pointerenter</td></tr>
            <tr><td><span>マウス：</span>mouseleave</td><td><span>タッチ</span>touchleave</td><td><span>総合（ポインタ）</span>pointerleave</td></tr>
            <tr><td><span>マウス：</span>mousemove</td><td><span>タッチ</span>touchmove</td><td><span>総合（ポインタ）</span>pointermove</td></tr>
            <tr><td><span>マウス：</span>mouseout</td><td>-</td><td><span>総合（ポインタ）</span>pointerout</td></tr>
            <tr><td><span>マウス：</span>mouseover</td><td>-</td><td><span>総合（ポインタ）</span>pointerover</td></tr>
            <tr><td><span>マウス：</span>mouseup</td><td><span>タッチ</span>touchend</td><td><span>総合（ポインタ）</span>pointerup</td></tr>
            <tr><td>-</td><td><span>タッチ</span>touchcancel</td><td> <span>総合（ポインタ）</span>pointercancel </td></tr>
          </tbody>
        </table>
      </section>

      <section class="conts__item">
        <h2>動作テスト</h2>
        <style>
        #enter-test{
          height: 100px;
          text-align: center;
        }
        </style>
        <div id="enter-test" touch-action="pan-y">pointerenter / pointerleave</div>
      </section>

      <section class="conts__item">
        <h2>アンカーサンプル</h2>
        <style>
        .enter-test-anchor{
          display: block;
          height: 100px;
          text-align: center;
          background-color:#eee;
        }
        </style>
        <a href="#all" class="enter-test-anchor" data-scroll>aタグ</a>
        <br>
        <label class="enter-test-anchor">labelタグ</label>

      </section>

    </div>
  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
