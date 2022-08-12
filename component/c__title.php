<!-- 緑のページタイトル部分 -->
<div class="page-title">

  <!-- パンくずリスト -->
  <?php output_breadcrumb(); ?>

  <div class="page-title__backgraund">
    <p><?php the_content(); ?></p>
  </div>

  <div class="page-title__main">
    <p><?the_title();?></p>
  </div>

</div>
