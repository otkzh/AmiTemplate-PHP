<?php include ("function.php");
$title = "404";
$metaTtl = $title."-".$siteName;
$metaDesc = $title."のページです。".$siteDescription;
$body_class ="404";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">

	<?php  include ($inc_path."/lib/inc/pan.php"); ?>

		<section class="main__item conts">
			<header class="conts__head">
				<h1 class="conts__ttl">ページタイトル</h1>
				<p class="conts__desc">ディスクリプション</p>
			</header>
			<article class="conts__body">
				<p>コピー</p>
			</article>
			<footer class="conts__foot">
				<p>contsフッター</p>
			</footer>
		</section>

	</article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
