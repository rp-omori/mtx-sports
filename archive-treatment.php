<?php
/**
 * Template Name: treatment
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>

<main class="main">

  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__bread_other'); ?>

  <!-- コンテンツ部分 -->
  <div id="facility" class="facility-contents">

    <div class="facility-top-wrapper">
      <div class="facility-top">
        <p>ABOUT US</p>
      </div>
    </div>
    <?php get_template_part('component/footer__other'); ?>
  </div>
</main>

<?php get_footer(); ?>
