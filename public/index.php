<?php
include ("function.php");
$metaTtl = $siteName;
$metaDesc = $siteDescription;
$body_class ="home";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">

		<section class="main__item conts">
			<header class="conts__head">
				<h1 class="conts__ttl">基本要素（セクションタイトル）</h1>
				<p class="conts__desc">基本要素の説明（ディスクリプション）</p>
			</header>
			<article class="conts__body">
				<div class="conts__img">
					<img src="<?php echo $base_url ?>/lib/img/dummy/bronze@2x.png" alt="dummy">
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repudiandae, nihil consectetur dignissimos facere, ipsa recusandae. Enim possimus distinctio, vel voluptatibus amet velit nisi iste quisquam tempore voluptates, doloremque impedit.</p>
			</article>
			<footer class="conts__foot">
				<p>セクションフッター</p>
			</footer>
		</section>

		<section class="main__item conts">
			<header class="conts__head">
				<h1 class="conts__ttl">inview</h1>
				<p class="conts__desc">site: https://github.com/protonet/jquery.inview</p>
			</header>
			<article class="conts__body">
				<p class="inview-target">画面内に入ると、classにinviewが追加されます。</p>
			</article>
		</section>

		<section class="main__item conts">
			<header class="conts__head">
				<h1 class="conts__ttl">colorbox</h1>
				<p class="conts__desc">site: http://www.jacklmoore.com/colorbox/</p>
			</header>
			<article class="conts__body">
				<p><a class="group1" href="<?php echo $base_url; ?>/lib/img/dummy/platinum.png" title="Me and my grandfather on the Ohoopee.">Grouped Photo 1</a></p>
				<p><a class="group1" href="<?php echo $base_url; ?>/lib/img/dummy/platinum.png" title="On the Ohoopee as a child">Grouped Photo 2</a></p>
				<p><a class="group1" href="<?php echo $base_url; ?>/lib/img/dummy/platinum.png" title="On the Ohoopee as an adult">Grouped Photo 3</a></p>
			</article>
		</section>

		<section class="main__item conts">
			<header class="conts__head">
				<h1 class="conts__ttl">magnific-popup</h1>
				<p class="conts__desc">site: http://dimsemenov.com/plugins/magnific-popup/<br>ajax表示使用不可_エラーが出力されます。</p>
			</header>
			<article class="conts__body">
				<a class='mfp-btn' href="#inline_content">Click Me (Inline HTML）</a>
				<div id='inline_content' class="mfp-dialog mfp-hide">
					<div class="conts__img">
						<img src="<?php echo $base_url ?>/lib/img/dummy/bronze@2x.png" alt="dummy">
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repudiandae, nihil consectetur dignissimos facere, ipsa recusandae. Enim possimus distinctio, vel voluptatibus amet velit nisi iste quisquam tempore voluptates, doloremque impedit.</p>
				</div>
			</article>
		</section>


		<section class="main__item conts">
			<header class="conts__head">
				<h1 class="conts__ttl">Swiper</h1>
				<p class="conts__desc">site:http://idangero.us/swiper/</p>
			</header>
			<article class="conts__body">
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
			<header class="conts__head">
				<h1 class="conts__ttl">Vue</h1>
				<p class="conts__desc">site: https://jp.vuejs.org/</p>
			</header>
			<article class="conts__body">
				<p>以下{{ message }}はVueで出力されています。</p>
				<div id="app">
					{{ message }}
				</div>
			</article>
		</section>

		<section class="main__item conts">
			<header class="conts__head">
				<h1 class="conts__ttl">セクションタイトル</h1>
				<p class="conts__desc">ディスクリプション</p>
			</header>
			<article class="conts__body">
				<div class="u-btn">
					<a href="#" class="u-btn__item"><span>標準ボタン</span></a>
					<a href="#" class="u-btn__item_size-s"><span>小さいボタン</span></a>
					<a href="#" class="u-btn__item_size-l"><span>大きいボタン</span></a>
					<a href="#" class="u-btn__item_point"><span>強調ボタン</span></a>
				</div>
			</article>
			<footer class="conts__foot">
				<p>セクションフッター</p>
			</footer>

		</section>

	</article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
