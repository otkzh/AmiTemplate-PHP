<?php
include ("../function.php");
$title ='Markupについて ';
$meta_title = ''.$title.' | '.$sitename.'';
$meta_description = $title.'のページです。セマンティック＆メンテナンスブルなHTMLマークアップについて説明します。'.$description;
$body_class ="single-page";
?>
<?php include ($inc_path."/inc/head.php") ?>
<?php include ($inc_path."/inc/header.php") ?>
<div id="pan">
  <ul class="pan-nav wrap" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <li><a href="<?php echo $base_url ?>/" itemprop="url"><span itemprop="title">Home</span></a></li>
    <li><a href="./" itemprop="url" class="pan-thispage"><span itemprop="title"><?php echo $title?></span></a></li>
  </ul>
</div>

<main id="main">
<article id="container">

  <header class="main-head wrap">
    <h1 class="main-ttl"><?php echo $title ?></h1>
    <p class="main-description">セマンティックでメンテナンスブルなHTMLマークアップ</p>
  </header>


    <div id="conts">
     
      <figure class="conts-main-v">
        <img src="<?php echo $base_url ?>/img/dummy/platinum.png" alt="メイン画像">
        <figcaption class="conts-main-v-dates">
          <time pubdate class="conts-main-v-release" datetime="2016-03-14">公開日：2016年3月14月</time>
          <time class="conts-main-v-update" datetime="2016-08-17">更新日：2016年8月17月</time>
        </figcaption>
      </figure>
      
      <nav class="conts-sec">
        <h2 class="conts-sec-ttl">目次</h2>
        <p>HTMLのマークアップについて。セマンティック and メンテナンスブルの問題について考える。</p>
        <ul class="list">
          <li><a href="#haikei" data-scroll>背景</a></li>
          <li><a href="#" data-scroll>基本設計</a></li>
          <li><a href="#" data-scroll>セマンティック</a>
            <ul class="list">
              <li><a href="#" data-scroll>HTML5エレメント</a></li>
              <li><a href="#" data-scroll>role属性</a></li>
              <li><a href="#" data-scroll>schema.org</a></li>
            </ul>
          </li>
          <li><a href="#" data-scroll>マークアップとレイアウトの葛藤</a></li>
        </ul>
      </nav>

      <section class="conts-sec" id="haikei">
        <h2 class="conts-sec-ttl">背景</h2>
        <p class="assist warning">readmeと同じ内容をあえて記載中</p>
        <p>正直にいうと、必ずしも「セマンティックでメンテナンスブルなマークアップ」を行う必要はありません。</p>
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

      <section class="conts-sec">

        <h2 class="conts-sec-ttl">基本設計：class/idの命名規則</h2>
        <p class="warning assist">本記述は、メモ段階のもので更新中です。</p>

        <h3 class="conts-m-ttl">利用目的が明確なものは、はじめに利用箇所を示すワードを入れる。</h3>
        <p>aタグ</p>
        <coad>.a-arrow / .bt-point</coad>
        <p>jsで利用</p>
        <coda>.js-xxxxxx or #js-xxxxx</coda>
        <p>conts内で利用</p>
        <coad>.conts-sec-ttl</coad>

      </section>
      
      <section class="conts-sec">

        <h2 class="conts-sec-ttl">conts-sec-ttl（contents-section-title）</h2>
        <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
        <h3 class="conts-l-ttl">conts-l-ttl（contents-large-title）</h3>
        <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
        <h4 class="conts-m-ttl">conts-m-ttl（contents-middle-title）</h4>
        <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
        <h5 class="conts-s-ttl">conts-s-ttl（contents-small-title）</h5>
        <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>

      </section>

      <footer class="conts-footer">
        <nav>
          <ul class="conts-footer-arrow">
            <li class="conts-footer-prev"><a href="<?php echo $base_url ?>/">Home</a></li>
            <li class="conts-footer-next"><a href="<?php echo $base_url ?>/speed/">Speed</a></li>
          </ul>
        </nav>
        <aside class="conts-footer-aside">
          <h3 class="conts-m-ttl">おまけ記事</h3>
          <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミー</p>
        </aside>
      </footer>
    </div>

</article>
</main>

<?php include ($inc_path."/inc/footer.php") ?>
<!-- add scripts -->
<script>console.log("page-script-<?php echo $title ?>");</script>
<!-- //add scripts -->
<?php include ($inc_path."/inc/foot.php") ?>