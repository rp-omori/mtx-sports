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
  <?php get_template_part('component/c__bread'); ?>

  <!-- コンテンツ部分 -->
  <div id="medical-detail" class="medical-detail-contents">

    <div class="medical-detail-top-wrapper">
      <div class="medical-detail-top">
        <div class="medical-detail-top__left">
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_main_img.png" alt="">
        </div>
        <div class="medical-detail-top__right">
          <div class="medical-detail-top__right_txtArea">
            <div class="medical-detail-top__right_txtArea_tab">
              <p>スポーツによる関節の怪我・痛み</p>
            </div>
            <div class="medical-detail-top__right_txtArea_ttl">
              <p>野球肘</p>
            </div>
            <div class="medical-detail-top__right_txtArea_txt">
              <p>野球で多いですが、いろいろな種目で起きることがあります。無症状でも骨や軟骨が壊れていることもあり、早期発見が重要です。</p>
            </div>
            <div class="medical-detail-top__right_txtArea_soreSpot">
              <p class="medical-detail-top__right_txtArea_soreSpot_sore">・痛む箇所</p>
              <div class="medical-detail-top__right_txtArea_soreSpot_spot">
                <!-- <div class="medical-detail-top__right_txtArea_soreSpot_spot_detail">
                  <p>肘</p>
                </div> -->
                <div class="medical-detail-top__right_txtArea_soreSpot_spot_detail">
                  <p>肘</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="medical-detail-top__img">
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_sub_img.png" alt="">
        </div>
      </div>
    </div>

    <div class="medical-detail-imdexArea">
      <a href="#" class="index_btn">
        <p>症状</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
      <a href="#" class="index_btn">
        <p>病態と原因</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
      <a href="#" class="index_btn">
        <p>当クリニックの治療方法</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
      <a href="#" class="index_btn">
        <p>該当する治療メニュー</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
    </div>


  </div>

</main>

<?php get_footer(); ?>
