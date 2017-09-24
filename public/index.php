<?php
$pageTtl = "トップ";
include ("function.php");
$metaTtl = $siteName;
$metaDesc = $siteDescription;
$body_class ="home";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">

		<section class="main-v">
			<div class="main-v__row">
				<figure class="main-v__item">
					<img
					data-src="<?php echo $base_url ?>/lib/img/dummy/golden.png"
					data-retina="<?php echo $base_url ?>/lib/img/dummy/golden@2x.png"
					alt="dummy"
					class="u-img__max">
				</figure>
				<p class="main-v__desc">数秒後メインビジュアル用の画像が表示されます</p>
			</div>
		</section>

		<section class="main__item">
			<header class="main__head">
				<h1 class="main__ttl">基本要素（セクションタイトル）</h1>
				<p class="main__desc">基本要素の説明（ディスクリプション）</p>
			</header>
			<article class="main__body">
				<figure>
					<img
					data-src="<?php echo $base_url ?>/lib/img/dummy/bronze.png"
					data-retina="<?php echo $base_url ?>/lib/img/dummy/bronze@2x.png"
					alt="dummy"
					class="u-img__max">
				</figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repudiandae, nihil consectetur dignissimos facere, ipsa recusandae. Enim possimus distinctio, vel voluptatibus amet velit nisi iste quisquam tempore voluptates, doloremque impedit.</p>
			</article>
			<footer class="main__foot">
				<p>セクションフッター</p>
			</footer>
		</section>

		<section class="main__item">
			<header class="main__head">
				<h1 class="main__ttl">inview</h1>
				<p class="main__desc">site: https://github.com/protonet/jquery.inview</p>
			</header>
			<article class="main__body">
				<p class="inview-target">画面内に入ると、classにinviewが追加されます。</p>
			</article>
		</section>

		<section class="main__item">
			<header class="main__head">
				<h1 class="main__ttl">colorbox</h1>
				<p class="main__desc">site: http://www.jacklmoore.com/colorbox/</p>
			</header>
			<article class="main__body">
				<p><a class="group1" href="<?php echo $base_url; ?>/lib/img/dummy/platinum.png" title="画像タイトル１">Grouped Photo 1</a></p>
				<p><a class="group1" href="<?php echo $base_url; ?>/lib/img/dummy/platinum.png" title="画像タイトル２">Grouped Photo 2</a></p>
				<p><a class="group1" href="<?php echo $base_url; ?>/lib/img/dummy/platinum.png" title="画像タイトル３">Grouped Photo 3</a></p>
			</article>
		</section>

		<section class="main__item">
			<header class="main__head">
				<h1 class="main__ttl">magnific-popup</h1>
				<p class="main__desc">site: http://dimsemenov.com/plugins/magnific-popup/<br>ajax表示使用不可_エラーが出力されます。</p>
			</header>
			<article class="main__body">
				<a class='mfp-btn' href="#inline_content">Click Me (Inline HTML）</a>
				<div id='inline_content' class="mfp-dialog mfp-hide">
					<img
					data-src="<?php echo $base_url ?>/lib/img/dummy/bronze.png"
					data-retina="<?php echo $base_url ?>/lib/img/dummy/bronze@2x.png"
					alt="dummy"
					class="u-img__max">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repudiandae, nihil consectetur dignissimos facere, ipsa recusandae. Enim possimus distinctio, vel voluptatibus amet velit nisi iste quisquam tempore voluptates, doloremque impedit.</p>
				</div>
			</article>
		</section>


		<section class="main__item conts">
			<header class="main__head">
				<h1 class="main__ttl">Swiper</h1>
				<p class="main__desc">site:http://idangero.us/swiper/</p>
			</header>
			<article class="main__body">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">Slide 1</div>
						<div class="swiper-slide">Slide 2</div>
						<div class="swiper-slide">Slide 3</div>
						<div class="swiper-slide">Slide 4</div>
						<div class="swiper-slide">Slide 5</div>
						<div class="swiper-slide">Slide 6</div>
						<div class="swiper-slide">Slide 7</div>
						<div class="swiper-slide">Slide 8</div>
						<div class="swiper-slide">Slide 9</div>
						<div class="swiper-slide">Slide 10</div>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</article>
		</section>

		<section class="main__item conts">
			<header class="main__head">
				<h1 class="main__ttl">Vue</h1>
				<p class="main__desc">site: https://jp.vuejs.org/</p>
			</header>
			<article class="main__body">
				<p>以下{{ message }}はVueで出力されています。</p>
				<div id="app">
					{{ message }}
				</div>
			</article>
		</section>

		<section class="main__item conts">
			<header class="main__head">
				<h1 class="main__ttl">_unitシリーズ</h1>
				<p class="main__desc">ディスクリプション</p>
			</header>
			<article class="main__body">
				<h3 class="main__ttl_s">u-a</h3>
				<p>文章中の<a href="#" >指定なしリンク</a>です</p>
				<p>文章中の<a href="#" class="u-a">標準リンク</a>です</p>
				<p>文章中の<a href="#" class="u-a_icon">アイコン付きリンク</a>です</p>
				<p>文章中の<a href="#" target="_blank" class="u-a_icon">ブランクリンク</a>です</p>
				<p>文章中の<a href="#" target="_blank" rel="nofollow" class="u-a_icon">外部サイトリンク</a>です</p>
				<p>文章中の<a href="dummy.pdf" target="_blank" class="u-a_icon">PDFアイコンリンク</a>です</p>

			</article>
			<article class="main__body">
				<h3 class="main__ttl_s">u-btn</h3>
				<a href="#" class="u-btn"><span>標準ボタン</span></a>
				<a href="#" class="u-btn_s"><span>小さいボタン</span></a>
				<a href="#" class="u-btn_l"><span>大きいボタン</span></a>
				<a href="#" class="u-btn_point"><span>強調ボタン</span></a>
				<a href="#" class="u-btn_point_s"><span>小さい強調ボタン</span></a>
				<a href="#" class="u-btn_point_l"><span>大きい強調ボタン</span></a>
			</article>
			<article class="main__body">
				<h3 class="main__ttl_s">u-img</h3>
				<img
				data-src="<?php echo $base_url ?>/lib/img/dummy/bronze.png"
				data-retina="<?php echo $base_url ?>/lib/img/dummy/bronze@2x.png"
				alt="dummy"
				class="u-img__max">
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
