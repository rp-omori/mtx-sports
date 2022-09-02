<!-- footer手前のflex部分 -->
<?php
$rootDir = get_template_directory_uri();
?>

<?php if( is_home() || is_front_page() ) :?>

<?php elseif(is_page('aboutus') || is_page('system_facility') ) :?>

<div class="footer__other">
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_01.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">MEDICAL SUBJECTS</p>
      <p class="white">診療科目</p>
    </div>
  </a>
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_02.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">STAFF</p>
      <p class="white">医師・スタッフ紹介</p>
    </div>
  </a>
</div>

<?php elseif(is_page('flow')) :?>

<div class="footer__other">
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_03.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">SYSTEM & FACILITY</p>
      <p class="white">治療体制と施設・設備</p>
    </div>
  </a>
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_04.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">TREATMENTS</p>
      <p class="white">治療メニュー</p>
    </div>
  </a>
</div>

<?php elseif(is_page('staff')) :?>

<div class="footer__other">
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_05.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">COLUMN</p>
      <p class="white">コラム</p>
    </div>
  </a>
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_07.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">ABOUT US</p>
      <p class="white">開院の背景と想い</p>
    </div>
  </a>
</div>

<?php elseif(is_archive('service')) :?>

<div class="footer__other">
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_01.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">FLOW</p>
      <p class="white">治療の流れ</p>
    </div>
  </a>
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_05.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">COLUMN</p>
      <p class="white">コラム</p>
    </div>
  </a>
</div>

<?php elseif(is_page('price')) :?>

<div class="footer__other">
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_06.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">MEDICAL SUBJECTS</p>
      <p class="white">診療科目</p>
    </div>
  </a>
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_02.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">STAFF</p>
      <p class="white">医師・スタッフ紹介</p>
    </div>
  </a>
</div>

<?php elseif( is_single('')) :?>

<div class="footer__other">
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_01.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">FLOW</p>
      <p class="white">治療の流れ</p>
    </div>
  </a>
  <a href="" class="footer__other_box">
    <div class="footer__other_box_img">
      <img src="<?php echo $rootDir ?>/images/footer__other/footer_other_06.jpg" alt="">
    </div>
    <div class="footer__other_box_text">
      <p class="orange">MEDICAL SUBJECTS</p>
      <p class="white">診療科目</p>
    </div>
  </a>
</div>

<?php elseif( is_404() ) :?>


<? endif?>



