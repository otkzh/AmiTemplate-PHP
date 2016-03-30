<?php
include ("../function.php");
$title ='UNITS - 各種共通パーツについて';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。メタディスクリプション。'.$description;
$body_class ="";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<?php include ($inc_path."/inc/pan.php") ?>

<div role="main">
<article>

  <header class="main-head">
    <time>2016-03-11</time>
    <time>UPDATE：2016-03-11</time>
    <h1 class="main-ttl"><?php echo $title ?></h1>
  </header>

  <div id="container" class="wrap">

    <div id="conts">

      <section class="conts-sec">
        <h1 class="conts-sec-ttl">基本設計について</h1>
        <h2 class="conts-l-ttl">classの指定の仕方を統一するが・・・</h2>
        <p>unitsで（全ページ共通として）組み込む場合と、各特殊な場合の考え方を変えなければいけないかも知れない・・・けど、現状は以下のようにclass名を記載していく。</p>
        <ol class="assist list-num">
          <li>例：かっこいいテキストリンク（アンダーライン）+ 矢印の場合は[a-underline-arrow]と記述。</li>
          <li>例：かっこいいボタン（push）+ 矢印の場合は[btn-push-arrow]と記述。</li>
          </ul>
      </section>

      <section class="conts-sec">
        <h1 class="conts-sec-ttl">a-link</h1>
        <ul class="list-base">
          <li>classの指定の仕方は、[a-]でスタートする。装飾は、ハイフン区切りで記載する。</li>
          <li>例：かっこいいリンク（アンダーライン）+ 矢印の場合は[a-underline-arrow]と記述。</li>
          <li>あとは案件に合わせて適宜カスタマイズすればいいと思う。そう思う。</li>
        </ul>

        <div class="assist">
          <a href="<?php echo $no_link ?>">テキストリンク</a>
        </div>
        <div class="assist">
          <a href="<?php echo $no_link ?>" class="a-arrow">テキストリンク矢印</a>
        </div>
        <div class="assist">
          <a href="<?php echo $no_link ?>" target="_blank" rel="nofollow" class="a-arrow">外部リンク</a>
        </div>
        <div class="assist">
          <a href="<?php echo $no_link ?>" class="a-underline">かっこいいリンク（underline）</a>
        </div>
        <div class="assist">
          <a href="<?php echo $no_link ?>" class="a-underline-arrow">かっこいいリンク&矢印</a>
        </div>

      </section>

      <section class="conts-sec">
        <h1 class="conts-sec-ttl">btn-link</h1>
        <ul class="list">
          <li>classの指定の仕方は、[btn-]でスタートする。装飾は、ハイフン区切りで記載する。</li>
          <li>例：かっこいいボタン（push）+ 矢印の場合は[btn-push-arrow]と記述。</li>
          <li>あとは案件に合わせて適宜カスタマイズすればいいと思う。そう思う。</li>
        </ul>
        <div class="assist">
          <a href="<?php echo $no_link ?>" class="btn-base">基本ボタン</a>
        </div>
        <div class="assist">
          <a href="<?php echo $no_link ?>" class="btn-base-point">コンバージョンボタン</a>
        </div>
        <div class="assist">
          <a href="<?php echo $no_link ?>" class="btn-base-arrow">矢印付き基本ボタン</a>
        </div>
        <div class="assist">
          <a href="<?php echo $no_link ?>" class="btn-base-point-arrow">矢印付きコンバージョンボタン</a>
        </div>

        <div class="assist">
          <a href="<?php echo $no_link ?>" class="btn-base-arrow" rel="nofollow">外部リンク基本ボタン</a>
        </div>

        <div class="assist">
          <a href="<?php echo $no_link ?>" class="btn-push">プッシュボタン</a>
        </div>
        <div class="assist">
          <a href="<?php echo $no_link ?>" class="btn-push-point">プッシュコンバージョンボタン</a>
        </div>
        <div class="assist">
          <a href="<?php echo $no_link ?>" class="btn-push-arrow">矢印付きプッシュボタン</a>
        </div>


      </section>

      <section class="conts-sec">
        <h1 class="conts-sec-ttl">list</h1>

        <div class="assist">
          <ul>
            <li>ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
          </ul>
        </div>

        <div class="assist">
          <ul class="list-line">
            <li>ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキストダミーテキスト
              <ul class="list-base">
                <li>ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
                <li>ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
                <li>ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="assist">
          <ul class="list-num">
            <li>ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</li>
            <li>ダミーテキストダミーテキストダミーテキストダミーテキスト<a href="" class="a-underline-arrow">リンク</a></li>
          </ul>
        </div>

      </section>
    </div>
    <?php include($inc_path.'/inc/side.php') ?>
  </div>

</article>
</div>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>
