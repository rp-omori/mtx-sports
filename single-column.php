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
  <div id="column-article" class="column-article">
    <div class="column-triangle">
      <img src="<?php echo $rootDir ?>/images/top/bg-triangle-r.svg" alt="">
    </div>
    <div class="column-article__container">
      <div class="column-article__wrapper">
        <div class="column-article__main">
          <div class="column-article__inner">
            <p class="column-article__date"><?php echo get_the_date("Y.m.d"); ?></p>
            <h1 class="column-article__title"><?php the_title(); ?></h1>
            <div class="column-article__tags-wrapper">

              <?php //category
                $terms = get_the_terms($post->ID,'column_cat');
                foreach( $terms as $term ) : ?>
                <span class="column-article__tags column-article__tags--category">
                <?php echo esc_html($term->name); ?>
                </span>
                <?php $column_cat_term = $term;
                endforeach; ?>

              <?php //tag
                $terms = get_the_terms($post->ID,'column_tag');
                foreach( $terms as $term ) : ?>
                <span class="column-article__tags column-article__tags--tag">
                <?php echo esc_html($term->name); ?>
                </span>
                <?php endforeach; ?>
            </div>
            <div class="column-article__img">
                <?php if(has_post_thumbnail()):
                  the_post_thumbnail( 'large');
                else: ?>
                  <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/09/ogp.png" alt="">
                <?php endif; ?>
            </div>
            <div class="column-article__lead">
              <?php if(get_field('column_lead')): ?><p><?php the_field('column_lead') ?></p><?php endif; ?>
            </div>
            <?php the_content(); ?>

          </div>
        </div>
        <div class="column-article__nav">
          <div class="search-box-wrapper">
            <?php get_search_form(); ?>
          </div>
          <div class="column-article__nav-wrapper">
            <div class="column-article__nav-title-wrapper">
              <p class="column-article__nav-title">最新記事</p>
              <p class="column-article__nav-label">NEW</p>
            </div>
            <ul class="column-article__latest">
            <?php
            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
            $my_query = new WP_Query();

            $column_items = array(
                'paged' => $paged,
                'post_type' => 'column',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => '3',
            );
            $my_query->query($column_items);

            if ($my_query->have_posts()) :
              while ($my_query->have_posts()) : $my_query->the_post();
            ?>
              <li class="column-article__latest-item">
                <a href="<?php the_permalink(); ?>" class="column-article__latest-link">
                  <div class="column-article__latest-img">
                    <?php if(has_post_thumbnail()):
                      the_post_thumbnail( 'large');
                    else: ?>
                      <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/09/ogp.png" alt="">
                    <?php endif; ?>
                  </div>
                  <div class="column-article__latest-body">
                    <p class="column-article__latest-title"><?php the_title(); ?></p>
                    <?php if(get_field('column_lead')): ?><p class="column-article__latest-text"><?php the_field('column_lead') ?></p><?php endif; ?>
                    <div class="column-article__latest-other">
                      <p class="column-article__latest-date"><?php echo get_the_date("Y.m.d"); ?></p>
                      <p class="column-article__latest-more">続きを読む</p>
                    </div>
                  </div>
                </a>
              </li>
            <?php endwhile; endif; wp_reset_postdata();?>
            </ul>
          </div>
          <!-- <div class="column-article__nav-wrapper">
            <div class="column-article__nav-title-wrapper">
              <p class="column-article__nav-title">カテゴリー</p>
              <p class="column-article__nav-label">CATEGORY</p>
            </div>
            <ul class="column-article__category">
              <?php
              $column_cat_terms = get_terms('column_cat','hide_empty=0');
              $count = 1;
              foreach($column_cat_terms as $term): ?>
              <li class="column-article__category-item">
                <a href="<?php echo esc_url(get_term_link($term)); ?>" class="column-article__category-link">
                  <p class="column-article__category-text"><?php echo esc_html($term->name); ?></p>
                  <div class="column-article__category-circle"><img src="<?php echo $rootDir ?>/images/icon/icon-arrow-circle-right--white.svg" alt=""></div>
                </a>
              </li>
              <?php $count++; endforeach; ?>
            </ul>
          </div> -->
          <div class="column-article__nav-wrapper">
            <div class="column-article__nav-title-wrapper">
              <p class="column-article__nav-title">タグ一覧</p>
              <p class="column-article__nav-label"></p>
            </div>
            <ul class="column-article__tag-list">
              <?php
              $column_tag_terms = get_terms('column_tag','hide_empty=0');
              $count = 1;
              foreach($column_tag_terms as $term): ?>
              <li class="column-article__tag-list-item">
                <a href="<?php echo home_url('/column/?column_tags%5B%5D=' . $term->slug) . '#column__search-area-body'; ?>" class="column-article__tag-list-link">
                  <p class="column-article__tag-list-text"><?php echo esc_html($term->name); ?></p>
                </a>
              </li>
              <?php $count++; endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
      $my_query = new WP_Query();

      $column_items = array(
          'paged' => $paged,
          'post_type' => 'column',
          'order' => 'DESC',
          'orderby' => 'date',
          'tax_query' => array(
            array(
            'taxonomy' => 'column_cat',
            'field'    => 'slug',
            'terms'    => $column_cat_term->slug,
            )
          ),
          'posts_per_page' => '3',
      );
      $my_query->query($column_items);

      if ($my_query->have_posts()) : ?>
    <div class="column__related">
      <div class="column__related-inner">
        <div class="column__heading-wrapper column__heading-wrapper--related">
          <span class="column__heading-label">RELATED</span>
          <h2 class="column__heading">関連記事</h2>
        </div>
        <ul class="column__related-list">
          <?php
              while ($my_query->have_posts()) : $my_query->the_post();
            ?>
          <li class="column__related-item">
            <a href="<?php the_permalink(); ?>" class="column__related-link">
              <div class="column__related-img">
                <?php if(has_post_thumbnail()):
                  the_post_thumbnail( 'large');
                else: ?>
                  <img src="<?php echo home_url(); ?>/wp-content/uploads/2022/09/ogp.png" alt="">
                <?php endif; ?>
              </div>
              <div class="column__related-body">

              <?php //tag
                $terms = get_the_terms($post->ID,'column_tag');
                foreach( $terms as $term ) : ?>
                  <span class="column__related-label">
                    <?php echo esc_html($term->name); ?>
                  </span>
              <?php endforeach; ?>

                <p class="column__related-title"><?php the_title();?></p>
                <p class="column__related-text"><?php the_field('column_lead') ?></p>
              </div>
            </a>
          </li>
            <?php endwhile; ?>

        </ul>
      </div>
    </div>
    <?php endif; wp_reset_postdata(); ?>

    <?php get_template_part('component/footer__other'); ?>
  </div>

</main>

<?php get_footer(); ?>
