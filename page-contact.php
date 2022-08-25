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
              <a href="">
                <p class="contact__tel">03-6272-5047</p>
              </a>
            </div>
            <p class="contact__time-text">
              受付時間 10:00~17:00<br>
              月曜日〜金曜日（土日祝日は除く）
            </p>
          </div>
        </div>
        <div class="contact__appointment">
          <div class="contact__appointment-inner">
            <h3 class="contact__appointment-head">診察のご予約はこちら</h3>
            <div class="contact__appointment-btn-wrapper">
              <a href="#" class="btn btn--orange btn--web">
                <span>WEB予約</span>
              </a>
              <a href="https://lin.ee/DhflNAe" class="btn btn--white btn--line">
                <span>LINEで予約</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact__body">
      <div class="contact__body-inner">
        <div class="form-body">
          <div class="form-group">
            <div class="form-group__head">
              <label class="form-label">お名前(フルネーム)</label>
              <span class="form-badge form-badge--required">必須</span>
            </div>
            <div class="form-group__body">
              <div class="form-input-wrapper">
                <input class="form-input" type="text" placeholder="例：東京 太郎">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group__head">
              <label class="form-label">お名前(フリガナ)</label>
              <span class="form-badge form-badge--required">必須</span>
            </div>
            <div class="form-group__body">
              <div class="form-input-wrapper">
                <input class="form-input" type="text" placeholder="例：トウキョウ タロウ">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group__head">
              <label class="form-label">性別</label>
              <span class="form-badge form-badge--optional">任意</span>
            </div>
            <div class="form-group__body">
              <div class="form-input-wrapper">
                <div class="form-select-wrapper w280">
                  <select class="form-input" name="gender" id="gender">
                    <option selected>選択してください</option>
                    <option value="male">男性</option>
                    <option value="female">女性</option>
                    <option value="other">その他</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group__head col-3">
              <label class="form-label">年代</label>
              <span class="form-note">※未成年者の受診はお受けできかねます。</span>
              <span class="form-badge form-badge--required">必須</span>
            </div>
            <div class="form-group__body">
              <div class="form-input-wrapper">
                <div class="form-select-wrapper w520">
                  <select class="form-input" name="age" id="age">
                    <option selected>---</option>
                    <option value="20代">20代</option>
                    <option value="30代">30代</option>
                    <option value="40代">40代</option>
                    <option value="50代">50代</option>
                    <option value="60代">60代</option>
                    <option value="70代">70代</option>
                    <option value="80代">80代</option>
                    <option value="90代">90代</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group__head">
              <label class="form-label">メールアドレス</label>
              <span class="form-badge form-badge--required">必須</span>
            </div>
            <div class="form-group__body">
              <div class="form-input-wrapper">
                <input class="form-input" type="email" placeholder="例：sample@example.com">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group__head">
              <label class="form-label">電話番号</label>
              <span class="form-badge form-badge--required">必須</span>
            </div>
            <div class="form-group__body">
              <div class="form-input-wrapper">
                <input class="form-input" type="tel" placeholder="例：090-9999-9999">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-group__head">
              <label class="form-label">電話番号</label>
              <span class="form-badge form-badge--optional">任意</span>
            </div>
            <div class="form-group__body">
              <div class="form-input-wrapper">
                <textarea class="form-input" name="" id="" cols="30" rows="10" placeholder="ご質問やご相談などがございましたら、ご記入ください。"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="form-agree">
          <div class="form-agree__inner">
            <p class="form-agree__text">
              <a href="" class="form-agree__link">プライバシーポリシー</a>をご確認の上、「同意する」にチェックを入れてください。
            </p>
            <div class="form-checkbox">
              <label for="agree">
                <input type="checkbox" id="agree">
                <span>同意する</span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-btn">
          <a href="#" class="btn btn--green">
            <p>確認画面へ</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
