<!-- 緑のページタイトル部分 -->
<?php if(is_singular('column') || is_singular('news')) { ?>
<div class="page-bread other page-bread--column">
<?php } else { ?>
<div class="page-bread other">
<?php } ?>
  <!-- パンくずリスト -->
  <?php output_breadcrumb(); ?>


</div>
