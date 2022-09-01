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
  <div id="contact-complete" class="contact-complete">
    <div class="contact-complete__inner">
      <p class="contact-complete__text">送信完了</p>
      <div class="contact-complete__body">
        <p>
          <b>お問い合わせいただきありがとうございました。<br>
          お問い合わせを受け付けました。</b><br><br>
          折り返し、担当者よりご連絡いたしますので、<br>
          恐れ入りますが、しばらくお待ちください。<br><br>
          なお、ご入力いただいたメールアドレス宛に受付完了メールを配信しております。<br>
          完了メールが届かない場合、処理が正常に行われていない可能性があります。<br>
          大変お手数ですが、再度お問い合わせの手続きをお願い致します。
        </p>
      </div>
      <div class="contact-complete__btn">
        <a href="<?php echo home_url(); ?>" class="btn btn--green">
          <p>トップページへ戻る</p>
        </a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
