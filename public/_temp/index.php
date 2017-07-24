<?php include ("../function.php");
$title = "ページタイトル";
$metaTtl = $title."-".$siteName;
$metaDesc = $title."のページです。".$siteDescription;
$body_class ="temp";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">

		<?php
		$panAry[] = array($base_url."/index.php","パンくず名");
		include ($inc_path."/lib/inc/pan.php");
		?>

		<section class="main__item conts">
			<header class="conts__head">
				<h1 class="conts__ttl">セクションタイトル</h1>
				<p class="conts__desc">ディスクリプション</p>
			</header>
			<article class="conts__body">
				<div class="conts__img">
					<img src="<?php echo $base_url ?>/lib/img/dummy/golden@2x.png" alt="dummy">
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores repudiandae, nihil consectetur dignissimos facere, ipsa recusandae. Enim possimus distinctio, vel voluptatibus amet velit nisi iste quisquam tempore voluptates, doloremque impedit.</p>
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
