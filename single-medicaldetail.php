<?php
/**
 * Template Name: medical_detail
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

    <div class="bg_img_left">
      <img src="<?php echo $rootDir ?>/images/medical_detail/background_img_left.png" alt="">
    </div>

    <div class="bg_img_right">
      <img src="<?php echo $rootDir ?>/images/medical_detail/background_img_right.png" alt="">
    </div>

    <div class="medical-detail-top-wrapper">
      <div class="medical-detail-top">
        <div class="medical-detail-top__left">
          <img src="<?php the_field('body_diagram'); ?>" alt="">
        </div>
        <div class="medical-detail-top__right">
          <div class="medical-detail-top__right_txtArea">
            <div class="medical-detail-top__right_txtArea_tab">
              <p><?php the_field('orange_tab'); ?></p>
            </div>
            <div class="medical-detail-top__right_txtArea_ttl">
              <p><?php the_title(); ?></p>
            </div>
            <div class="medical-detail-top__right_txtArea_subTtl">
              <p><?php the_field('other_name'); ?></p>
            </div>
            <div class="medical-detail-top__right_txtArea_txt">
              <p><?php the_field('lead_txt'); ?></p>
            </div>
            <div class="medical-detail-top__right_txtArea_soreSpot">
              <p class="medical-detail-top__right_txtArea_soreSpot_sore">・痛む箇所</p>
              <div class="medical-detail-top__right_txtArea_soreSpot_spot">
                <?php if(have_rows('sore_spot')): ?>
                  <?php while(have_rows('sore_spot')): the_row(); ?>
                    <div class="medical-detail-top__right_txtArea_soreSpot_spot_detail">
                    <!-- <p>肘</p> -->
                      <p><?php the_sub_field('spot'); ?></p>
                    </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="medical-detail-top__img">
          <img src="<?php the_field('illustration'); ?>" alt="">
        </div>
      </div>
    </div>

    <div class="medical-detail-indexArea">
      <a href="#symptoms" class="index_btn">
        <p>症状</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
      <a href="#cause" class="index_btn">
        <p>病態と原因</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
      <a href="#method" class="index_btn">
        <p>当クリニックの<br class="sp">治療方法</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
      <a href="#menu" class="index_btn">
        <p>該当する<br class="sp">治療メニュー</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
    </div>

    <div class="medical-detail-menuArea">
      <div id="symptoms" class="medical-detail-menuArea__box">
        <div class="contentsBox_ttl medical-detail-menuArea__box_ttl">
          <div class="contentsBox_ttl_img medical-detail-menuArea__box_ttl_img">
            <img src="<?php echo $rootDir ?>/images/medical_detail/question_mark.png" alt="">
          </div>
          <div class="contentsBox_ttl_txt medical-detail-menuArea__box_txt">
            <p>こんな症状はありませんか？</p>
          </div>
        </div>
        <div class="medical-detail-menuArea__box_contents">
          <p><?php the_field('symptoms'); ?></p>
        </div>
      </div>
      <div id="cause" class="medical-detail-menuArea__box">
        <div class="contentsBox_ttl medical-detail-menuArea__box_ttl">
          <div class="contentsBox_ttl_img medical-detail-menuArea__box_ttl_img">
            <img src="<?php echo $rootDir ?>/images/medical_detail/electricity_mark.png" alt="">
          </div>
          <div class="contentsBox_ttl_txt medical-detail-menuArea__box_txt">
            <p>病態と原因について</p>
          </div>
        </div>
        <div class="medical-detail-menuArea__box_contents">
          <p><?php the_field('cause'); ?></p>
        </div>
      </div>
      <div id="method" class="medical-detail-menuArea__box">
        <div class="contentsBox_ttl medical-detail-menuArea__box_ttl">
          <div class="contentsBox_ttl_img medical-detail-menuArea__box_ttl_img">
            <img src="<?php echo $rootDir ?>/images/medical_detail/heart_mark.png" alt="">
          </div>
          <div class="contentsBox_ttl_txt medical-detail-menuArea__box_txt">
            <p>当クリニックでできる治療方法</p>
          </div>
        </div>
        <div class="medical-detail-menuArea__box_contents">
          <p><?php the_field('method'); ?></p>
        </div>
      </div>
      <div id="menu" class="medical-detail-menuArea__box">
        <div class="contentsBox_ttl medical-detail-menuArea__box_ttl">
          <div class="contentsBox_ttl_img medical-detail-menuArea__box_ttl_img">
            <img src="<?php echo $rootDir ?>/images/medical_detail/hand_mark.png" alt="">
          </div>
          <div class="contentsBox_ttl_txt medical-detail-menuArea__box_txt">
            <p>該当する治療メニュー</p>
          </div>
        </div>
        <div class="medical-detail-menuArea__box_contents">
          <div class="index_btn_wrapper">
            <?php if(have_rows('treatment_menu')): ?>
              <?php while(have_rows('treatment_menu')): the_row(); ?>
                <a href="<?php the_sub_field("menu_link") ?>" class="index_btn">
                  <p><?php the_sub_field("menu_name") ?></p>
                  <?php $etc = get_sub_field('menu_link'); ?>
                    <?php if(empty($etc)):?>
                    <?php else:?>
                      <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn_right.png" alt="">
                    <?php endif;?>
                </a>
              <?php endwhile; ?>
            <?php endif;?>
            <p><?php the_field('other_treatment_menu'); ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="medical-detail-btnArea">
      <a href="#" class="btn btn--green medical-detail-btnArea__btn">
        <p>その他の治療メニューはこちら</p>
      </a>
      <a href="#" class="btn btn--green medical-detail-btnArea__btn">
        <p>料金一覧を見る</p>
      </a>
      <a href="#" class="btn btn--green medical-detail-btnArea__btn">
        <p>治療の流れはこちら</p>
      </a>
    </div>

    <?php get_template_part('component/footer__other'); ?>

  </div>

</main>

<?php get_footer(); ?>
