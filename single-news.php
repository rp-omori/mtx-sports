<?php
/**
 * Template Name: news
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>

<main class="main">
  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__bread_other'); ?>

  <!-- コンテンツ部分 -->
  <div id="news" class="news-article">
    <div class="news-triangle">
      <img src="<?php echo $rootDir ?>/images/top/bg-triangle-r.svg" alt="">
    </div>
    <div class="news-article__container">
      <div class="news-article__wrapper">
        <div class="news-article__inner">
          <p class="news-article__date"><?php the_time('Y.n.j') ?></p>
          <h2 class="news-article__title"><?php the_title() ?></h2>
          <?php if(the_post_thumbnail()) :?>
          <div class="news-article__img">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title() ?>">
          </div>
          <?php endif ?>
          <div class="news-article__text"><?php the_content() ?></div>
        </div>
      </div>
      <div class="news-article__back">
        <a href="<?php echo esc_url(home_url('/news')); ?>" class="news-article__back-link">
          一覧を見る
        </a>
      </div>
    </div>
    <?php get_template_part('component/footer__other'); ?>
  </div>

</main>

<?php get_footer(); ?>
