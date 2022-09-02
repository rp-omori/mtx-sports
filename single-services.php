<?php
/**
 * Template Name: services_detail
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>


<main class="main">

  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__title'); ?>

  <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();

        // リード文
        $lead = get_field('lead_detail');

        // 対象疾患
        $condition = get_field('condition');
        $condition_list = $condition['condition_list'];
        $condition_image = $condition['condition_image'];

        // こんな方にすすめたい
        $recommend = get_field('recommend');
        $recommend_list = $recommend['recommend_list'];

        // 当治療を受けられない方
        $cannot = get_field('cannot');
        $cannot_note = $cannot['cannot_note'];
        $cannot_list = $cannot['cannot_list'];

        // 治療の流れ
        $flow = get_field('flow');
        $flow_note = $flow['note_list'];
        $flow_description = $flow['description'];
        $flow_image = $flow['image'];

        // 注意事項（リスク・副作用）
        $side_effects = get_field('side_effects');
        $side_effects_note = $side_effects['note'];
        $side_effects_description = $side_effects['description'];
  ?>

  <!-- コンテンツ部分 -->
  <div id="treatmentDetail" class="treatment-detail">
    <div class="triangle triangle--01"><img src="<?php echo $rootDir ?>/images/treatment_detail/triangle-left.svg" alt=""></div>
    <div class="triangle triangle--02"><img src="<?php echo $rootDir ?>/images/treatment_detail/triangle-right.svg" alt=""></div>
    <div class="triangle triangle--03"><img src="<?php echo $rootDir ?>/images/treatment_detail/triangle-left.svg" alt=""></div>
    <div class="triangle triangle--04"><img src="<?php echo $rootDir ?>/images/treatment_detail/triangle-right.svg" alt=""></div>
    <div class="treatment-detail__inner">
      <div class="index_btn__wrapper">
        <a href="#treatment" class="index_btn">
          <p><?php the_title(); ?>とは</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
        <a href="#condition" class="index_btn">
          <p>対象疾患</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
        <a href="#recommend" class="index_btn">
          <p>こんな方に<br class="sp">すすめたい</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
        <a href="#cannot" class="index_btn">
          <p>当治療を<br class="sp">受けられない方</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
        <a href="#flow" class="index_btn">
          <p>治療の流れ</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
        <a href="#note" class="index_btn">
          <p>注意事項</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
      </div>

      <ul class="treatment-detail__contents-list">
        <li id="treatment" class="treatment-detail__contents-item">
          <div class="treatment-detail__contents">
            <div class="treatment-detail__contents-inner">
              <div class="contentsBox_ttl treatment-detail__contents-title">
                <div class="contentsBox_ttl_img">
                  <img src="<?php echo $rootDir ?>/images/icon/icon-regenerative-treatment.svg" alt="">
                </div>
                <div class="contentsBox_ttl_txt">
                  <p><?php the_title(); ?>とは</p>
                </div>
              </div>
              <div class="treatment-detail__contents-body">
                <div class="treatment-detail__contents-text">
                  <?php echo $lead; ?>
                </div>
                <?php if(has_post_thumbnail()): ?>
                  <div class="treatment-detail__contents-img">
                    <img src="<?php the_post_thumbnail_url(''); ?>">
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </li>
        <li id="condition" class="treatment-detail__contents-item">
          <div class="treatment-detail__contents-item-inner">
            <div class="contentsBox_ttl treatment-detail__contents-title">
              <div class="contentsBox_ttl_img">
                <img src="<?php echo $rootDir ?>/images/icon/icon-bulb.svg" alt="">
              </div>
              <div class="contentsBox_ttl_txt">
                <p>対象疾患</p>
              </div>
            </div>
            <div class="treatment-detail__contents-item-body">
              <div class="treatment-detail__contents-item-body-flex">
                <ul class="contents-item-detail__list">
                  <?php foreach ($condition_list as $condition_item) { ?>
                    <li class="contents-item-detail__item contents-item-detail__item--white"><?php echo $condition_item['condition_name']; ?></li>
                  <?php } ?>
                </ul>
                <div class="treatment-detail__contents-item-img treatment-detail__contents-item-img--small">
                  <img src="<?php echo $condition_image ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </li>
        <li id="recommend" class="treatment-detail__contents-item">
          <div class="treatment-detail__contents-item-inner">
            <div class="contentsBox_ttl treatment-detail__contents-title">
              <div class="contentsBox_ttl_img">
                <img src="<?php echo $rootDir ?>/images/icon/icon-heart.svg" alt="">
              </div>
              <div class="contentsBox_ttl_txt">
                <p>こんな方にすすめたい</p>
              </div>
            </div>
            <div class="treatment-detail__contents-item-body">
              <ul class="contents-item-detail__list">
                <?php foreach ($recommend_list as $recommend_item) { ?>
                  <li class="contents-item-detail__item contents-item-detail__item--white"><?php echo $recommend_item['recommend_item']; ?></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </li>
        <li id="cannot" class="treatment-detail__contents-item">
          <div class="treatment-detail__contents-item-inner">
            <div class="contentsBox_ttl treatment-detail__contents-title">
              <div class="contentsBox_ttl_img">
                <img src="<?php echo $rootDir ?>/images/icon/icon-stop.svg" alt="">
              </div>
              <div class="contentsBox_ttl_txt">
                <p>当治療を<br class="sp">受けられない方</p>
              </div>
            </div>
            <div class="treatment-detail__contents-item-body">
              <div class="treatment-detail__contents-item-note-wrapper">
                <p class="treatment-detail__contents-item-note"><?php echo $cannot_note; ?></p>
              </div>
              <ul class="contents-item-detail__list">
                <?php foreach ($cannot_list as $cannot_item) { ?>
                  <li class="contents-item-detail__item contents-item-detail__item--green"><?php echo $cannot_item['cannot_item']; ?></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </li>
        <li id="flow" class="treatment-detail__contents-item">
          <div class="treatment-detail__contents-item-inner">
            <div class="contentsBox_ttl treatment-detail__contents-title">
              <div class="contentsBox_ttl_img">
                <img src="<?php echo $rootDir ?>/images/icon/icon-reload.svg" alt="">
              </div>
              <div class="contentsBox_ttl_txt">
                <p>治療の流れ</p>
              </div>
            </div>
            <div class="treatment-detail__contents-item-body">
              <div class="treatment-detail__contents-item-note-wrapper">
                <?php
                  if ($flow_note):
                    foreach ($flow_note as $flow_item) { ?>
                      <p class="treatment-detail__contents-item-note"><?php echo $flow_item['note']; ?></p>
                <?php
                    }
                  endif;
                ?>
              </div>
              <?php if ($flow_description): ?>
                <p class="treatment-detail__contents-item-text fwb"><?php echo $flow_description; ?></p>
              <?php endif; ?>
              <div class="treatment-detail__contents-item-img">
                <?php if ($flow_image): ?>
                  <img src="<?php echo $flow_image ?>" alt="">
                <?php endif; ?>
              </div>
            </div>
          </div>
        </li>
        <li id="note" class="treatment-detail__contents-item">
          <div class="treatment-detail__contents-item-inner">
            <div class="contentsBox_ttl treatment-detail__contents-title">
              <div class="contentsBox_ttl_img">
                <img src="<?php echo $rootDir ?>/images/icon/icon-attention.svg" alt="">
              </div>
              <div class="contentsBox_ttl_txt">
                <p>注意事項（リスク・副作用）</p>
              </div>
            </div>
            <div class="treatment-detail__contents-item-body">
              <div class="treatment-detail__contents-item-note-wrapper">
                <?php if ($side_effects_note): ?>
                  <p class="treatment-detail__contents-item-note"><?php echo $side_effects_note; ?></p>
                <?php endif; ?>
              </div>
              <?php if ($side_effects_description): ?>
                <p class="treatment-detail__contents-item-text"><?php echo $side_effects_description; ?></p>
              <?php endif; ?>
            </div>
          </div>
        </li>
      </ul>
      <div class="treatment-detail-btnArea">
        <div class="btn btn--green treatment-detail-btnArea__btn">
          <a href="<?php echo esc_url(home_url('/price')); ?>">料金一覧を見る</a>
        </div>
        <div class="btn btn--green treatment-detail-btnArea__btn">
          <a href="<?php echo esc_url(home_url('/flow')); ?>">治療の流れはこちら</a>
        </div>
      </div>
    </div>
    <?php get_template_part('component/footer__other'); ?>
  </div>
  <?php  }
	} ?>
</main>

<?php get_footer(); ?>
