<?php if(!$pan == 0){ ?>
<div class="Pan" id="pan">
<ul class="Pan-row" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<li class="Pan-item"><a href="<?php echo $base_url ?>/" itemprop="url"><span itemprop="title">ホーム</span></a></li>
<?php

  //パンくずに階層がある場合は、設置箇所に以下を記述する
  //$panAry[] = array("/test/url/index.php","パンくず名");
  //$panAry[] = array("/test/url/index2.php","パンくず名2");
  if(!empty($panAry)){
    foreach ($panAry as $key => $value){
      echo '<li class="Pan-item"><a href="'.$base_url.$panAry[$key][0].'" itemprop="url"><span itemprop="title">'.$panAry[$key][1].'</span></a></li>';
      echo (PHP_EOL);
    }
  };

?>
<li class="Pan-item"><a href="<?php echo $my_url ?>" itemprop="url"><span itemprop="title"><?php echo $title?></span></a></li>
</ul>
</div>
<?php }; ?>