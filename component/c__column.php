<div class="column-slider">
  <div class="column-slider__title-wrapper">
    <p class="column-slider__title">COLUMN</p>
    <div class="column__swiper-pagination"></div>
  </div>
  <div class="column-slider__inner">
    <div class="column__to-archive">
      <a href="<?php echo esc_url(home_url('/column')); ?>" class="column__to-archive-link">一覧を見る</a>
    </div>
    <div class="column__swiper">
      <div class="swiper-wrapper">
        <?php
          $args = array(
            'post_type' => 'column',
            'paged' => get_query_var('page'),
            'order' => 'DESC',
            'posts_per_page' => 7,
          );

          $wp_query = new WP_Query($args);
          if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
              $wp_query->the_post();
              $post_id = get_the_ID();?>
        <div class="swiper-slide">
          <div class="column__item">
            <a href="<?php the_permalink(); ?>" class="column__link">
              <div class="column__head">
                <?php the_post_thumbnail('large', 'column__img'); ?>
              </div>
              <div class="column__body">
                <p class="column__title"><?php the_title() ?></p>
                <p class="column__date"><?php echo get_the_date('Y.m.d'); ?></p>
                <?php // 投稿に紐付いてるターム一覧を表示
                  $column_tag = 'column_tag'; // タクソノミーのスラッグを指定
                  $column_tag_terms = wp_get_object_terms($post_column->ID, $column_tag);
                  $terms = get_the_terms($post_id, $column_tag);
                  if(!empty($terms) && count($terms) > 0) {
                ?>
                <div class="column__category-wrapper">
                  <?php foreach($terms as $term) {
                    $tag_term_link = get_term_link($term->slug, $column_tag);
                    $tag_term_name = $term->name;
                  ?>
                  <span class="column__category"><?php echo $tag_term_name ?></span>
                  <?php } ?>
                </div>
                <?php } ?>
              </div>
            </a>
          </div>
        </div>
        <?php
            }
            wp_reset_postdata();
          }
        ?>
        <!-- <div class="swiper-slide">
          <div class="column__item">
            <a href="" class="column__link">
              <div class="column__head">
                <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
              </div>
              <div class="column__body">
                <p class="column__title">タイトル</p>
                <p class="column__date">2022.5.10</p>
                <div class="column__category-wrapper">
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="column__item">
            <a href="" class="column__link">
              <div class="column__head">
                <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
              </div>
              <div class="column__body">
                <p class="column__title">タイトル</p>
                <p class="column__date">2022.5.10</p>
                <div class="column__category-wrapper">
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="column__item">
            <a href="" class="column__link">
              <div class="column__head">
                <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
              </div>
              <div class="column__body">
                <p class="column__title">タイトル</p>
                <p class="column__date">2022.5.10</p>
                <div class="column__category-wrapper">
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="column__item">
            <a href="" class="column__link">
              <div class="column__head">
                <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
              </div>
              <div class="column__body">
                <p class="column__title">タイトル</p>
                <p class="column__date">2022.5.10</p>
                <div class="column__category-wrapper">
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="column__item">
            <a href="" class="column__link">
              <div class="column__head">
                <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
              </div>
              <div class="column__body">
                <p class="column__title">タイトル</p>
                <p class="column__date">2022.5.10</p>
                <div class="column__category-wrapper">
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="column__item">
            <a href="" class="column__link">
              <div class="column__head">
                <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
              </div>
              <div class="column__body">
                <p class="column__title">タイトル</p>
                <p class="column__date">2022.5.10</p>
                <div class="column__category-wrapper">
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="column__item">
            <a href="" class="column__link">
              <div class="column__head">
                <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
              </div>
              <div class="column__body">
                <p class="column__title">タイトル</p>
                <p class="column__date">2022.5.10</p>
                <div class="column__category-wrapper">
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                  <span class="column__category">カテ１</span>
                </div>
              </div>
            </a>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
