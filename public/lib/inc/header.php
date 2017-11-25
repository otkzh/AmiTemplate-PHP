<header class="header">
  <div class="header__row">
    <div class="header__bg"></div>
    <h1 class="header__logo">
      <a href="<?php echo $base_url ?>/"><?php echo $metaTtl ?></a>
    </h1>
    <nav class="header__gnav gnav">
      <ul class="gnav__row">
        <li class="gnav__item_home">
          <a href="<?php echo $base_url ?>/" class="gnav__link">home</a>
        </li>
        <li class="gnav__item_sample">
          <a href="<?php echo $base_url ?>/_sample/" class="gnav__link">sample</a>
        </li>
        <li class="gnav__item_layout">
          <a href="<?php echo $base_url ?>/_layout/" class="gnav__link">layout</a>
        </li>
        <li class="gnav__item_styleguide gnav-deep">
          <label class="gnav__link">styleguide</label>

          <nav class="gnav-deep__nav">
            <ul class="gnav-deep__row">
              <li class="gnav-deep__item">
                <a href="<?php echo $base_url ?>/_styleguide/"  class="gnav-deep__link">styleguideTop</a>
              </li>
              <li class="gnav-deep__item">
                <a href="#" class=" class="gnav-deep__link"">dummy</a>
              </li>
              <li class="gnav-deep__item">
                <a href="#" class="gnav-deep__link">長いページ名ダミーダミーダミーダミーダミー</a>
              </li>
            </ul>
          </nav>

        </li>
        <li class="gnav__item gnav-deep">
          <label class="gnav__link">menu</label>

          <nav class="gnav-deep__nav">
            <ul class="gnav-deep__row">
              <li class="gnav-deep__item">
                <a href="#" class="gnav-deep__link">dummy</a>
              </li>
              <li class="gnav-deep__item">
                <a href="#" class="gnav-deep__link">dummy</a>
              </li>
              <li class="gnav-deep__item">
                <a href="#" class="gnav-deep__link">dummy</a>
              </li>
            </ul>
          </nav>

        </li>
        <li class="gnav__item_contact">
          <a href="#" class="gnav__link">contact</a>
        </li>
      </ul>
    </nav>
    <label class="header__menubar menubar">
      <div class="menubar__row">
        <span class="menubar__item"></span>
        <span class="menubar__item"></span>
        <span class="menubar__item"></span>
      </div>
    </label>
  </div>
</header>
