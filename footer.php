<?php
$rootDir = get_template_directory_uri();
?>
<?php wp_footer(); ?>
    <footer class="footer">
      <?php
        $url = $_SERVER['REQUEST_URI'];
        $is_contact = strstr($url, 'contact');
        if ($is_contact == false):
      ?>
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
                〒102-0083 東京都千代田区麹町６丁目４−１６<br>ESCALIER麹町 2階<a href="https://www.google.com/maps/place/ESCALIER%E9%BA%B9%E7%94%BA/@35.6857951,139.7305219,17z/data=!3m2!4b1!5s0x60188c8a2446dea3:0x821482163a5eb290!4m5!3m4!1s0x60188da116fc62bf:0xad0831d9e59fc5d0!8m2!3d35.6857951!4d139.7327159" class="footer-access__info-link" target="_blank">GoogleMap</a>
              </p>
              <p class="footer-access__info-address">四ツ谷駅麹町口より徒歩4分<br>麹町駅5番出口より徒歩7分</p>
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
            <div class="footer-access__right-wrapper">
              <div class="footer-access__right-img">
                <img src="<?php echo $rootDir ?>/images/map.png" alt="MTX">
              </div>
              <div class="footer-access__right-img-02">
                <img src="<?php echo $rootDir ?>/images/inside.jpg" alt="">
              </div>
            </div>
            <p class="footer-access__right-text">※MTXアカデミーと四ツ谷メディカル＆テクノロジーセンター<br class="sp">（ddrobotec）は<br class="pc">当クリニックの連携施設です。</p>
          </div>
        </div>
      </section>

      <section class="footer-slider">
        <div class="footer-slider-wrapper">
          <div class="footer-slider-inner footer-linear">
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide01.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide02.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide03.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide04.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide05.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide06.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide07.jpg" alt=""></div>
          </div>
          <div class="footer-slider-inner footer-linear">
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide01.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide02.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide03.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide04.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide05.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide06.jpg" alt=""></div>
            <div class="footer-slider-item"><img src="<?php echo $rootDir ?>/images/footer-slide07.jpg" alt=""></div>
          </div>
        </div>
      </section>

      <section class="footer-contact">
        <div class="footer-contact__inner">
          <div class="section-title__wrapper --light_green --center --x_small">
            <h2 class="section-title">CONTACT</h2>
            <p class="section-sub-title">ご予約・お問い合わせ</p>
            <span class="footer-contact__text footer-contact__text--float">まずは気軽にご相談から</span>
          </div>
          <p class="footer-contact__text">
            あなたの膝・関節の悩みをお聞かせください。<br>
            ひとりひとりに適した治療法をご提案させていただきます。
          </p>
          <h4 class="footer-contact__sub-title">診察のご予約・ご相談</h4>
          <div class="footer-contact__btn-wrapper">
            <a href="https://web.booking.clius.jp/reserve/mtxclinic_yotsuya" class="btn btn--orange btn--shadow">
              <span>WEB予約</span>
            </a>
            <a href="https://lin.ee/DhflNAe" class="btn btn--white btn--line btn--shadow">
              <span>LINEでご相談・予約</span>
            </a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn--white btn--email_green btn--shadow">
              <span>メールで診療相談</span>
            </a>
          </div>
          <p class="footer-contact__text footer-contact__text-sub">お電話でのご予約・お問い合わせも承っております。</p>
          <a href="tel:0362725047" class="btn btn--white btn--tel btn--shadow sp">
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
      <?php endif; ?>

      <section class="footer__main">
        <div class="footer__inner <?php if($is_contact == true): ?>footer__inner--contact<?php endif; ?>">
          <div class="footer__top">
            <div class="footer__logo">
              <a href="<?php echo home_url(); ?>" class="footer__logo-link">
                <img src="<?php echo $rootDir ?>/images/logo--white.svg" alt="MTX SPORTS & ARTICULAR CLINIC スポーツ・関節クリニック">
              </a>
            </div>
            <ul class="footer__menu">
              <li class="footer__menu-nav">
                <ul class="footer__menu-list">
                  <li class="footer__menu-head">
                    <span class="footer_menu-link">クリニックの特徴</span>
                  </li>
                  <li class="footer__menu-item">
                    <a href="<?php echo esc_url(home_url('/aboutus')); ?>" class="footer_menu-link">開院の背景と想い</a>
                  </li>
                  <li class="footer__menu-item">
                    <a href="<?php echo esc_url(home_url('/system_facility')); ?>" class="footer_menu-link">治療体制と施設・設備</a>
                  </li>
                </ul>
              </li>
              <li class="footer__menu-nav">
                <ul class="footer__menu-list">
                  <li class="footer__menu-head">
                    <span class="footer__menu-link">治療について</span>
                  </li>
                  <li class="footer__menu-item">
                    <a href="<?php echo esc_url(home_url('/flow')); ?>" class="footer__menu-link">治療の流れ</a>
                  </li>
                  <li class="footer__menu-item">
                    <a href="<?php echo esc_url(home_url('/')), '#', 'medical-menu'; ?>" class="footer__menu-link">診療科目</a>
                  </li>
                  <li class="footer__menu-item">
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="footer__menu-link">治療メニュー</a>
                  </li>
                  <li class="footer__menu-item">
                    <a href="<?php echo esc_url(home_url('/price')); ?>" class="footer__menu-link">料金表</a>
                  </li>
                </ul>
              </li>
              <li class="footer__menu-nav">
                <ul class="footer__menu-list">
                  <li class="footer__menu-head">
                    <a href="<?php echo esc_url(home_url('/staff')); ?>" class="footer__menu-link">医師・スタッフ紹介</a>
                  </li>
                  <!-- <li class="footer__menu-item">
                    <a href="" class="footer__menu-link">院長</a>
                  </li>
                  <li class="footer__menu-item">
                    <a href="" class="footer__menu-link">監修医師</a>
                  </li>
                  <li class="footer__menu-item">
                    <a href="" class="footer__menu-link">理学療法士</a>
                  </li>
                  <li class="footer__menu-item">
                    <a href="" class="footer__menu-link">柔道整復師</a>
                  </li>
                  <li class="footer__menu-item">
                    <a href="" class="footer__menu-link">ハリ師・きゅう師・あん摩<br>マッサージ指圧師</a>
                  </li>
                  <li class="footer__menu-item">
                    <a href="" class="footer__menu-link">HALリハビリ担当</a>
                  </li> -->
                </ul>
              </li>
              <!-- <li class="footer__menu-nav">
                <ul class="footer__menu-list">
                  <li class="footer__menu-sub">
                    <a href="<?php echo esc_url(home_url('/news')); ?>" class="footer_menu-link">お知らせ</a>
                  </li>
                  <li class="footer__menu-sub">
                    <a href="<?php echo esc_url(home_url('/colum')); ?>" class="footer_menu-link">コラム</a>
                  </li>
                </ul>
              </li> -->
            </ul>
          </div>
          <div class="footer__bottom">
            <div class="footer__sns">
              <p class="footer__sns-text">OFFICIAL SNS</p>
              <div class="footer__sns-wrapper">
                <a href="https://www.instagram.com/mtx_s_and_a_clinic" target="_blank" class="footer__sns-link footer__sns-link--instagram">
                  <img src="<?php echo $rootDir ?>/images/icon/icon-instagram.svg" alt="">
                </a>
                <a href="https://www.facebook.com/MTX-%E3%82%B9%E3%83%9D%E3%83%BC%E3%83%84%E9%96%A2%E7%AF%80%E[…]%95%B7-%E5%AF%8C%E5%B2%A1%E7%BE%A9%E4%BB%81-108017555332156/" target="_blank" class="footer__sns-link footer__sns-link--facebook">
                  <img src="<?php echo $rootDir ?>/images/icon/icon-facebook.svg" alt="">
                </a>
              </div>
            </div>
            <div class="footer__copyright-wrapper">
              <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="footer__copyright-wrapper-text">個人情報保護方針</a>
              <div class="footer__copyright">
                <small>Copyright © 2022 MTXスポーツ・関節CLINIC.All Rights Reserved.</small>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php if ($is_contact == false): ?>
      <div class="footer-float">
        <div class="footer-float__inner">
          <div class="footer-float__inner-left">
            <!-- <p class="footer-float__inner-text">診療のご予約はこちら</p> -->
            <div class="footer-contact__btn-wrapper">
              <a href="tel:0362725047" class="btn btn--white btn--tel_white sp">
                <span></span>
              </a>
              <a href="https://web.booking.clius.jp/reserve/mtxclinic_yotsuya" target="_blank" class="btn btn--orange btn--web pc">
                <span>まずはWEB予約</span>
              </a>
              <a href="https://web.booking.clius.jp/reserve/mtxclinic_yotsuya" target="_blank" class="btn btn--orange btn--web sp">
                <span>WEB予約</span>
              </a>
              <a href="https://lin.ee/DhflNAe" target="_blank" class="btn btn--white btn--line pc">
                <span>LINEでご相談・予約</span>
              </a>
              <a href="https://lin.ee/DhflNAe" target="_blank" class="btn btn--white btn--line sp">
                <span>予約・相談</span>
              </a>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" target="_blank" class="btn btn--white btn--email_green pc">
                <span>メールで相談</span>
              </a>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" target="_blank" class="btn btn--white btn--email_green sp">
                <span>相談</span>
              </a>
            </div>
          </div>
          <div class="footer-float__inner-right">
            <!-- <p class="footer-float__inner-text">受診前のご相談はこちら</p>
            <div class="footer-contact__btn-wrapper">
              <a href="" class="btn btn--footer_green btn--email">
                <span>メールで診療相談</span>
              </a>
            </div> -->
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
      <?php endif; ?>
    </footer>
</div>
<script src="<?php echo $rootDir ?>/js/common.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W688LWK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>
