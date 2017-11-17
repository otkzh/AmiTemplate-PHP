<?php
$pageTtl = "csvサンプルページ";
include ("../../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="csv";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">

    <header class="main__header main-header">
      <div class="main-header__bg"></div>
      <?php
      $panAry[] = array($base_url."/_template/" ,"テンプレート");
      include ($inc_path."/lib/inc/pan.php");
      ?>
      <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
    </header>

    <section class="main__body" id="app">
      <p>Ajaxを利用して非同期でCSVファイルを取得</p>
      <p>サンプルCSVは【<a href="http://jusyo.jp/" target="_blank" class="u-icon__link">住所.jp</a>】から埼玉住所をピックアップ（3643件）</p>

      <hr>

      <div id="csv_output">読み込み中</div>

      <nav>
        <ul class="u-pagination mb3">
          <li class="u-pagination__item">
            <label @click="first" class="u-pagination__link_first"><span>&laquo;</span></label>
          </li>
          <li class="u-pagination__item">
            <label @click="prev" class="u-pagination__link_prev"><span>&lt;</span></label>
          </li>
          <li class="u-pagination__item" v-for="i in displayPageRange" :class="{active: i-1 === currentPage}">
            <label @click="pageSelect(i)" class="u-pagination__link">{{ i }}</label>
          </li>
          <li class="u-pagination__item">
            <label @click="next" class="u-pagination__link_next"><span>&gt;</span></label>
          </li>
          <li class="u-pagination__item">
            <label @click="last" class="u-pagination__link_last"><span>&raquo;</span></label>
          </li>
        </ul>
      </nav>

      <table class="u-table">
        <tr v-for="(line,index) in displayItems"  v-if="index < 1" class="u-table_th">
          <th v-for="(value, key,index) in line">{{ key }}</th>
        </tr>
        <tr v-for="line in displayItems">
          <td v-for="(value, key, index) in line"><span>{{ key }}</span>{{ value }}</td>
        </tr>
      </table>

    </section>

  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
