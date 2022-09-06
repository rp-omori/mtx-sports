<?php
$rootDir = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W688LWK');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="アスリートの競技人生・身体的障害のある方の人生に向き合い、身体の機能改善に取り組んできたMTXだからできる「再生医療」×「運動療法」を組み合わせた医療。医師とトレーナー陣が一体となって、パフォーマンスや痛みに悩む方々に寄り添い、共に解決に向かって進んでいきます。" />
    <title>MTXスポーツ・関節クリニック</title>
    <link rel="shortcut icon" href="<?php echo $rootDir; ?>/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/css/default.css">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/css/vender/swiper-bundle.css">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/css/vender/swiper.min.css">
    <link rel="apple-touch-icon-precomposed" href="【画像のパス/apple-touch-icon-precomposed.png】" />
    <!-- facebook -->
    <meta property="og:url" content="https://mtx-clinic.jp/">
    <meta property="og:title" content="MTXスポーツ・関節クリニック" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="アスリートの競技人生・身体的障害のある方の人生に向き合い、身体の機能改善に取り組んできたMTXだからできる「再生医療」×「運動療法」を組み合わせた医療。医師とトレーナー陣が一体となって、パフォーマンスや痛みに悩む方々に寄り添い、共に解決に向かって進んでいきます。" />
    <meta property="og:image" content="<?php echo $rootDir; ?>/images/ogp.png" />
    <meta property="og:site_name" content="MTXスポーツ・関節クリニック" />
    <meta property="og:locale" content="ja_JP" />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="アスリートの競技人生・身体的障害のある方の人生に向き合い、身体の機能改善に取り組んできたMTXだからできる「再生医療」×「運動療法」を組み合わせた医療。医師とトレーナー陣が一体となって、パフォーマンスや痛みに悩む方々に寄り添い、共に解決に向かって進んでいきます。" />
    <meta name="twitter:image:src" content="<?php echo $rootDir; ?>/images/ogp.png" />
    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/ofs1fip.css">

    <script src="<?php echo $rootDir; ?>/js/vender/jquery.min.js"></script>
    <script src="<?php echo $rootDir; ?>/js/vender/swiper.min.js"></script>
    <?php wp_head();?>
