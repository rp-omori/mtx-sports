<!-- 緑のページタイトル部分 -->
<div class="page-title">

  <!-- パンくずリスト -->
  <?php output_breadcrumb(); ?>

  <div class="page-title__backgraund">
    <?php
      $url = $_SERVER['REQUEST_URI'];
      if (!strstr($url, 'services')):
    ?>
      <?php if (strstr($url, 'news')): ?>
        <p>NEWS</p>
      <?php elseif(strstr($url, 'column')): ?>
        <p class="page-title__treatments">COLUMN</p>
      <?php elseif(strstr($url, 'message')):?>
        <p><?php the_content(); ?></p>
      <?php else:?>
        <!-- <p><?php the_content(); ?></p> -->
      <?php endif;?>
    <?php else:?>
    <p class="page-title__treatments">TREATMENTS</p>
    <?php endif;?>
  </div>

  <div class="page-title__main">
    <?php if (strstr($url, 'news')): ?>
      <p>お知らせ一覧</p>
    <?php elseif(strstr($url, 'column')): ?>
      <p>コラム一覧</p>
    <?php else:?>
      <p><?the_title();?></p>
    <?php endif; ?>
  </div>

</div>
