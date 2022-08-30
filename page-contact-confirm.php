<?php
/**
 * Template Name: contact-confirm
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>


<main class="main">

  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__title'); ?>

  <!-- コンテンツ部分 -->
  <div id="contact-confirm" class="contact-confirm">
    <div class="contact-confirm__inner">
      <p class="contact-confirm__text">入力内容をご確認の上、「送信する」ボタンを押してください。</p>
      <?php echo do_shortcode('[mwform_formkey key="110"]'); ?>
      <!-- <div class="contact-confirm__body">
        <ul class="contact-confirm__list">
          <li class="contact-confirm__item">
            <p class="contact-confirm__item-head">お名前（フルネーム）</p>
            <p class="contact-confirm__item-text">東京 太郎</p>
          </li>
          <li class="contact-confirm__item">
            <p class="contact-confirm__item-head">お名前（フリガナ）</p>
            <p class="contact-confirm__item-text">トウキョウ タロウ</p>
          </li>
          <li class="contact-confirm__item">
            <p class="contact-confirm__item-head">性別</p>
            <p class="contact-confirm__item-text">男性</p>
          </li>
          <li class="contact-confirm__item">
            <p class="contact-confirm__item-head">年代</p>
            <p class="contact-confirm__item-text">20代</p>
          </li>
          <li class="contact-confirm__item">
            <p class="contact-confirm__item-head">メールアドレス</p>
            <p class="contact-confirm__item-text">sample@example.com</p>
          </li>
          <li class="contact-confirm__item">
            <p class="contact-confirm__item-head">電話番号</p>
            <p class="contact-confirm__item-text">090-9999-9999</p>
          </li>
          <li class="contact-confirm__item">
            <p class="contact-confirm__item-head">メッセージ</p>
            <p class="contact-confirm__item-text">この部分はテキストが入ります。イメージ確認用のサンプル文言になります。任意のテキストに置き換えてお使いください。この部分はテキストが入ります。イメージ確認用のサンプル文言になります。任意のテキストに置き換えてお使いください。</p>
          </li>
        </ul>
      </div>
      <div class="contact-confirm__btn">
        <a href="#" class="btn btn--green">
          <p>送信する</p>
        </a>
      </div> -->
    </div>
  </div>
</main>

<?php get_footer(); ?>
