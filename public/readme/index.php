<?php
include ("../function.php");
$title ='AmiTemplateについて ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。'.$description;
$body_class ="magazine-page";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<div id="pan">
  <ul class="pan-nav wrap" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <li><a href="<?php echo $base_url ?>/" itemprop="url"><span itemprop="title">Home</span></a></li>
    <li><a href="#" itemprop="url" class="pan-thispage"><span itemprop="title"><?php echo $title?></span></a></li>
  </ul>
</div>

<main id="main">
  <header class="main-head wrap">
    <h1 class="main-ttl"><?php echo $title ?></h1>
    <p class="main-description">本テンプレートについて説明します。</p>
  </header>
<article id="container">



  <div id="conts">

    <figure class="conts-main-v">
      <img src="<?php echo $base_url ?>/img/readme/noimage.png" alt="メイン画像">
      <figcaption class="conts-main-v-dates">
        <time pubdate class="conts-main-v-release" datetime="2016-08-17">公開日：2016年8月17月</time>
        <time class="conts-main-v-update" datetime="2016-08-17">更新日：2016年8月18月</time>
      </figcaption>
    </figure>

    <nav class="conts-sec">
      <h2 class="conts-sec-ttl">目次</h2>
      <ul class="list">
        <li><a href="#haikei" data-scroll>背景：本テンプレートを制作した理由</a></li>
        <li><a href="#sample" data-scroll>サンプルページ一覧：本テンプレートで使われているページタイプ</a></li>
        <li><a href="#about" data-scroll>制作者：おまっ、なにもんやねん？</a></li>
      </ul>
    </nav>

    <section class="conts-sec" id="haikei">
      <h2 class="conts-sec-ttl">背景</h2>
      <p>正直にいうと、必ずしも「セマンティックでメンテナンスブルなマークアップ」を行うことや、過度にスピードを求めたり、ましてや絶対にレスポンシブデザインじゃないといけない！をなんてことはありません。</p>
      <p>プロジェクトにとって、ユーザーにとって、何が必要かを考え続け、優先順位をつけ、その一つひとつを丁寧に対応していく・・・これで十二分です。もちろん、セマンティックであれ、メンテナンスブルであれ、重要性・優先順位が上がり、新たに学び実施しなければならない機会は少なくありませんが、優先順位を決められるような優良なプロジェクトであれば、その学びの時間も確保しやすいことでしょう。</p>
      <h3 class="conts-m-ttl">孤高の戦士たちに捧げるテンプレート</h3>
      <p>しかしながら、まことに残念ながら、そのようなプロジェクトに関わる機会（チームメンバーに囲まれる機会）は、<b>極めて稀（まれ）</b>です。環境を求めて転職を繰り返したところで、夢や希望をもって独立したところで、基本的に、ほぼ絶対に、もう泣きたくなるくらいやって来ない現実が、あなたの心を狂わすでしょう。</p>
      <p>心が狂った実務者の現実は、大概が以下に当てはまります。</p>
      <ul class="list assist">
        <li><b>忙殺：</b>年間数十本のサイトの構築・運用に関わっている。</li>
        <li><b>忙殺：</b>てか、コーダーが自分１人、ないし２人ぐらいしかいない。</li>
        <li><b>忙殺：</b>新しい人雇ってもらったはいいが、教育という名の負荷が半端ない。</li>
        <li><b>忙殺：</b>パートナー（外注）に頼んだはいいが、クオリティチェックという負荷が半端ない。</li>
        <li><b>忙殺：</b>なんか、しょっちゅう報告資料作らされている。</li>
        <li><b>嘆き：</b>教育とかする前に、自分の学びが数年前で止まっている。</li>
        <li><b>嘆き：</b>パートナーが案件ごとに別個の人材でチェック内容の共有からやりなおし。</li>
        <li><b>嘆き：</b>そもそも、チェックシートとか本当にコレでいいか（調べる時間がなくて）わからない。</li>
        <li><b>嘆き：</b>「お前のためにやってやった」的な誰かの顔が夢に出た。</li>
        <li><b>嘆き：</b>結局、深夜残業・土日出勤で自分がやってる。</li>
        <li><b>つぶやき：</b>相談相手がいなくてさみしい。</li>
        <li><b>つぶやき：</b>最近、太った。</li>
        <li><b>つぶやき：</b>改善？それ美味しいの？</li>
      </ul>
      <p>そんな中でも、一部の人は・・・・</p>
      <div class="assist">
        <p>ん？なになに？</P>
        <P>自分のことですが何か問題でも？コレが普段の生活ですが文句でもある？</p>
      </div>
      <p>そう思えたタフな方は<b>孤高の戦士</b>です。環境に恵まれずとも日夜不条理と戦う<b>我らの仲間</b>です。そういう人たち（個人的に）大好きですし、仲間は助け合わねばなりません。今はいなくとも、本当は仲間欲しいんです。</p>
      <p>本テンプレートはそんな<b>孤高の戦士</b>に捧げます。</p>

    </section>

    <section class="conts-sec" id="sample">

      <h2 class="conts-sec-ttl">サンプルページ一覧</h2>
      <p>本テンプレートで用意されているページタイプを紹介します。</p>
      <p class="assist warning">更新中</p>
      <ul class="assist list">
        <li><a href="<?php echo $base_url ?>/readme/magazine.php">すべての基本：マガジンタイプ</a></li>
        <li><a href="<?php echo $base_url ?>/readme/single.php">マガジンタイプの亜種：シングルタイプ</a></li>
        <li><a href="<?php echo $base_url ?>/readme/list.php">マガジン一覧で利用：リストタイプ</a></li>
        <li><a href="<?php echo $base_url ?>/readme/list.php">ちっちゃい板もあるでよ：リストタイプ（リスト縮小版）</a></li>
        <li><a href="<?php echo $base_url ?>/readme/free.php">ご自由にどうぞ：フリータイプ</a></li>
      </ul>

    </section>

    <section class="conts-sec" id="about">

      <h2 class="conts-sec-ttl">制作者について</h2>
      <ul class="list assist">
        <li><a href="http://amiten.net" target="_blank" rel="nofollow">HP</a></li>
        <li><a href="https://github.com/amishiro/AmiTemplate-PHP" target="_blank" rel="nofollow">GitHub</a></li>
        <li><a href="https://www.facebook.com/amiten.net/" target="_blank" rel="nofollow">Facebook</a></li>
        <li><a href="https://twitter.com/cyoiami" target="_blank" rel="nofollow">Twitter</a></li>
      </ul>

    </section>

    <footer class="conts-footer">
      <nav>
        <ul class="conts-footer-arrow">
          <li class="conts-footer-prev"><a href="<?php echo $base_url ?>/units/">Units</a></li>
          <li class="conts-footer-next"><a href="<?php echo $base_url ?>/readme/magazine.php">マガジンタイプ</a></li>
        </ul>
      </nav>
      <aside class="conts-footer-aside">
        <h3 class="conts-m-ttl">おまけ記事</h3>
        <h4 class="conts-s-ttl">一行の文字量は「40文字」ぐらい・・・</h3>
          <p>一二三四五六七八九〇一二三四五六七八九〇一二三四五六七八九〇一二三四五六七八九〇一二三四五六七八九〇</p>

        </aside>
      </footer>

    </div>
    <?php include($inc_path.'/inc/side.php') ?>

</article>
</main>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>