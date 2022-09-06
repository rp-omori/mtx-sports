<?php
/**
 * Template Name: index
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>
<main class="main">
  <div class="top">
    <div id="kv" class="kv">
      <div class="bg-triangle-l">
        <img src="<?php echo $rootDir ?>/images/top/bg-triangle-l.svg" alt="">
      </div>
      <p class="kv__float-text">MTX SPORTS & ARTICULAR CLINIC</p>
      <div class="kv__swiper">
        <div class="txtArea">
          <!-- <div class="txtArea__head white_txt">
            <p class="date">08.29<span>mon~</span></p>
            <h2>GRAND OPEN!!</h2>
          </div> -->
          <p class="txtArea__label">再生医療×運動療法で</p>
          <h3 class="txtArea__sub-title white_txt">
            <picture>
              <!-- <source media="(max-width: 767px)" srcset="<?php echo $rootDir ?>/images/top/kv_lead-sp.svg">
              <img src="<?php echo $rootDir ?>/images/top/kv_lead.svg" alt="治るスポーツ・関節医療を目指して"> -->
              <source media="(max-width: 767px)" srcset="<?php echo $rootDir ?>/images/top/kv_lead_new-sp.svg">
              <img src="<?php echo $rootDir ?>/images/top/kv_lead_new.svg" alt="治るスポーツ・関節医療を目指して">
            </picture>
          </h3>
          <p class="txtArea__text white_txt pc">アスリートの競技人生・身体的障害のある方の人生に向き合い、身体の機能改善に取り組んできたMTXだからできる「再生医療」×「運動療法」を組み合わせた医療。医師と理学療法士、トレーナー陣が一体となって、パフォーマンスや痛みに悩む方々に寄り添い、共に解決に向かって進んでいきます。</p>
          <div class="feature__box-wrapper pc">
            <div class="feature__box">
              <div class="feature__circle">
                <p class="feature__circle-text">運動による<br>スポーツ障害</p>
              </div>
              <div class="feature__circle">
                <p class="feature__circle-text">保険診療では<br>治らなかった<br>関節痛</p>
              </div>
              <div class="feature__circle">
                <p class="feature__circle-text">子どもの<br>成長痛<br>・運動機能の悩み</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo $rootDir ?>/images/top/kv_01-sp.png">
              <img src="<?php echo $rootDir ?>/images/top/kv_01.png" alt="">
            </picture>
            <!-- <div class="txtArea">
              <div class="txtArea__head white_txt">
                <p class="date">08.29<span>mon~</span></p>
                <h2>GRAND OPEN!!</h2>
              </div>
              <p class="txtArea__label">再生医療×運動療法で</p>
              <h3 class="txtArea__sub-title white_txt">
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo $rootDir ?>/images/top/kv_lead-sp.svg">
                  <img src="<?php echo $rootDir ?>/images/top/kv_lead.svg" alt="治るスポーツ・関節医療を目指して">
                </picture>
              </h3>
              <p class="txtArea__text white_txt pc">アスリートの競技人生・身体的障害のある方の人生に向き合い、身体の機能改善に取り組んできたMTXだからできる「再生医療」×「運動療法」を組み合わせた医療。医師と理学療法士、トレーナー陣が一体となって、パフォーマンスや痛みに悩む方々に寄り添い、共に解決に向かって進んでいきます。</p>
              <div class="feature__box-wrapper pc">
                <div class="feature__box">
                  <div class="feature__circle">
                    <p class="feature__circle-text">運動による<br>スポーツ障害</p>
                  </div>
                  <div class="feature__circle">
                    <p class="feature__circle-text">保険診療では<br>治らなかった<br>関節痛</p>
                  </div>
                  <div class="feature__circle">
                    <p class="feature__circle-text">子どもの<br>成長痛<br>・運動機能の悩み</p>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <div class="swiper-slide">
            <div class="kv_img">
              <picture>
                <source media="(max-width: 768px)" srcset="<?php echo $rootDir ?>/images/top/kv_02-sp.png">
                <img src="<?php echo $rootDir ?>/images/top/kv_02.png" alt="">
              </picture>
            </div>
            <!-- <div class="txtArea">
              <div class="txtArea__head white_txt">
                <p class="date">08.29<span>mon~</span></p>
                <h2>GRAND OPEN!!</h2>
              </div>
              <p class="txtArea__label">再生医療×運動療法で</p>
              <h3 class="txtArea__sub-title white_txt">
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo $rootDir ?>/images/top/kv_lead-sp.svg">
                  <img src="<?php echo $rootDir ?>/images/top/kv_lead.svg" alt="治るスポーツ・関節医療を目指して">
                </picture>
              </h3>
              <p class="txtArea__text white_txt pc">アスリートの競技人生・身体的障害のある方の人生に向き合い、身体の機能改善に取り組んできたMTXだからできる「再生医療」×「運動療法」を組み合わせた医療。医師と理学療法士、トレーナー陣が一体となって、パフォーマンスや痛みに悩む方々に寄り添い、共に解決に向かって進んでいきます。</p>
              <div class="feature__box-wrapper pc">
                <div class="feature__box">
                  <div class="feature__circle">
                    <p class="feature__circle-text">運動による<br>スポーツ障害</p>
                  </div>
                  <div class="feature__circle">
                    <p class="feature__circle-text">保険診療では<br>治らなかった<br>関節痛</p>
                  </div>
                  <div class="feature__circle">
                    <p class="feature__circle-text">子どもの<br>成長痛<br>・運動機能の悩み</p>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <div class="swiper-slide">
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo $rootDir ?>/images/top/kv_03-sp.png">
              <img src="<?php echo $rootDir ?>/images/top/kv_03.png" alt="">
            </picture>
            <!-- <div class="txtArea">
              <div class="txtArea__head white_txt">
                <p class="date">08.29<span>mon~</span></p>
                <h2>GRAND OPEN!!</h2>
              </div>
              <p class="txtArea__label">再生医療×運動療法で</p>
              <h3 class="txtArea__sub-title white_txt">
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo $rootDir ?>/images/top/kv_lead-sp.svg">
                  <img src="<?php echo $rootDir ?>/images/top/kv_lead.svg" alt="治るスポーツ・関節医療を目指して">
                </picture>
              </h3>
              <p class="txtArea__text white_txt pc">アスリートの競技人生・身体的障害のある方の人生に向き合い、身体の機能改善に取り組んできたMTXだからできる「再生医療」×「運動療法」を組み合わせた医療。医師と理学療法士、トレーナー陣が一体となって、パフォーマンスや痛みに悩む方々に寄り添い、共に解決に向かって進んでいきます。</p>
              <div class="feature__box-wrapper pc">
                <div class="feature__box">
                  <div class="feature__circle">
                    <p class="feature__circle-text">運動による<br>スポーツ障害</p>
                  </div>
                  <div class="feature__circle">
                    <p class="feature__circle-text">保険診療では<br>治らなかった<br>関節痛</p>
                  </div>
                  <div class="feature__circle">
                    <p class="feature__circle-text">子どもの<br>成長痛<br>・運動機能の悩み</p>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>

        <p class="kv__scroll">SCROLL</p>
      </div>
      <div class="kv__swiper-pagination"></div>

      <div class="kv__text-bottom sp">
        <p class="kv__text">
          アスリートの競技人生・身体的障害のある方の人生に向き合い、身体の機能改善に取り組んできたMTXだからできる「再生医療」×「運動療法」を組み合わせた医療。医師と理学療法士、トレーナー陣が一体となって、パフォーマンスや痛みに悩む方々に寄り添い、共に解決に向かって進んでいきます。
        </p>
        <div class="kv__other">
          <p class="kv__other-text">運動によるスポーツ障害</p>
          <p class="kv__other-text">保険診療では治らなかった関節痛</p>
          <p class="kv__other-text">子どもの成長痛・運動機能の悩み</p>
        </div>
      </div>
    </div>

    <!-- <section class="news">
      <div class="news__wrapper">
        <div class="news__inner">
          <div class="news__head">
            <div class="news__head-wrapper">
              <span class="news__head-label sp">NEWS</span>
              <h2 class="news__head-title">お知らせ</h2>
            </div>
            <a href="" class="news__archive">
              一覧を見る
            </a>
          </div>
          <ul class="news__list">
            <li class="news__item">
              <a href="" class="news__link">
                <p class="news__date">2022.5.10</p>
                <p class="news__title">タイトルが入ります</p>
              </a>
            </li>
            <li class="news__item">
              <a href="" class="news__link">
                <p class="news__date">2022.5.10</p>
                <p class="news__title">タイトルが入ります</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section> -->

    <section id="medical-menu" class="medical-menu">
      <div class="section-title__wrapper --white --center js-titleAnimationTarget">
        <h2 class="section-title">MENU</h2>
        <p class="section-sub-title">症状から探す診療メニュー</p>
      </div>
      <ul class="medical-menu__list">
        <li class="medical-menu__item medical-menu__item--01" style="animation-delay: 0s">
          <h3 class="medical-menu__head">
            <div class="medical-menu__head-img icon-shoulder">
              <img src="<?php echo $rootDir ?>/images/top/icon-shoulder.svg" alt="">
            </div>
            <button class="medical-menu__accordion">
              肩が痛い・肩がこる
            </button>
          </h3>
          <ul class="symptoms__list">
          <?php
            $args = [
              'post_type' => 'medicaldetail',
              'order' => 'ASC',
              'posts_per_page' => -1,
              'tax_query' => [
                [
                  'taxonomy' => 'medical_type',
                  'field'    => 'slug',
                  'terms'    => 'shoulder',
                ]
              ],
            ];
            $WP_post = new WP_Query($args);
            if ($WP_post->have_posts()) {
              while ($WP_post->have_posts()) {
                $WP_post->the_post();
          ?>
            <li class="symptoms__item">
              <a href="<?php the_permalink(); ?>" class="symptoms__link">
                <h4 class="symptoms__name"><?php the_title(); ?></h4>
              </a>
            </li>
          <?php
            }
            wp_reset_postdata();
          }
          ?>
            <!-- <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">腱板損傷</h4>
              </a>
            </li> -->
          </ul>
        </li>
        <li class="medical-menu__item medical-menu__item--02" style="animation-delay: 0.2s">
          <h3 class="medical-menu__head">
            <div class="medical-menu__head-img icon-lower-back">
              <img src="<?php echo $rootDir ?>/images/top/icon-lower-back.svg" alt="">
            </div>
            <button class="medical-menu__accordion">
              腰が痛い
            </button>
          </h3>
          <ul class="symptoms__list">
          <?php
            $args = [
              'post_type' => 'medicaldetail',
              'order' => 'ASC',
              'posts_per_page' => -1,
              'tax_query' => [
                [
                  'taxonomy' => 'medical_type',
                  'field'    => 'slug',
                  'terms'    => 'lower-back',
                ]
              ],
            ];
            $WP_post = new WP_Query($args);
            if ($WP_post->have_posts()) {
              while ($WP_post->have_posts()) {
                $WP_post->the_post();
          ?>
            <li class="symptoms__item">
              <a href="<?php the_permalink(); ?>" class="symptoms__link">
                <h4 class="symptoms__name"><?php the_title(); ?></h4>
              </a>
            </li>
          <?php
            }
            wp_reset_postdata();
          }
          ?>
            <!-- <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">腰部脊柱管狭窄症</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">腰椎すべり症</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">腰椎椎間板ヘルニア</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">ロコモティブシンドローム</h4>
              </a>
            </li> -->
          </ul>
        </li>
        <li class="medical-menu__item medical-menu__item--03" style="animation-delay: 0.6s">
          <h3 class="medical-menu__head">
            <div class="medical-menu__head-img icon-lower-limbs">
              <img src="<?php echo $rootDir ?>/images/top/icon-lower-limbs.svg" alt="">
            </div>
            <button class="medical-menu__accordion">
              下肢の痛みやしびれ<br class="sp">など
            </button>
          </h3>
          <ul class="symptoms__list">
          <?php
            $args = [
              'post_type' => 'medicaldetail',
              'order' => 'ASC',
              'posts_per_page' => -1,
              'tax_query' => [
                [
                  'taxonomy' => 'medical_type',
                  'field'    => 'slug',
                  'terms'    => 'legs',
                ]
              ],
            ];
            $WP_post = new WP_Query($args);
            if ($WP_post->have_posts()) {
              while ($WP_post->have_posts()) {
                $WP_post->the_post();
          ?>
            <li class="symptoms__item">
              <a href="<?php the_permalink(); ?>" class="symptoms__link">
                <h4 class="symptoms__name"><?php the_title(); ?></h4>
              </a>
            </li>
          <?php
            }
            wp_reset_postdata();
          }
          ?>
            <!-- <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">腰部脊柱管狭窄症</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">腰椎すべり症</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">腰椎椎間板ヘルニア</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">ロコモティブシンドローム</h4>
              </a>
            </li> -->
          </ul>
        </li>
        <li class="medical-menu__item medical-menu__item--04" style="animation-delay: 0.8s">
          <h3 class="medical-menu__head">
            <div class="medical-menu__head-img icon-knee">
              <img src="<?php echo $rootDir ?>/images/top/icon-knee.svg" alt="">
            </div>
            <button class="medical-menu__accordion">
              膝が痛い
            </button>
          </h3>
          <ul class="symptoms__list">
          <?php
            $args = [
              'post_type' => 'medicaldetail',
              'order' => 'ASC',
              'posts_per_page' => -1,
              'tax_query' => [
                [
                  'taxonomy' => 'medical_type',
                  'field'    => 'slug',
                  'terms'    => 'knee',
                ]
              ],
            ];
            $WP_post = new WP_Query($args);
            if ($WP_post->have_posts()) {
              while ($WP_post->have_posts()) {
                $WP_post->the_post();
          ?>
            <li class="symptoms__item">
              <a href="<?php the_permalink(); ?>" class="symptoms__link">
                <h4 class="symptoms__name"><?php the_title(); ?></h4>
              </a>
            </li>
          <?php
            }
            wp_reset_postdata();
          }
          ?>
            <!-- <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">変形性関節症</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">ロコモティブシンドローム</h4>
              </a>
            </li> -->
          </ul>
        </li>
        <li class="medical-menu__item medical-menu__item--05 medical-menu__item--dg" style="animation-delay: 1s">
          <h3 class="medical-menu__head dc">
            <div class="medical-menu__head-img icon-sports-injury">
              <img src="<?php echo $rootDir ?>/images/top/icon-sports-injury.svg" alt="">
            </div>
            <button class="medical-menu__accordion">
              スポーツ障害・外傷
            </button>
          </h3>
          <ul class="symptoms__list">
          <?php
            $args = [
              'post_type' => 'medicaldetail',
              'order' => 'ASC',
              'posts_per_page' => -1,
              'tax_query' => [
                [
                  'taxonomy' => 'medical_type',
                  'field'    => 'slug',
                  'terms'    => 'sports',
                ]
              ],
            ];
            $WP_post = new WP_Query($args);
            if ($WP_post->have_posts()) {
              while ($WP_post->have_posts()) {
                $WP_post->the_post();
          ?>
            <li class="symptoms__item">
              <a href="<?php the_permalink(); ?>" class="symptoms__link">
                <h4 class="symptoms__name"><?php the_title(); ?></h4>
              </a>
            </li>
          <?php
            }
            wp_reset_postdata();
          }
          ?>
            <!-- <li class="symptoms__item col">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">疲労骨折</h4>
                <span class="symptoms__note">（腰椎分離症含む）</span>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">関節捻挫<br>（靭帯損傷）</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">野球肘</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">前十字靭帯損傷</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">投球障害肩</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">シンスプリント</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">肉離れ</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">健周囲炎</h4>
              </a>
            </li> -->
          </ul>
        </li>
        <li class="medical-menu__item medical-menu__item--06 medical-menu__item--dg" style="animation-delay: 1.2s">
          <h3 class="medical-menu__head dc">
            <div class="medical-menu__head-img icon-growing-pain">
              <img src="<?php echo $rootDir ?>/images/top/icon-growing-pain.svg" alt="">
            </div>
            <button class="medical-menu__accordion tal">
              子どもの成長による<br class="sp">痛みと<br class="pc">運動機能の悩み
            </button>
          </h3>
          <ul class="symptoms__list">
          <?php
            $args = [
              'post_type' => 'medicaldetail',
              'order' => 'ASC',
              'posts_per_page' => -1,
              'tax_query' => [
                [
                  'taxonomy' => 'medical_type',
                  'field'    => 'slug',
                  'terms'    => 'child',
                ]
              ],
            ];
            $WP_post = new WP_Query($args);
            if ($WP_post->have_posts()) {
              while ($WP_post->have_posts()) {
                $WP_post->the_post();
          ?>
            <li class="symptoms__item">
              <a href="<?php the_permalink(); ?>" class="symptoms__link">
                <h4 class="symptoms__name"><?php the_title(); ?></h4>
              </a>
            </li>
          <?php
            }
            wp_reset_postdata();
          }
          ?>
            <li class="symptoms__item no-link">
              <a href="javascript:void(0)" class="symptoms__link">
                <h4 class="symptoms__name">運動機能の悩み</h4>
                <span class="symptoms__note">※まずはお問合せください</span>
              </a>
            </li>
            <!-- <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">成長痛（骨端症・オスグッド病）</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">運動機能の悩み</h4>
                <span class="symptoms__note">※まずはお問合せください</span>
              </a>
            </li> -->
          </ul>
        </li>
      </ul>
      <div class="medical-menu-line">
        <div class="medical-menu-line__inner">
          <p class="medical-menu-line__text">症状や疾患が特定できない場合は<br class="sp">まずご相談ください</p>
          <div class="medical-menu-line__link-wrapper">
            <a href="https://lin.ee/DhflNAe" class="medical-menu-line__link medical-menu-line__link--line">
              <span class="medical-menu-line__link-text">LINEで<span class="pc">診療</span>相談</span>
            </a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="medical-menu-line__link medical-menu-line__link--email">
              <span class="medical-menu-line__link-text">メールで<span class="pc">診療</span>相談</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="message" class="message">
      <div class="bg-triangle-r">
        <img src="<?php echo $rootDir ?>/images/top/bg-triangle-r.svg" alt="">
      </div>
      <div class="message__inner">
        <div class="message__top">
          <div class="message__img fade-anime-img js-imgAnimation">
            <img src="<?php echo $rootDir ?>/images/top/director.png" alt="">
          </div>
          <div class="message__wrapper">
            <span class="message__label fade-anime-text js-titleAnimationTarget">院長メッセージ</span>
            <h3 class="message__title fade-anime-text js-titleAnimationTarget">
              再生医療×運動療法で<br>
              関節の痛み、スポーツの悩みに<br>
              新たな提案を。
            </h3>
            <p class="message__text fade-anime-text js-titleAnimationTarget">
              私がスポーツドクターになろうと志したきっかけは、私自身の高校時代のアメリカンフットボールの練習中に負った膝の大怪我の経験です。<br>
              痛みや不安と共に運動を続ける日々の中で、自分と同じような悩みをもつアスリートを助けたいと思うようになり、スポーツ医療の本場である米国に留学し、アスレティックトレーナー(ATC)の資格を取得しました。そこで得た現場第一の姿勢は今も医療者としての根幹に息づいています。<br><br>
              これまで、整形外科医として診療をする中で、手術加療を選択せざるを得ない方や、まだ手術に至らないまでも、痛みで苦しんでいる方を多く診てきました。<br>
              日本の保険診療は全ての方々に同様の質の高い医療を安価で提供できる一方、海外では認められているような再生医療を含む先進医療を導入するのには非常に時間がかかっているのが実情です。<br><br>
              当院では、最先端の体外衝撃波や、再生医療の注射を用い、また運動療法も最先端器具と一流のスタッフで行うことにより、相乗効果で症状の改善、再発の予防をしてまいります。
            </p>
            <p class="message__director fade-anime-text js-titleAnimationTarget">
              MTXスポーツ・関節クリニック院長<br>
              富岡 義仁（とみおか　よしひと）
            </p>
          </div>
        </div>
        <div id="profile" class="profile">
          <div class="profile__accordion-head">
            <button id="profile-toggle" class="profile__accordion">
              院長プロフィール<span class="profile__accordion-circle"></span>
            </button>
          </div>
          <div class="profile__main">
            <div class="profile__inner">
              <div class="profile__body">
                <div class="profile__item">
                  <h4 class="profile__head">経歴</h4>
                  <p class="profile__text">
                    インディアナ州立大学アスレティックトレーニング学部　卒業<br>
                    富山大学　医学部卒業<br>
                    東京警察病院　整形外科<br>
                    2022年8月　MTX関節クリニック開院
                  </p>
                </div>
                <div class="profile__item">
                  <h4 class="profile__head">資格</h4>
                  <p class="profile__text">
                    日本整形外科学会公認　整形外科専門医<br>
                    NATA　Certified Athletic Trainer<br>
                    IOC　Diploma in Sports Medicine<br>
                    NASM　Performance Enhancement Specialist<br>
                    CES　Corrective Exercise Specialist<br>
                    SFMA　Selective Functional Movement Assessment
                  </p>
                </div>
                <div class="profile__item">
                  <h4 class="profile__head">帯同</h4>
                  <p class="profile__text">
                    Orthopedic Associates of Hawaii にてDr.Kanに師事<br>
                    プロゴルファー合宿帯同 (2010, 2014)<br>
                    都立西高OWLS (2006-present)<br>
                    楽天NBA Japan Game (2019)<br>
                    TOKYO2020　選手村、バドミントン、自転車　(2021)<br>
                    選手村ドクターを日本最若手として勤務<br>
                    ほか多数
                  </p>
                </div>
                <div class="profile__item">
                  <div class="profile__img-wrapper">
                    <div class="profile__img">
                      <img src="<?php echo $rootDir ?>/images/top/profile01.png" alt="">
                    </div>
                    <div class="profile__img">
                      <img src="<?php echo $rootDir ?>/images/top/profile02.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="clinic-features" class="clinic-features">
      <div class="clinic-features__wrapper">
        <div class="section-title__wrapper --green --right js-titleAnimationTarget">
          <h2 class="section-title">FEATURES</h2>
          <p class="section-sub-title">クリニックの特徴</p>
        </div>
        <div class="clinic-features__01">
          <div class="clinic-features__01-img-wrapper">
            <div class="clinic-features__01-img">
              <img src="<?php echo $rootDir ?>/images/top/features.png" alt="">
            </div>
          </div>
          <div class="clinic-features__01-body js-animationTarget">
            <div class="clinic-features__head-wrapper fade-anime-text js-titleAnimationTarget">
              <span class="clinic-features__head-label">FEATURES</span>
              <p class="clinic-features__head">01</p>
            </div>
            <div class="clinic-features__01-main">
              <p class="clinic-features__01-main-title feature-text-animation pc">再生医療×運動療法</p>
              <p class="clinic-features__01-main-title fade-anime-text js-titleAnimationTarget sp">再生医療×運動療法</p>
              <p class="clinic-features__01-main-sub-title feature-text-animation pc">ONE TEAMでトータルサポート</p>
              <p class="clinic-features__01-main-sub-title fade-anime-text js-titleAnimationTarget sp">ONE TEAMでトータルサポート</p>
              <p class="clinic-features__01-main-text pc feature-text-animation">治療だけではない、リハビリだけでもない。</p>
              <p class="clinic-features__01-main-text pc feature-text-animation">医師診断・評価の下、理学療法士や経験と知識をもった</p>
              <p class="clinic-features__01-main-text pc feature-text-animation">MTXトレーナー陣と連携して予防にも取り組みます。</p>
              <p class="clinic-features__01-main-text sp fade-anime-text js-titleAnimationTarget">治療だけではない、リハビリだけでもない。<br>医師診断・評価の下、理学療法士や経験と知識をもったMTXトレーナー陣と連携して予防にも取り組みます。</p>
              <div class="clinic-features__btn-wrapper">
                <a href="<?php echo esc_url(home_url('/aboutus')); ?>" class="btn btn--dark_green">
                  <span>開院の背景と想い</span>
                </a>
                <a href="<?php echo esc_url(home_url('/system_facility')); ?>" class="btn btn--dark_green btn--dark_green_small">
                  <span>治療体制</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="clinic-features__02 js-animationTarget">
          <div class="clinic-features__02-wrapper">
            <div class="clinic-features__02-left">
              <div class="clinic-features__02-left-body">
                <div class="clinic-features__02-left-head">
                  <div class="clinic-features__head-wrapper fade-anime-text js-titleAnimationTarget">
                    <span class="clinic-features__head-label">FEATURES</span>
                    <p class="clinic-features__head">02</p>
                  </div>
                  <div class="clinic-features__sub-title fade-anime-text js-titleAnimationTarget">
                    数値化されたゴールに向かう<br>
                    “終わりの見える”治療プログラム
                  </div>
                </div>
                <p class="clinic-features__02-left-text fade-anime-text js-titleAnimationTarget">
                  今の患部の状態を評価（数値化）した内容を基に、目指す目標を患者さんと共に最初に決めます。<br>
                  次に、目標に向けた最適な治療プログラムを医師が計画し、治療を開始となります。<br>
                  治療プログラム実行中も、定期的に医師が評価、治療プログラム計画の見直しや調整を行うことで、患者さんの目標達成へと着実につなげます。
                </p>
                <a href="<?php echo esc_url(home_url('/flow')); ?>" class="btn btn--dark_green">
                  <span>治療の流れ</span>
                </a>
              </div>
            </div>
            <div class="clinic-features__02-right">
              <div class="clinic-features__02-right-graph">
                <div class="graph-wrap">
                  <div class="graph-item graph01">
                    <div class="graph-pic">
                      <img src="<?php echo $rootDir ?>/images/top/graph01.png" alt="">
                    </div>
                    <div class="graph-line">
                      <img src="<?php echo $rootDir ?>/images/top/line_green.png" alt="">
                    </div>
                    <p class="graph-text">診察</p>
                  </div>
                  <div class="graph-item graph02">
                    <div class="graph-pic">
                      <img src="<?php echo $rootDir ?>/images/top/graph02.png" alt="">
                    </div>
                    <p class="graph-text">評価・数値化</p>
                  </div>
                  <div class="graph-item graph03">
                    <div class="graph-pic">
                      <img src="<?php echo $rootDir ?>/images/top/graph03.png" alt="">
                    </div>
                    <p class="graph-text">目標設定</p>
                  </div>
                  <div class="graph-item graph04">
                    <div class="graph-pic">
                      <img src="<?php echo $rootDir ?>/images/top/graph04.png" alt="">
                    </div>
                    <p class="graph-text">治療・リハビリ計画</p>
                  </div>
                  <div class="graph-item graph05">
                    <div class="graph-pic">
                      <img src="<?php echo $rootDir ?>/images/top/graph05.png" alt="">
                    </div>
                    <div class="graph-line graph-line02">
                      <img src="<?php echo $rootDir ?>/images/top/line_green.png" alt="">
                    </div>
                    <p class="graph-text">治療開始</p>
                  </div>
                  <div class="graph-item graph06">
                    <div class="graph-pic">
                      <img src="<?php echo $rootDir ?>/images/top/graph06.png" alt="">
                    </div>
                    <p class="graph-text">再評価（計画見直し）</p>
                  </div>
                  <div class="graph-item graph07">
                    <div class="graph-pic">
                      <img src="<?php echo $rootDir ?>/images/top/graph07.png" alt="">
                    </div>
                    <div class="graph-line03">
                      <img src="<?php echo $rootDir ?>/images/top/line_green02.png" alt="">
                    </div>
                    <p class="graph-text">目標達成</p>
                  </div>
                </div>
                <div class="graph-arrow">
                  <img src="<?php echo $rootDir ?>/images/top/arrow.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clinic-features__03">
          <div class="clinic-features__03-wrapper">
            <div class="clinic-features__03-left">
              <div class="clinic-features__03-left-img fade-anime-img js-imgAnimation">
                <img src="<?php echo $rootDir ?>/images/top/feature03-01.png" alt="">
              </div>
            </div>
            <div class="clinic-features__03-center">
              <div class="clinic-features__head-wrapper fade-anime-text js-titleAnimationTarget">
                <span class="clinic-features__head-label">FEATURES</span>
                <p class="clinic-features__head">03</p>
              </div>
              <div class="clinic-features__sub-title fade-anime-text js-titleAnimationTarget">
                院長の持つ豊富な知識・経験で<br>
                痛みやしびれの根本的な原因を解明
              </div>
              <p class="clinic-features__03-text fade-anime-text js-titleAnimationTarget">
                富岡院長はじめドクター陣が、日本のみならず海外で培った経験と、学んだ知識とを活かし、CESやSFMAなどの診察、評価方法を活用して根本的な原因を解明します。<br>
                今までどこに行っても治らなかった関節の痛みや体のしびれ等がある方は、一度、診察にお越しください。<br>
                ※CESやSFMAは運動機能を評価する診断方法です。
              </p>
              <a href="<?php echo esc_url(home_url('/staff')); ?>" class="btn btn--dark_green">
                <span>医師・スタッフ紹介</span>
              </a>
            </div>
            <div class="clinic-features__03-right">
              <div class="clinic-features__03-right-img fade-anime-img js-imgAnimation">
                <img src="<?php echo $rootDir ?>/images/top/feature03-02.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="clinic-features__04">
          <div class="clinic-features__04-wrapper">
            <div class="clinic-features__04-left">
              <div class="clinic-features__04-left-img fade-anime-img js-imgAnimation">
                <img src="<?php echo $rootDir ?>/images/top/feature04.png" alt="">
              </div>
            </div>
            <div class="clinic-features__04-right">
              <div class="clinic-features__head-wrapper fade-anime-text js-titleAnimationTarget">
                <span class="clinic-features__head-label">FEATURES</span>
                <p class="clinic-features__head">04</p>
              </div>
              <div class="clinic-features__sub-title fade-anime-text js-titleAnimationTarget">
                日本に4台しかない最先端機器<br>
                “DDシステム”
              </div>
              <p class="clinic-features__04-text fade-anime-text js-titleAnimationTarget">
                人工知能が搭載されたDDシステム。<br>
                運動能力を数値化することが可能なため、パフォーマンス向上、再生医療と組み合わせての症状改善に向けたリカバリープログラムなど、多岐にわたって活用が可能です。<br>
                その他、当クリニックでは運動機能の状態を評価（数値化）する機器としても活用します。
              </p>
              <a href="<?php echo esc_url(home_url('/system_facility')); ?>" class="btn btn--dark_green">
                <span>施設・設備の紹介</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="treatment" class="treatment">
      <div class="treatment__triangle treatment__triangle--right treatment__triangle--01">
        <img src="<?php echo $rootDir ?>/images/top/triangle-left.svg" alt="">
      </div>
      <div class="treatment__triangle treatment__triangle--left treatment__triangle--02">
        <img src="<?php echo $rootDir ?>/images/top/triangle-right.svg" alt="">
      </div>
      <div class="treatment__triangle treatment__triangle--right treatment__triangle--03">
        <img src="<?php echo $rootDir ?>/images/top/triangle-left.svg" alt="">
      </div>
      <div class="treatment-wrapper">
        <div class="section-title__wrapper --white --center js-titleAnimationTarget">
          <h2 class="section-title section-title">TREATMENT</h2>
          <p class="section-sub-title">治療メニュー</p>
        </div>
        <ul class="treatment__list">
          <li class="treatment__item treatment__item--service">
            <div class="treatment__item--service_img fade-anime-img js-imgAnimation">
              <img src="<?php echo $rootDir ?>/images/top/service01.png" alt="">
            </div>
            <div class="treatment__item--service_center">
              <h3 class="treatment__title treatment__title--regenerative fade-anime-text js-titleAnimationTarget">
                <img src="<?php echo $rootDir ?>/images/icon/icon-regenerative-treatment.svg" alt="">再生治療
              </h3>
              <p class="treatment__text fade-anime-text js-titleAnimationTarget">
                手術や入院の必要が無い、低リスクの注射治療です。自分自身の血液や脂肪を採血・採取して行う治療から、採血・採取の必要のない治療まで、患者さんの状態に合わせて最適な治療メニューをご提案します。
              </p>
              <ul class="treatment-detail__list">
              <?php
                $args = [
                  'post_type' => 'services',
                  'order' => 'ASC',
                  'posts_per_page' => -1,
                  'tax_query' => [
                    [
                      'taxonomy' => 'treatment_type',
                      'field'    => 'slug',
                      'terms'    => 'service',
                    ]
                  ],
                ];
                $WP_post = new WP_Query($args);
                $index = 0;
                if ($WP_post->have_posts()) {
                  while ($WP_post->have_posts()) {
                    $WP_post->the_post();
                    $animation_delay = $index * 0.2;
              ?>
                <li class="treatment-detail__item fade-anime-text js-titleAnimationTarget" style="animation-delay: <?php $animation_delay.'s' ?>">
                  <a href="<?php the_permalink(); ?>" class="treatment-detail__link">
                    <p class="treatment-detail__text"><?php the_title(); ?></p>
                  </a>
                </li>
              <?php
                  }
                  wp_reset_postdata();
                }
              ?>
              </ul>
            </div>
            <div class="treatment__item--service_img02 fade-anime-img js-imgAnimation">
              <img src="<?php echo $rootDir ?>/images/top/service02.png" alt="">
            </div>
          </li>
          <li class="treatment__item treatment__item--exercise">
            <div class="treatment__item--exercise_img fade-anime-img js-imgAnimation">
              <img src="<?php echo $rootDir ?>/images/top/exercise01.png" alt="">
            </div>
            <div class="treatment__item--exercise_img02 fade-anime-img js-imgAnimation">
              <img src="<?php echo $rootDir ?>/images/top/exercise02.png" alt="">
            </div>
            <div class="treatment__item-list">
              <h3 class="treatment__title treatment__title--rehabilitation fade-anime-text js-titleAnimationTarget">
                <img src="<?php echo $rootDir ?>/images/icon/icon-rehabilitation.svg" alt="">運動療法（リハビリ）
              </h3>
              <p class="treatment__text fade-anime-text js-titleAnimationTarget">
                医師が診察・評価に基づいて運動療法プログラムを計画します。<br>
                計画にそって、理学療法士やMTXトレーナーが患者さんと共に<br>
                プログラムを二人三脚で行います。<br>
                ※「DDシステム」は日本で数台しかない貴重な運動療法の機器です。
              </p>
              <ul class="treatment-detail__list">
              <?php
                $args = [
                  'post_type' => 'services',
                  'order' => 'ASC',
                  'posts_per_page' => -1,
                  'tax_query' => [
                    [
                      'taxonomy' => 'treatment_type',
                      'field'    => 'slug',
                      'terms'    => 'exercise',
                    ]
                  ],
                ];
                $WP_post = new WP_Query($args);
                $index = 0;
                if ($WP_post->have_posts()) {
                  while ($WP_post->have_posts()) {
                    $WP_post->the_post();
                    $animation_delay = $index * 0.2;
              ?>
                <li class="treatment-detail__item fade-anime-text js-titleAnimationTarget" style="animation-delay: <?php $animation_delay.'s' ?>">
                  <a href="<?php echo get_field('url'); ?>" target="_blank" class="treatment-detail__link">
                    <p class="treatment-detail__text"><?php the_title(); ?></p>
                  </a>
                </li>
              <?php
                  }
                  wp_reset_postdata();
                }
              ?>
              </ul>
            </div>
          </li>
          <li class="treatment__item treatment__item--physical">
            <div class="treatment__item-list">
              <h3 class="treatment__title treatment__title--physical fade-anime-text js-titleAnimationTarget">
                <img src="<?php echo $rootDir ?>/images/icon/icon-physical-therapy.svg" alt="">物理療法
              </h3>
              <p class="treatment__text fade-anime-text js-titleAnimationTarget">
                医師が診察・評価に基づいて物理療法プログラムを計画します。<br>
                クリニック内で治療機器を使って行うものから、MTXアカデミーの柔道整復師、鍼灸あんま師による手技まで、豊富なメニューで治療の相乗効果につなげます。
              </p>
              <ul class="treatment-detail__list">
              <?php
                $args = [
                  'post_type' => 'services',
                  'order' => 'ASC',
                  'posts_per_page' => -1,
                  'tax_query' => [
                    [
                      'taxonomy' => 'treatment_type',
                      'field'    => 'slug',
                      'terms'    => 'physical',
                    ]
                  ],
                ];
                $WP_post = new WP_Query($args);
                $index = 0;
                if ($WP_post->have_posts()) {
                  while ($WP_post->have_posts()) {
                    $WP_post->the_post();
                    $animation_delay = $index * 0.2;
              ?>
                <li class="treatment-detail__item fade-anime-text js-titleAnimationTarget" style="animation-delay: <?php $animation_delay.'s' ?>">
                  <?php if (get_field('url') !== ''): ?>
                  <a href="<?php echo get_field('url'); ?>" class="treatment-detail__link">
                  <?php else: ?>
                  <a href="<?php the_permalink(); ?>" class="treatment-detail__link">
                  <?php endif; ?>
                    <p class="treatment-detail__text"><?php the_title(); ?></p>
                  </a>
                </li>
              <?php
                  }
                  wp_reset_postdata();
                }
              ?>
              </ul>
            </div>
            <div class="treatment__item--physical_img fade-anime-img js-imgAnimation">
              <img src="<?php echo $rootDir ?>/images/top/physical01.png" alt="">
            </div>
            <div class="treatment__item--physical_img02 fade-anime-img js-imgAnimation">
              <img src="<?php echo $rootDir ?>/images/top/physical02.png" alt="">
            </div>
          </li>
        </ul>
        <div class="treatment__btn-wrapper">
          <a href="<?php echo esc_url(home_url('/flow')); ?>" class="btn btn--green">治療の流れ</a>
          <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn--green">治療メニュー</a>
          <a href="<?php echo esc_url(home_url('/price')); ?>" class="btn btn--green">料金表</a>
        </div>
      </div>
    </section>
  </div>
</main>

<script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/gsap.min.js"></script>
<script src="<?php echo $rootDir ?>/js/top.js"></script>
<?php get_footer(); ?>