</head>
<body>
    <div class="container">
        <header id="header" class="header">
          <div class="header__inner">
            <div class="header__left">
              <h1 class="header__logo">
                <a href="<?php echo home_url(); ?>" class="header__logo-link">
                  <img src="<?php echo $rootDir ?>/images/logo--black.svg" alt="MTX SPORTS & ARTICULAR CLINIC スポーツ・関節クリニック">
                </a>
              </h1>
              <!-- <div class="header__info">
                <div class="header__icon-tel">
                  <img src="<?php echo $rootDir ?>/images/icon-tel--white.svg" alt="">
                </div>
                <div class="header__phone-num">
                  <a href="tel:000-00-0000">000-00-0000</a>
                </div>
                <p class="header__hour">受付時間 10:00〜18:00</p>
              </div> -->
            </div>

            <nav class="header__nav">
              <ul class="header__list">
                <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/')), '#', 'medical-menu'; ?>" class="header__link">
                    症状から探す
                  </a>
                </li>
                <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/')), '#', 'clinic-features'; ?>" class="header__link header__link--arrow">
                    クリニックの特徴
                  </a>
                  <div class="header__dropdown">
                    <a href="<?php echo esc_url(home_url('/aboutus')); ?>" class="header__dropdown-item">開院の背景と想い</a>
                    <a href="<?php echo esc_url(home_url('/system_facility')); ?>" class="header__dropdown-item">治療体制と施設・設備</a>
                  </div>
                </li>
                <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/')), '#', 'clinic-features'; ?>" class="header__link header__link--arrow">
                    治療について
                  </a>
                  <div class="header__dropdown">
                    <a href="<?php echo esc_url(home_url('/flow')); ?>" class="header__dropdown-item">治療の流れ</a>
                    <a href="<?php echo esc_url(home_url('/')), '#', 'medical-menu'; ?>" class="header__dropdown-item">診療科目</a>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="header__dropdown-item">治療メニュー</a>
                    <a href="<?php echo esc_url(home_url('/price')); ?>" class="header__dropdown-item">料金表</a>
                  </div>
                </li>
                <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/staff')); ?>" class="header__link">
                    医師・スタッフ紹介
                  </a>
                  <!-- <div class="header__dropdown header__dropdown--wide">
                    <div class="header__dropdown-item-wrapper">
                      <div class="header__dropdown-item-left">
                        <a href="" class="header__dropdown-item">院長</a>
                        <a href="" class="header__dropdown-item">監修医師</a>
                        <a href="" class="header__dropdown-item">外来医師</a>
                      </div>
                      <div class="header__dropdown-item-right">
                        <a href="" class="header__dropdown-item">理学療法士</a>
                        <a href="" class="header__dropdown-item">柔道整復師</a>
                        <a href="" class="header__dropdown-item">HALリハビリ担当</a>
                      </div>
                    </div>
                    <a href="" class="header__dropdown-item">はり師・きゅう師・あん摩マッサージ指圧師</a>
                  </div> -->
                </li>
                <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/')), '#', 'access'; ?>" class="header__link">
                    アクセス
                  </a>
                </li>
                <!-- <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/news')); ?>" class="header__link">
                    お知らせ
                  </a>
                </li>
                <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/colum')); ?>" class="header__link">
                    コラム
                  </a>
                </li> -->
              </ul>
            </nav>

            <div class="header__mobile-nav">
              <button class="header__hamburger" type="button" aria-controls="drawer" aria-expanded="false" aria-label="MENU">
                <span></span>
                <span></span>
                <span></span>
              </button>
              <nav id="drawer" class="header__drawer" aria-hidden="true">
                <ul class="header__list">
                  <li class="header__item">
                    <a href="<?php echo esc_url(home_url('/')), '#', 'medical-menu'; ?>" class="header__link js-header-drawer">
                      症状から探す
                    </a>
                  </li>
                  <li class="header__item">
                    <span class="header__link js-header-drawer header__circle">
                      クリニックの特徴
                    </span>
                    <ul class="header__drawer-list">
                      <li class="header__drawer-item">
                        <a href="<?php echo esc_url(home_url('/aboutus')); ?>" class="header__drawer-link">開院の背景と想い</a>
                      </li>
                      <li class="header__drawer-item">
                        <a href="<?php echo esc_url(home_url('/system_facility')); ?>" class="header__drawer-link">治療体制と施設・設備</a>
                      </li>
                    </ul>
                  </li>
                  <li class="header__item">
                    <span class="header__link js-header-drawer header__circle">
                      治療メニュー
                    </span>
                    <ul class="header__drawer-list">
                      <li class="header__drawer-item">
                        <a href="<?php echo esc_url(home_url('/flow')); ?>" class="header__drawer-link">治療の流れ</a>
                      </li>
                      <li class="header__drawer-item">
                        <a href="<?php echo esc_url(home_url('/')), '#', 'medical-menu'; ?>" class="header__drawer-link">診療科目</a>
                      </li>
                      <li class="header__drawer-item">
                        <a href="<?php echo esc_url(home_url('/services')); ?>" class="header__drawer-link">治療メニュー</a>
                      </li>
                      <li class="header__drawer-item">
                        <a href="<?php echo esc_url(home_url('/price')); ?>" class="header__drawer-link">料金表</a>
                      </li>
                    </ul>
                  </li>
                  <li class="header__item">
                    <a href="<?php echo esc_url(home_url('/staff')); ?>" class="header__link js-header-drawer">
                      医師・スタッフ紹介
                    </a>
                    <!-- <ul class="header__drawer-list">
                      <li class="header__drawer-item">
                        <a href="" class="header__drawer-link">院長</a>
                      </li>
                      <li class="header__drawer-item">
                        <a href="" class="header__drawer-link">監修医師</a>
                      </li>
                      <li class="header__drawer-item">
                        <a href="" class="header__drawer-link">外来医師</a>
                      </li>
                      <li class="header__drawer-item">
                        <a href="" class="header__drawer-link">理学療法士</a>
                      </li>
                      <li class="header__drawer-item">
                        <a href="" class="header__drawer-link">柔道整復師</a>
                      </li>
                      <li class="header__drawer-item">
                        <a href="" class="header__drawer-link">HALリハビリ担当</a>
                      </li>
                      <li class="header__drawer-item">
                        <a href="" class="header__drawer-link">はり師・きゅう師・あん摩マッサージ指圧師</a>
                      </li>
                    </ul> -->
                  </li>
                  <li class="header__item">
                    <a href="<?php echo esc_url(home_url('/')), '#', 'access'; ?>" class="header__link js-header-drawer">
                      アクセス
                  </a>
                  </li>
                  <!-- <li class="header__item">
                    <a href="<?php echo esc_url(home_url('/news')); ?>" class="header__link js-header-drawer">
                      お知らせ
                    </a>
                  </li>
                  <li class="header__item">
                    <a href="<?php echo esc_url(home_url('/colum')); ?>" class="header__link js-header-drawer">
                      コラム
                    </a>
                  </li> -->
                </ul>
              </nav>
            </div>
          </div>
          <!-- <div class="header__hamburger-bg"></div> -->
        </header>
