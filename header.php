<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="【ページの説明文】" />
    <title>MTX膝関節クリニック</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vender/swiper-bundle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vender/swiper.min.css">
    <link rel="shortcut icon" href="【ファイル名.ico】" />
    <link rel="apple-touch-icon-precomposed" href="【画像のパス/apple-touch-icon-precomposed.png】" />
    <!-- facebook -->
    <!-- <meta property="og:url" content="【ページのURL】 /">
    <meta property="og:title" content="【ページのタイトル】" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="【ページの説明】" />
    <meta property="og:image" content="【サムネイル画像のURL】" />
    <meta property="og:site_name" content="【サイトのタイトル】" />
    <meta property="fb:app_id" content="【appID】" />
    <meta property="og:locale" content="ja_JP" /> -->
    <!-- Twitter -->
    <!-- <meta name="twitter:card" content="【カードの種類】" />
    <meta name="twitter:site" content="【@ユーザー名】" />
    <meta name="twitter:description" content="【ページの説明】" />
    <meta name="twitter:image:src" content="【サムネイル画像のURL】" /> -->
    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/ofs1fip.css">

    <script src="<?php echo get_template_directory_uri(); ?>/js/vender/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vender/swiper.min.js"></script>
    <?php wp_head();?>
</head>
<?php
$rootDir = get_template_directory_uri();
?>
<body>
    <div class="container">
        <header class="header">
          <div class="header__inner">
            <div class="header__left">
              <h1 class="header__logo">
                <a href="/" class="header__logo-link">
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
                  <a href="#medical-menu" class="header__link">
                    症状から探す
                  </a>
                </li>
                <li class="header__item">
                  <a href="#message" class="header__link">
                    院長メッセージ
                  </a>
                </li>
                <li class="header__item">
                  <a href="#clinic-features" class="header__link">
                    クリニックの特徴
                  </a>
                </li>
                <li class="header__item">
                  <a href="#treatment" class="header__link">
                    治療メニュー
                  </a>
                </li>
                <li class="header__item">
                  <a href="#access" class="header__link">
                    アクセス
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
                    <a href="#medical-menu" class="header__link">
                      症状から探す
                    </a>
                  </li>
                  <li class="header__item">
                    <a href="#message" class="header__link">
                      院長メッセージ
                    </a>
                  </li>
                  <li class="header__item">
                    <a href="#clinic-features" class="header__link">
                      クリニックの特徴
                    </a>
                  </li>
                  <li class="header__item">
                    <a href="#treatment" class="header__link">
                      治療メニュー
                    </a>
                  </li>
                  <li class="header__item">
                    <a href="#access" class="header__link">
                      アクセス
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="header__hamburger-bg"></div>
        </header>
