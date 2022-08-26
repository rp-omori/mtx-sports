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
    <div class="contents-box">
      <div class="contents-box_cat">
        <p>再生医療</p>
      </div>
      <div class="contents-box_menu">
        <div class="menu_inner">
          <div class="menu_inner_name width">
            <p>PRP治療</p>
            <p class="part">肩・手・肘・股関節・膝・足関節・その他ブロック</p>
          </div>
          <div class="menu_inner_detail">
            <div class="menu_inner_detail_box">
              <div class="menu_inner_detail_box_part">
                <p>1部位</p>
              </div>
              <div class="menu_inner_detail_box_frequency">
                <p>1回</p>
              </div>
              <div class="menu_inner_detail_box_price">
                <p>¥150,000</p>
              </div>
            </div>
            <div class="menu_inner_detail_box">
              <div class="menu_inner_detail_box_part">
                <p>1部位</p>
              </div>
              <div class="menu_inner_detail_box_frequency">
                <p>1回</p>
              </div>
              <div class="menu_inner_detail_box_price">
                <p>¥150,000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="menu_inner">
          <div class="menu_inner_name width">
            <p class="tab">オープニング価格</p>
            <p>脂肪幹細胞治療（ASC）</p>
            <p class="part">肩・手・肘・股関節・膝・足関節・その他ブロック</p>
          </div>
          <div class="menu_inner_detail">
            <div class="menu_inner_detail_box">
              <div class="menu_inner_detail_box_part">
                <p>1部位</p>
              </div>
              <div class="menu_inner_detail_box_frequency">
                <p>1回</p>
              </div>
              <div class="menu_inner_detail_box_price">
                <p>¥150,000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer手前の２つ並びのメニュー -->
  <?php get_template_part('component/footer__other'); ?>

</main>

<?php get_footer(); ?>
