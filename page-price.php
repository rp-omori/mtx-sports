<?php
/**
 * Template Name: privacy-policy
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>


<main class="main">

  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__title'); ?>

  <!-- コンテンツ部分 -->


  <div class="price-contents">

    <div class="contents-box pc">

      <?php if(have_rows('price_table')): ?>
        <?php while(have_rows('price_table')): the_row(); ?>
          <?php the_sub_field('price_table_pc'); ?>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>

    <div class="contents-box sp">

      <?php if(have_rows('price_table')): ?>
        <?php while(have_rows('price_table')): the_row(); ?>
          <?php the_sub_field('price_table_sp'); ?>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>

  </div>

  <!-- footer手前の２つ並びのメニュー -->
  <?php get_template_part('component/footer__other'); ?>

</main>

<?php get_footer(); ?>

<style>
  td{
    vertical-align: middle;
    padding: 15px 5px;
  }

  td span {
  }

</style>
