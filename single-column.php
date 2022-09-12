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
            <p class="column-article__date">2022.5.10</p>
            <h1 class="column-article__title">タイトル</h1>
            <div class="column-article__tags-wrapper">
              <span class="column-article__tags column-article__tags--category">カテゴリ</span>
              <span class="column-article__tags column-article__tags--tag">タグ</span>
            </div>
            <div class="column-article__img">
              <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
            </div>
            <div class="column-article__lead">
              <p>リード</p>
            </div>
            <div class="column-article__contents">
              <p class="column-article__contents-title">目次</p>
              <ol>
                <li class="column-article__contents-h2">
                  <a href="#chapter-1"><strong>1.背景</strong></a>
                  <ol>
                    <li class="column-article__contents-h3">
                      <a href="#chapter-2">業務負荷改善を目的として、外部パッケージシステムの導入を決定。既存システムからのリプレースを実施。</a>
                      <ol>
                        <li class="column-article__contents-h4"><a href="#chapter-3">h4h4h4h4h4h4h4h4h4h4h4h4</a></li>
                      </ol>
                    </li>
                  </ol>
                </li>
                <li class="column-article__contents-h2">
                  <a href="#chapter-4"><strong>2.課題</strong></a>
                  <ol>
                    <li class="column-article__contents-h3">
                      <a href="#chapter-5">業務負荷軽減のためのパッケージシステム導入が、更なる負荷増大を招く。</a>
                      <ol>
                        <li class="column-article__contents-h4"><a href="#chapter-6">h4h4h4h4h4h4h4h4h4h4h4h4</a></li>
                      </ol>
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="column-article__body">
              <h2>h2タイトル</h2>
              <h3>h3タイトル</h3>
              <h4>h4タイトル</h4>
              <p>テキスト</p>
              <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
            </div>
          </div>
        </div>
        <div class="column-article__nav">
          <div class="search-box-wrapper">
            <div class="search-box">
              <input type="text" class="search-box__input" placeholder="キーワードで検索">
              <button class="search-box__button"><img src="<?php echo $rootDir ?>/images/icon/icon-search.svg" alt=""></button>
            </div>
          </div>
          <div class="column-article__nav-wrapper">
            <div class="column-article__nav-title-wrapper">
              <p class="column-article__nav-title">最新記事</p>
              <p class="column-article__nav-label">NEW</p>
            </div>
            <ul class="column-article__latest">
              <li class="column-article__latest-item">
                <a href="" class="column-article__latest-link">
                  <div class="column-article__latest-img">
                    <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
                  </div>
                  <div class="column-article__latest-body">
                    <p class="column-article__latest-title">タイトル</p>
                    <p class="column-article__latest-text">本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文</p>
                    <div class="column-article__latest-other">
                      <p class="column-article__latest-date">2022.5.10</p>
                      <p class="column-article__latest-more">続きを読む</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="column-article__latest-item">
                <a href="" class="column-article__latest-link">
                  <div class="column-article__latest-img">
                    <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
                  </div>
                  <div class="column-article__latest-body">
                    <p class="column-article__latest-title">タイトル</p>
                    <p class="column-article__latest-text">本文</p>
                    <div class="column-article__latest-other">
                      <p class="column-article__latest-date">2022.5.10</p>
                      <p class="column-article__latest-more">続きを読む</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="column-article__latest-item">
                <a href="" class="column-article__latest-link">
                  <div class="column-article__latest-img">
                    <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
                  </div>
                  <div class="column-article__latest-body">
                    <p class="column-article__latest-title">タイトル</p>
                    <p class="column-article__latest-text">本文</p>
                    <div class="column-article__latest-other">
                      <p class="column-article__latest-date">2022.5.10</p>
                      <p class="column-article__latest-more">続きを読む</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="column-article__nav-wrapper">
            <div class="column-article__nav-title-wrapper">
              <p class="column-article__nav-title">カテゴリー</p>
              <p class="column-article__nav-label">CATEGORY</p>
            </div>
            <ul class="column-article__category">
              <li class="column-article__category-item">
                <a href="" class="column-article__category-link">
                  <p class="column-article__category-text">スポーツによる関節の怪我・痛み</p>
                  <div class="column-article__category-circle"><img src="<?php echo $rootDir ?>/images/icon/icon-arrow-circle-right--white.svg" alt=""></div>
                </a>
              </li>
              <li class="column-article__category-item">
                <a href="" class="column-article__category-link">
                  <p class="column-article__category-text">加齢による関節の痛み</p>
                  <div class="column-article__category-circle"><img src="<?php echo $rootDir ?>/images/icon/icon-arrow-circle-right--white.svg" alt=""></div>
                </a>
              </li>
              <li class="column-article__category-item">
                <a href="" class="column-article__category-link">
                  <p class="column-article__category-text">
                    子どもの成長による痛みと<br>
                    運動機能の悩み
                  </p>
                  <div class="column-article__category-circle"><img src="<?php echo $rootDir ?>/images/icon/icon-arrow-circle-right--white.svg" alt=""></div>
                </a>
              </li>
            </ul>
          </div>
          <div class="column-article__nav-wrapper">
            <div class="column-article__nav-title-wrapper">
              <p class="column-article__nav-title">カテゴリー</p>
              <p class="column-article__nav-label">CATEGORY</p>
            </div>
            <ul class="column-article__tag-list">
              <li class="column-article__tag-list-item">
                <a href="" class="column-article__tag-list-link">
                  <p class="column-article__tag-list-text">タグ</p>
                </a>
              </li>
              <li class="column-article__tag-list-item">
                <a href="" class="column-article__tag-list-link">
                  <p class="column-article__tag-list-text">タグ</p>
                </a>
              </li>
              <li class="column-article__tag-list-item">
                <a href="" class="column-article__tag-list-link">
                  <p class="column-article__tag-list-text">タグ</p>
                </a>
              </li>
              <li class="column-article__tag-list-item">
                <a href="" class="column-article__tag-list-link">
                  <p class="column-article__tag-list-text">タグ</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="column__related">
      <div class="column__related-inner">
        <div class="column__heading-wrapper column__heading-wrapper--related">
          <span class="column__heading-label">RELATED</span>
          <h2 class="column__heading">関連記事</h2>
        </div>
        <ul class="column__related-list">
          <li class="column__related-item">
            <a href="" class="column__related-link">
              <div class="column__related-img">
                <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
              </div>
              <div class="column__related-body">
                <span class="column__related-label">カテゴリー</span>
                <p class="column__related-title">タイトル</p>
                <p class="column__related-text">テキスと</p>
              </div>
            </a>
          </li>
          <li class="column__related-item">
            <a href="" class="column__related-link">
              <div class="column__related-img">
                <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
              </div>
              <div class="column__related-body">
                <span class="column__related-label">カテゴリー</span>
                <p class="column__related-title">タイトル</p>
                <p class="column__related-text">テキスと</p>
              </div>
            </a>
          </li>
          <li class="column__related-item">
            <a href="" class="column__related-link">
              <div class="column__related-img">
                <img src="https://source.unsplash.com/Gp34PCSEbt8" alt="">
              </div>
              <div class="column__related-body">
                <span class="column__related-label">カテゴリー</span>
                <p class="column__related-title">タイトル</p>
                <p class="column__related-text">テキスと</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <?php get_template_part('component/footer__other'); ?>
  </div>

</main>

<?php get_footer(); ?>
