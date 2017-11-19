<?php
$pageTtl = "フォームサンプルページ";
include ("../../function.php");
$metaTtl = $pageTtl."-".$siteName;
$metaDesc = $siteDescription;
$body_class ="";
include ($inc_path."/lib/inc/head.php");
include ($inc_path."/lib/inc/header.php");
?>

<main class="main">
  <article class="main__row">

    <header class="main__header main-header">
      <div class="main-header__bg"></div>
      <div class="main-header__row">
        <h1 class="main-header__ttl"><?php echo $pageTtl; ?></h1>
        <p class="main-header__desc">フォームのサンプルデザイン</p>
      </div>
    </header>
    <?php
    $panAry[] = array("/_sample" ,"サンプル集");
    include ($inc_path."/lib/inc/pan.php");
    ?>

    <section class="main__item">

      <h2 class="u-ttl_l">フォーム要素サンプル</h2>
      <p>送信ボタンを押しても送信されません。</p>

      <label for="text-id">テキスト入力欄</label>
      <input type="text" name="text-label" value="テキスト入力欄" id="text-id">

      <br>

      <label for="password-id">パスワード入力欄</label>
      <input type="password" name="" value="password" id="password-id">

      <br>

      <label for="textarea-id">複数行の入力欄</label>
      <textarea name="" id="textarea-id">複数行のテキスト入力欄</textarea>

      <br>

      <fieldset>
        <legend>ラジオボタン</legend>
        <input type="radio" name="radio-name" value="val1" checked="checked" id="radio-id-1">
        <label for="radio-id-1">その1</label>
        <input type="radio" name="radio-name" value="val2" id="radio-id-2">
        <label for="radio-id-2">その2</label>
        <input type="radio" name="radio-name" value="val3" id="radio-id-3">
        <label for="radio-id-3">その3</label>
      </fieldset>

      <br>

      <fieldset>
        <legend>チェックボックス</legend>
        <input type="checkbox" name="check-name" value="val1" id="checkbox-id-1">
        <label for="checkbox-id-1">その1</label>　
        <input type="checkbox" name="check-name" value="val2" id="checkbox-id-2">
        <label for="checkbox-id-2">その2</label>　
        <input type="checkbox" name="check-name" value="val3" id="checkbox-id-3">
        <label for="checkbox-id-3">その3</label>
      </fieldset>
      <br>

      <label for="select-id">プルダウンメニュー</label>
      <select name="" id="select-id">
        <option value="val1">選択肢 その1</option>
        <option value="val2">選択肢 その2</option>
        <option value="val3">選択肢 その3</option>
        <option value="val4">選択肢 その4</option>
        <option value="val5">選択肢 その5</option>
      </select>

      <br>

      <label for="file-id">ファイル選択</label>
      <input type="file" name="" id="file-id">

      <br>

      <div class="u-btn">
        <a href="" class="u-btn__item_point_s">送信する</a>
        <a href="" class="u-btn__item_s">戻る</a>
      </div>

    </section>

  </article>
</main>

<?php  include ($inc_path."/lib/inc/pagetop.php"); ?>
<?php  include ($inc_path."/lib/inc/footer.php"); ?>
<?php  include ($inc_path."/lib/inc/foot.php"); ?>
