<?php
$pageTtl = "サンプルページ";
include ("../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="page-temp fullpage";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<style>
#sample{
  height: 100%;
  width:100%;
  background-color: #eee;
}

</style>

<div class="main__bg">
  <svg id="sample" viewbox="0 0 1000 1000">
    <path id="js-svg-mouth" d="M51.9 620.95L263.33 627.62L263.33 17.14L34.76 13.33L51.9 620.95Z"/>
  </svg>
</div>

<main class="main" id="fullpage">
  <ul id="menu">
    <li data-menuanchor="fpItem__1" class="active"><a href="#fpItem__1">First section</a></li>
    <li data-menuanchor="fpItem__2"><a href="#fpItem__2">Second section</a></li>
  </ul>

  <article>

    <div class="main__item">
      <div class="main__slide">
        Slide 1
      </div>
      <div class="main__slide"> Slide 2 </div>
      <div class="main__slide"> Slide 3 </div>
      <div class="main__slide"> Slide 4 </div>
    </div>
    <div class="main__item">Some section</div>
    <div class="main__item">Some section</div>
    <div class="main__item">
      Some section
      <br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test
      <br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>
      <br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>
      <br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>

    </div>
    <div class="main__item" data-anchor="item5">
      <br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>test<br>
    </div>

  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
