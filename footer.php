<?php
$rootDir = get_template_directory_uri();
?>
<?php wp_footer(); ?>
    <footer class="footer">
      <section id="access" class="footer-access">
        <div class="footer-access__inner">
          <div class="footer-access__left">
            <div class="section-title__wrapper --white --left --small">
              <h2 class="section-title section-title">ACCESS</h2>
              <p class="section-sub-title">アクセス</p>
            </div>
            <div class="footer-access__info">
              <p class="footer-access__info-name">MTXスポーツ・関節クリニック</p>
              <p class="footer-access__info-address">
                〒102-0083 東京都千代田区麹町６丁目４−１６<br>ESCALIER麹町 2階<a href="" class="footer-access__info-link">GoogleMap</a>
              </p>
              <p class="footer-access__info-address">四ツ谷駅3番出口より徒歩6分<br>麹町駅5番出口より徒歩7分</p>
              <p class="footer-access__info-tel">03-6272-5047</p>
            </div>
            <div class="footer-access__time">
              <div class="footer-access__close">
                <p class="footer-access__close-title">休診日</p>
                <p class="footer-access__close-text">土日祝日</p>
              </div>
              <div class="footer-access__close-img">
                <picture>
                  <source media="(max-width: 786px)" srcset="<?php echo $rootDir ?>/images/closed-days-sp.png">
                  <img src="<?php echo $rootDir ?>/images/closed-days.png" alt="診療時間 10:00~17:00 月火水木金">
                </picture>
              </div>
            </div>
          </div>
          <div class="footer-access__right">
            <div class="footer-access__right-img">
              <img src="<?php echo $rootDir ?>/images/map.png" alt="">
            </div>
          </div>
        </div>
      </section>

      <section class="footer-contact">
        <div class="footer-contact__inner">
          <div class="section-title__wrapper --light_green --center --small">
            <h2 class="section-title">CONTACT</h2>
            <p class="section-sub-title">ご予約・お問い合わせ</p>
            <span class="footer-contact__text footer-contact__text--float">まずは気軽にご相談から</span>
          </div>
          <p class="footer-contact__text">
            あなたの膝・関節の悩みをお聞かせください。<br>
            ひとりひとりに適した治療法をご提案させていただきます。
          </p>
          <h4 class="footer-contact__sub-title">診察のご予約</h4>
          <div class="footer-contact__btn-wrapper">
            <!-- <a href="" class="btn btn--orange btn--shadow">
              <span>WEB予約</span>
            </a> -->
            <a href="" class="btn btn--orange btn--line_white btn--shadow">
              <span>LINEでご相談・予約</span>
            </a>
          </div>
          <p class="footer-contact__text footer-contact__text-sub">お電話でのご予約・お問い合わせも承っております。</p>
          <a href="" class="btn btn--white btn--tel btn--shadow sp">
            <span>03-6272-5047</span>
          </a>
          <p class="footer-contact__time-text sp">
            受付時間 10:00~17:00<br>
            月曜日〜金曜日（土日祝日は除く）
          </p>
          <div class="footer-contact__time pc">
            <div class="footer-contact__time-inner">
              <p class="footer-contact__tel">03-6272-5047</p>
              <p class="footer-contact__time-text">
                受付時間 10:00~17:00<br>
                月曜日〜金曜日（土日祝日は除く）
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="footer__inner">
        <div class="footer__logo">
          <a href="/" class="footer__logo-link">
            <img src="<?php echo $rootDir ?>/images/logo--white.svg" alt="MTX SPORTS & ARTICULAR CLINIC スポーツ・関節クリニック">
          </a>
        </div>
        <div class="footer__copyright">
          <small>Copyright © 2022 MTXスポーツ・関節CLINIC.All Rights Reserved.</small>
        </div>
      </div>

      <div class="footer-float">
        <div class="footer-float__inner">
          <div class="footer-float__inner-left">
            <div class="footer-contact__btn-wrapper">
              <!-- <a href="" class="btn btn--orange btn--shadow">
                <span>まずはWEB予約</span>
              </a> -->
              <a href="" class="btn btn--white btn--tel btn--shadow sp">
                <span>電話で予約・相談</span>
              </a>
              <a href="" class="btn btn--orange btn--line_white btn--shadow">
                <span>LINEでご相談・予約</span>
              </a>
            </div>
          </div>
          <div class="footer-float__inner-right pc">
            <div class="footer-contact__time">
              <div class="footer-contact__time-inner">
                <p class="footer-contact__tel">03-6272-5047</p>
                <p class="footer-contact__time-text">
                  受付時間 10:00~17:00<br>
                  月曜日〜金曜日（土日祝日は除く）
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
</div>
<script src="<?php echo $rootDir ?>/js/common.js"></script>
</body>
</html>
