<?php
/**
 * Template Name: column
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>

<main class="main">

  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__bread_other'); ?>

  <!-- コンテンツ部分 -->
  <div id="column" class="column-archive">
    <?php get_template_part('component/footer__other'); ?>
  </div>
</main>

<?php get_footer(); ?>
