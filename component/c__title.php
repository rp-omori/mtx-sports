<!-- 緑のページタイトル部分 -->
<div class="page-title">

  <!-- パンくずリスト -->
  <?php output_breadcrumb(); ?>

  <div class="page-title__backgraund">
    <?php
      $url = $_SERVER['REQUEST_URI'];
      if (!strstr($url, 'treatment')):
    ?>
    <p><?php the_content(); ?></p>
    <?php endif;?>
  </div>

  <div class="page-title__main">
    <p><?the_title();?></p>
  </div>

</div>
