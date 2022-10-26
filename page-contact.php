<?php
/**
 * Template Name: contact
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>


<main class="main">
  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__title'); ?>

  <!-- コンテンツ部分 -->
  <div id="contact" class="contact">
    <div class="contact__head">
      <div class="contact__head-inner">
        <h2 class="contact__head-lead">
          治療内容に関するお問い合わせやご相談は下記「お問い合わせフォーム」よりお送りください。<br>
          お急ぎの方はお電話にてご連絡ください。
        </h2>
        <div class="contact__time">
          <div class="contact__time-inner">
            <div class="contact__tel-wrapper">
              <a href="tel:03-6272-5047">
                <p class="contact__tel">03-6272-5047</p>
              </a>
            </div>
            <p class="contact__time-text">
              受付時間 10:00~17:00<br>
              月曜日〜金曜日（土日祝日は除く）
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php echo do_shortcode('[mwform_formkey key="'. $form_key .'"]'); ?>
    <div class="contact__appointment">
      <div class="contact__appointment-inner">
        <h3 class="contact__appointment-head">診察のご予約はこちら</h3>
        <div class="contact__appointment-btn-wrapper">
          <a href="https://web.booking.clius.jp/reserve/mtxclinic_yotsuya" target="_blank" class="btn btn--orange btn--web">
            <span>WEB予約</span>
          </a>
          <a href="https://lin.ee/DhflNAe" target="_blank" class="btn btn--white btn--line">
            <span>LINEで予約</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="<?php echo $rootDir ?>/js/form.js"></script>
<?php get_footer(); ?>
