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
  <?php get_template_part('component/c__title'); ?>
  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__bread_other'); ?>

  <!-- コンテンツ部分 -->
  <div id="column" class="column">
    <div class="column__wrapper">
      <div class="column__recommend">
        <div class="column__heading-wrapper">
          <span class="column__heading-label">RECOMMEND</span>
          <h2 class="column__heading">おすすめ記事</h2>
        </div>
        <div class="column__list-wrapper">
          <ul class="column__list">
            <?php
              // $post_id = 341;
              $post_id = get_page_by_path('column');
              if(get_field('recommend_column', $post_id->ID)):
                $count = 0;
                $arrayLength = count(get_field('recommend_column', $post_id->ID));
                if($arrayLength > 3) {
                    $arrayLength = 3;
                };
                while($count < $arrayLength): ?>
              <?php
                $args = [
                  'column_article' => get_field('recommend_column', $post_id->ID)[$count],
                ];
                get_template_part('component/c__column_article', null, $args); ?>
                <?php
                    $count++;
                endwhile;
            endif; ?>
          </ul>
        </div>
      </div>
      <div class="column__lineup">
        <div class="column__heading-wrapper">
          <span class="column__heading-label">ALL LINE UP</span>
          <h2 class="column__heading">全てのコラム記事</h2>
        </div>
        <div class="search-box-wrapper">
          <!-- <div class="search-box">
            <input type="text" class="search-box__input" placeholder="キーワードで検索">
            <button class="search-box__button"><img src="<?php echo $rootDir ?>/images/icon/icon-search.svg" alt=""></button>
          </div> -->
          <?php get_search_form(); ?>
        </div>
        <div class="column__search-area">
          <!-- <div class="column__search-area-head">
            <div class="column__search-area-head-inner">
              <div class="column__search-area-list">
                <a href="" class="column__search-area-link">
                  <p class="column__search-area-text">スポーツによる<br class="pc">関節の怪我・痛み</p>
                </a>
                <a href="" class="column__search-area-link">
                  <p class="column__search-area-text">加齢による関節の痛み</p>
                </a>
                <a href="" class="column__search-area-link">
                  <p class="column__search-area-text">子どもの成長による痛みと<br>運動機能の悩み</p>
                </a>
              </div>
            </div>
          </div> -->
          <div class="column__search-area-body">
            <p class="column__tags-heading">＃タグで絞り込む</p>
            <div class="column__tags">
              <div class="column__tags-list">
              <?php
              $terms = get_terms('column_tag','hide_empty=0');
              $count = 1;
              foreach ( $terms as $term ) : ?>
                <div class="column__tags-wrapper">
                  <input id="<?php echo $count ?>" type="checkbox" class="column__tags-check" name="columns">
                  <label for="<?php echo $count ?>" class="column__tags-label"><span><?php echo $term->name; ?></span></label>
                </div>
                <?php $count++; endforeach; ?>
              </div>
            </div>

            <div class="column__tags-button">
              <button class="btn btn--green">SEARCH</button>
            </div>
          </div>
        </div>

        <?php if ( have_posts() ) : ?>
        <div class="column__list-wrapper">
          <ul class="column__list">
            <?php
            while ( have_posts() ) : the_post();
            $post_column = $post; ?>
            <?php get_template_part('component/c__column_article'); ?>
            <?php endwhile; ?>
          </ul>
        </div><?php endif; ?>
      </div>
    </div>
    <?php get_template_part('component/footer__other'); ?>
  </div>
</main>

<?php get_footer(); ?>
