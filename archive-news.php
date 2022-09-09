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
  <?php get_template_part('component/c__title'); ?>
  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__bread_other'); ?>

  <!-- コンテンツ部分 -->
  <div id="news" class="news-archive">
    <div class="news-archive__container">
      <ul class="news-archive__list">
        <?php
          $args = [
            'post_type' => 'news',
            'paged' => get_query_var('page'),
            'order' => 'ASC',
            'posts_per_page' => 10
          ];
          $WP_post = new WP_Query($args);
          if ($WP_post->have_posts()) {
            while ($WP_post->have_posts()) {
              $WP_post->the_post();
        ?>
        <li class="news-archive__item">
          <a href="<?php the_permalink(); ?>" class="news-archive__link">
            <p class="news-archive__date"><?php the_time('Y.n.j') ?></p>
            <h2 class="news-archive__title"><?php the_title() ?></h2>
          </a>
        </li>
        <?php
            }
            // wp_reset_postdata();
          }
        ?>
      </ul>

      <div class="pagination">
        <?php echo paginate_links(array(
          'format' => '?page=%#%',
          'current' => max(1, get_query_var('page')),
          'total' => $WP_post->max_num_pages,
          'type' => 'list',
          'mid_size' => '1',
          'prev_text' => '',
          'next_text' => '',
        ));
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <?php get_template_part('component/footer__other'); ?>
  </div>

</main>

<?php get_footer(); ?>
