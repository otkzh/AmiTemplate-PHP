<?php
$title = "サンプルページ";
include ("../function.php");
$metaTtl = $title."-".$siteName;
$metaDesc = $title."のページです。".$siteDescription;
$body_class ="temp sample";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
	<article class="main__row">

		<?php
		$panAry[] = array($base_url ,"パンくず名");
		include ($inc_path."/lib/inc/pan.php");
		?>

		<section class="main__item">
			<header class="main__head">
				<h1 class="main__ttl">セクションタイトル</h1>
				<p class="main__desc">ディスクリプション</p>
			</header>
			<article class="main__body">
				<figure>
					<img src="<?php echo $base_url ?>/lib/img/dummy/golden@2x.png" alt="dummy" class="u-img__max">
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
