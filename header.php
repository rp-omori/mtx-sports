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
    <meta name="google-site-verification" content="w-k7Kuxavj7W_1r1d--lGlU4DwsoYFDKehOKy0M8OvA" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1.0, user-scalable=no">
    <title>再生医療、運動療法ならMTXスポーツ・関節クリニック</title>
    <link rel="shortcut icon" href="<?php echo $rootDir; ?>/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/css/default.css">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/css/vender/swiper-bundle.css">
    <link rel="stylesheet" href="<?php echo $rootDir; ?>/css/vender/swiper.min.css">
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
              <?php if(is_singular('column')) { ?>
              <div class="header__logo">
                <a href="<?php echo home_url(); ?>" class="header__logo-link">
                  <img src="<?php echo $rootDir ?>/images/logo--black.svg" alt="<?php the_title(); ?> | 関節の痛みなら、MTXスポーツ・関節クリニック">
                </a>
              </div>
              <?php } else { ?>
              <h1 class="header__logo">
                <a href="<?php echo home_url(); ?>" class="header__logo-link">
                  <img src="<?php echo $rootDir ?>/images/logo--black.svg" alt="<?php the_title(); ?> | 関節の痛みなら、MTXスポーツ・関節クリニック">
                </a>
              </h1>
              <?php } ?>
            </div>

            <nav class="header__nav">
              <ul class="header__list">
                <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/')), '#', 'medical-menu'; ?>" class="header__link">
                    症状からさがす
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
                </li>
                <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/')), '#', 'access'; ?>" class="header__link">
                    アクセス
                  </a>
                </li>
                <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/news')); ?>" class="header__link">
                    お知らせ
                  </a>
                </li>
                <li class="header__item">
                  <a href="<?php echo esc_url(home_url('/column')); ?>" class="header__link">
                    コラム
                  </a>
                </li>
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
                      症状からさがす
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
                  </li>
                  <li class="header__item">
                    <a href="<?php echo esc_url(home_url('/')), '#', 'access'; ?>" class="header__link js-header-drawer">
                      アクセス
                  </a>
                  </li>
                  <li class="header__item">
                    <a href="<?php echo esc_url(home_url('/news')); ?>" class="header__link js-header-drawer">
                      お知らせ
                    </a>
                  </li>
                  <li class="header__item">
                    <a href="<?php echo esc_url(home_url('/column')); ?>" class="header__link js-header-drawer">
                      コラム
                    </a>
                  </li>
                  <li class="header__item">
                    <a href="<?php echo esc_url(home_url('/message')); ?>" class="header__link js-header-drawer">
                      医療関係者の皆様へ
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </header>
