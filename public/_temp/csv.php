<?php
$pageTtl = "csvサンプルページ";
include ("../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="temp csv";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">

    <header class="main__header main-header">
      <div class="main-header__bg"></div>
      <?php
      $panAry[] = array($base_url ,"パンくず名");
      include ($inc_path."/lib/inc/pan.php");
      ?>
      <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
      <p class="main-header__desc">ディスクリプション</p>
    </header>

    <section class="main__body">

      <div id="csv_output">読み込み中</div>
      <table id="app" style="border:1px solid #000;">
        <tr v-for="(line,index) in app"  v-if="index < 1">
          <th v-for="(value, key,index) in line">{{ key }}</th>
        </tr>
        <tr v-for="line in app">
          <td v-for="(value, key, index) in line">{{ value }}</td>
        </tr>
      </table>

    </section>

  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
