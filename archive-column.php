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


            <?php
              // $post_id = 341;
              $post_id = get_page_by_path('column');
              $recommend_column = get_field('recommend_column', $post_id->ID);
              $recommend_column_ids = array_column($recommend_column, 'ID');
                $recommended_args = array(
                  'post_type' => 'column',
                  'order' => 'DESC',
                  'posts_per_page' => 3,
                  'post__in' => $recommend_column_ids,
                );

                $recommended_wp_query = new WP_Query($recommended_args);
                if ($recommended_wp_query->have_posts()) { ?>
                <div class="column__list-wrapper" id="column__list-wrapper">
                  <ul class="column__list">
                  <?php
                    while ($recommended_wp_query->have_posts()) {
                      $recommended_wp_query->the_post();
                      $post_id = get_the_ID();
                      ?>
                    <?php get_template_part('component/c__column_article'); ?>
                    <?php } ?>
                  </ul>
                </div>
                <?php } ?>

      </div>

      <?php

        // $args = array(
        //     'post_type' => 'column',
        //     'posts_per_page' => -1,
        //     'order' => 'DESC',
        // );
        // $WP_post = new WP_Query($args);

        // // 最終的に格納する配列
        // $PostData = [];
        // $i = 0;

        // // データ編集
        // if($WP_post -> have_posts()){
        //   while($WP_post -> have_posts()) {
        //     ++$i;
        //     $my_post = [];
        //     $WP_post->the_post();
        //     $my_post['title'] = get_the_title();
        //     $my_post['thumbnail'] = get_the_post_thumbnail_url($post->ID, 'full');
        //     $my_post['url'] = get_permalink();
        //     $my_post['date'] = get_the_date('Y.m.d');
        //     $my_post['id'] = $i;

        //     //タクソノミー取得
        //     $post_id = get_the_ID();
        //     $column_term = get_the_terms($post_id, 'column_tag');
        //     if ($column_term == true) {
        //         $my_post['column_tag'] = array_column($column_term, 'name');
        //     } else {
        //         $my_post['column_tag'] = [];
        //     }

        //     $PostData[] = $my_post;
        //   }
        // }
        // wp_reset_postdata();
        // $WP_post_json = json_encode($PostData);

        // var_dump($WP_post_json);
      ?>

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
          <form class="column__search-area-body" method="GET" action="<?php echo esc_url(home_url('/column#column__search-area-body')); ?>" id="column__search-area-body">
            <p class="column__tags-heading">＃タグで絞り込む</p>
            <div class="column__tags">
              <div class="column__tags-list">
                <?php
                  if (isset($_GET['column_tags'])) {
                    $params = $_GET['column_tags'];
                  }

                  $column_arr = [];
                  $column_tax = 'column_tag';
                  $columnargs = array(
                      'hide_empty' => false
                  );
                  $column_terms = get_terms( $column_tax , $columnargs );

                  foreach($column_terms as $term){
                    $checked = (is_array($params) && in_array($term->slug, $params)) ? 'checked' : '';
                    ?>
                      <div class="column__tags-wrapper">
                        <input class="column__tags-check" type="checkbox" name="column_tags[]" value="<?php echo $term->slug ?>" id="<?php echo $term->slug ?>" <?php echo esc_attr($checked) ?>>
                        <label for="<?php echo $term->slug ?>" class="column__tags-label"><?php echo $term->name ?></label>
                      </div>
                  <?php } ?>
              </div>
            </div>

            <div class="column__tags-button">
              <button class="btn btn--green" id="tag_search">SEARCH</button>
            </div>
          </form>
        </div>

          <?php
          $args = array(
            'post_type' => 'column',
            'paged' => get_query_var('page'),
            'order' => 'DESC',
            'posts_per_page' => 6,
          );

          if (isset($_GET['column_tags'])) {
            $args['tax_query'] = [
              'relation' => 'OR',
              [
                'taxonomy' => $column_tax,
                'field' => 'slug',
                'terms' => $params,
              ]
            ];
          }

          if (is_search()) {
            $args['s'] = $_GET['s'];
          }

          $wp_query = new WP_Query($args);
          if ($wp_query->have_posts()) { ?>
          <div class="column__list-wrapper" id="column__list-wrapper">
            <ul class="column__list">
            <?php
              while ($wp_query->have_posts()) {
                $wp_query->the_post();
                $post_id = get_the_ID();
                 ?>
              <?php get_template_part('component/c__column_article'); ?>
              <?php } ?>
            </ul>
          </div>
          <?php } ?>

        <!-- <div class="column__list-wrapper">
          <ul class="column__list column__list__deploy">
          </ul>
        </div> -->



      </div>
      <div class="pagination">
        <?php echo paginate_links(array(
          'format' => '?page=%#%',
          'current' => max(1, get_query_var('paged')),
          'total' => $wp_query->max_num_pages,
          'type' => 'list',
          'mid_size' => '1',
          'prev_next' => false,
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


<script>
      /* 初期段階の表示の制御 */
      {

        window.addEventListener('load', function() {
            init()
            linkCreate();
        })

        /* JSONの形として排出 */
        const getWPData = () => {
            const data = JSON.parse('<?php echo $WP_post_json; ?>');
            console.log(data);
            return data;
        }

        const init = () => {
          const containerArea = document.querySelector('.column__list__deploy')
          let dataArr = getWPData()
          let filterArticleArr = [] // "事例"絞り込み用
          let CheckboxArr = [] // チェックボックスでの絞り込み用
          let displayFlag = false

          /* ページロード時の初期表示作成 */
          const createArticleList = (type) => {
            let articleList = ''

            updateListArr().forEach(item => {
              articleList += `
                <li class="column__item">
                  <a href="${item.url}" class="column__link">
                    <div class="column__head">
                      <img src="${item.thumbnail}" alt="">
                    </div>
                    <div class="column__body">
                      <h3 class="column__title">${item.title}</h3>
                      <p class="column__date">${item.date}</p>
                        <div class="column__category-wrapper">
                `
              if (item.column_term && item.column_term.length !== 0) {
                  item.column_term.forEach(column_termItem => {
                      articleList += `
                        <span class="column__category">${column_termItem}</span>
                                              `
                  })
              }

                articleList += `
                    </div>
                  </a>
                </li>
                    `
            })

            containerArea.innerHTML = articleList

            // if (type === 'insert') {
            //     containerArea.insertAdjacentHTML('afterbegin', articleList)
            // } else {
            //     containerArea.innerHTML = articleList
            // }

          }

            // /* 絞り込みボタンを押したときの挙動 */
            // const doCheckItem = () => {
            //     const checkboxInput = document.querySelectorAll('input[name="columns"]')
            //     const columnCheckList = document.querySelectorAll('.column__tags-label')
            //     //タグの絞り込み
            //     checkboxInput.forEach(checkItem => {
            //         checkItem.addEventListener("change", () => {
            //             if (checkItem.checked) {
            //                 CheckboxArr.push(checkItem.value)
            //                 console.log(CheckboxArr)
            //             } else {
            //                 CheckboxArr = CheckboxArr.filter(item => {
            //                   console.log(CheckboxArr)
            //                     return item !== checkItem.value
            //                 })
            //             }
            //         })
            //     })

            //     // 絞り込みボタン押下時
            //     const tagSearchButton = document.getElementById('tag_search')
            //     tagSearchButton.addEventListener('click', () => {
            //       filterItems();
            //       linkCreate();
            //     })

            // }


            const filterItems = () => {
              filterArticleArr = dataArr.filter(data => {return CheckboxArr.reduce((prev, current) => {return prev || data.column_tag.includes(current)}, false)})
              createArticleList();
              linkCreate();
            }


            /*
              * @summary 絞り込み検索で生成した配列が空だったら全件配列、そうでなければ絞り込み検索で生成した配列を返す
              * @return データ一覧の配列を返す
              */
            const updateListArr = () => {
                if (filterArticleArr.length === 0) {
                    if (CheckboxArr.length === 0) {
                        return dataArr
                    } else if (CheckboxArr.length >= 1 && filterArticleArr.length === 0) {
                        return []
                    }
                } else {
                    return filterArticleArr
                }
            }

            linkCreate();
            createArticleList();
            doCheckItem();

        }

        // リンク生成
        const linkCreate = () => {
            const containerArea = document.querySelectorAll('.column__item')
            containerArea.forEach(item => {
                item.addEventListener("click", () => {
                    location.href = item.dataset.url;
                });
            })
        }



      }



</script>
