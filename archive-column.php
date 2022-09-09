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
            <li class="column__item">
              <a href="" class="column__link">
                <div class="column__head">
                  <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="" class="column__img">
                </div>
                <div class="column__body">
                  <h3 class="column__title">タイトル</h3>
                  <p class="column__date">2022.5.10</p>
                  <div class="column__category-wrapper">
                    <span class="column__category">カテ1</span>
                    <span class="column__category">カテ2</span>
                    <span class="column__category">カテ3</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="column__item">
              <a href="" class="column__link">
                <div class="column__head">
                  <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="" class="column__img">
                </div>
                <div class="column__body">
                  <h3 class="column__title">タイトル</h3>
                  <p class="column__date">2022.5.10</p>
                  <div class="column__category-wrapper">
                    <span class="column__category">カテ1</span>
                    <span class="column__category">カテ2</span>
                    <span class="column__category">カテ3</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="column__item">
              <a href="" class="column__link">
                <div class="column__head">
                  <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="" class="column__img">
                </div>
                <div class="column__body">
                  <h3 class="column__title">タイトル</h3>
                  <p class="column__date">2022.5.10</p>
                  <div class="column__category-wrapper">
                    <span class="column__category">カテ1</span>
                    <span class="column__category">カテ2</span>
                    <span class="column__category">カテ3</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="column__lineup">
        <div class="column__heading-wrapper">
          <span class="column__heading-label">ALL LINE UP</span>
          <h2 class="column__heading">全てのコラム記事</h2>
        </div>
        <div class="search-box-wrapper">
          <div class="search-box">
            <input type="text" class="search-box__input" placeholder="キーワードで検索">
            <button class="search-box__button"><img src="<?php echo $rootDir ?>/images/icon/icon-search.svg" alt=""></button>
          </div>
        </div>
        <div class="column__search-area">
          <div class="column__search-area-head">
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
          </div>
          <div class="column__search-area-body">
            <p class="column__tags-heading">＃タグで絞り込む</p>
            <div class="column__tags">
              <div class="column__tags-list">
                <div class="column__tags-wrapper">
                  <input id="1" type="checkbox" class="column__tags-check" name="columns">
                  <label for="1" class="column__tags-label"><span>タグ１</span></label>
                </div>
                <div class="column__tags-wrapper">
                  <input id="2" type="checkbox" class="column__tags-check" name="columns">
                  <label for="2" class="column__tags-label"><span>タグ２</span></label>
                </div>
                <div class="column__tags-wrapper">
                  <input id="3" type="checkbox" class="column__tags-check" name="columns">
                  <label for="3" class="column__tags-label"><span>タグ３</span></label>
                </div>
              </div>
            </div>
            <div class="column__tags-button">
              <button class="btn btn--green">SEARCH</button>
            </div>
          </div>
        </div>
        <div class="column__list-wrapper">
          <ul class="column__list">
            <li class="column__item">
              <a href="" class="column__link">
                <div class="column__head">
                  <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="" class="column__img">
                </div>
                <div class="column__body">
                  <h3 class="column__title">タイトル</h3>
                  <p class="column__date">2022.5.10</p>
                  <div class="column__category-wrapper">
                    <span class="column__category">カテ1</span>
                    <span class="column__category">カテ2</span>
                    <span class="column__category">カテ3</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="column__item">
              <a href="" class="column__link">
                <div class="column__head">
                  <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="" class="column__img">
                </div>
                <div class="column__body">
                  <h3 class="column__title">タイトル</h3>
                  <p class="column__date">2022.5.10</p>
                  <div class="column__category-wrapper">
                    <span class="column__category">カテ1</span>
                    <span class="column__category">カテ2</span>
                    <span class="column__category">カテ3</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="column__item">
              <a href="" class="column__link">
                <div class="column__head">
                  <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="" class="column__img">
                </div>
                <div class="column__body">
                  <h3 class="column__title">タイトル</h3>
                  <p class="column__date">2022.5.10</p>
                  <div class="column__category-wrapper">
                    <span class="column__category">カテ1</span>
                    <span class="column__category">カテ2</span>
                    <span class="column__category">カテ3</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="column__item">
              <a href="" class="column__link">
                <div class="column__head">
                  <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="" class="column__img">
                </div>
                <div class="column__body">
                  <h3 class="column__title">タイトル</h3>
                  <p class="column__date">2022.5.10</p>
                  <div class="column__category-wrapper">
                    <span class="column__category">カテ1</span>
                    <span class="column__category">カテ2</span>
                    <span class="column__category">カテ3</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="column__item">
              <a href="" class="column__link">
                <div class="column__head">
                  <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="" class="column__img">
                </div>
                <div class="column__body">
                  <h3 class="column__title">タイトル</h3>
                  <p class="column__date">2022.5.10</p>
                  <div class="column__category-wrapper">
                    <span class="column__category">カテ1</span>
                    <span class="column__category">カテ2</span>
                    <span class="column__category">カテ3</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="column__item">
              <a href="" class="column__link">
                <div class="column__head">
                  <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="" class="column__img">
                </div>
                <div class="column__body">
                  <h3 class="column__title">タイトル</h3>
                  <p class="column__date">2022.5.10</p>
                  <div class="column__category-wrapper">
                    <span class="column__category">カテ1</span>
                    <span class="column__category">カテ2</span>
                    <span class="column__category">カテ3</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php get_template_part('component/footer__other'); ?>
  </div>
</main>

<?php get_footer(); ?>
