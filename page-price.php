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
    <div class="contents-box">
      <div class="contents-box_cat">
        <p>診療</p>
      </div>
      <div class="contents-box_menu">
        <div class="menu_inner">
          <div class="menu_inner_name">
            <p>初診</p>
          </div>
          <div class="menu_inner_minute">
            <p>20分</p>
          </div>
          <div class="menu_inner_price">
            <p>¥5,000</p>
          </div>
        </div>
        <div class="menu_inner">
          <div class="menu_inner_name">
            <p>2回目以降</p>
          </div>
          <div class="menu_inner_minute">
            <p>10分</p>
          </div>
          <div class="menu_inner_price">
            <p>¥3,000</p>
          </div>
        </div>
      </div>
      <div class="contents-box_caution">
        <a href="" class="contents-box_caution_inner">
          <p>※治療を行なった場合は、診察料を頂戴しません。</p>
        </a>
      </div>
    </div>
  </div>

  <!-- footer手前の２つ並びのメニュー -->
  <?php get_template_part('component/footer__other'); ?>

</main>

<?php get_footer(); ?>
