<?php
/**
 * Template Name: treatment
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>

<main class="main">

  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__bread_other'); ?>

  <!-- コンテンツ部分 -->
  <div id="treatment" class="treatment-contents">

    <div class="treatment-top-wrapper">
      <div class="treatment-top">
        <p>SERVICES</p>
      </div>
    </div>
    <div id="system" class="treatment-systemArea">
      <div class="treatment-systemArea__inner">
        <div class="treatment-systemArea__inner_ttl">
          <p>SERVICE</p>
        </div>
        <div class="treatment-systemArea__inner_txt">
          <p>
            MTXスポーツ・関節クリニックでは、診察とスクリーニングテストを行い、今の患部の状態を評価・数値化し、目標とする回復値を最初に決めます。<br>
            その目標に合わせて、医師は治療とリハビリの計画を行います。治療開始後も、評価・数値化を行い経過を確認します。
          </p>
        </div>
      </div>
    </div>
    <div class="treatment-indexArea">
      <a href="#service" class="index_btn">
        <p class="green_txt">SERVICE THERAPY</p>
        <p>再生治療</p>
        <img src="<?php echo $rootDir ?>/images/facility/facility_btn.png" alt="">
      </a>
      <a href="#exercise" class="index_btn">
        <p class="green_txt">EXERCISE THERAPY</p>
        <p>運動療法</p>
        <img src="<?php echo $rootDir ?>/images/facility/facility_btn.png" alt="">
      </a>
      <a href="#physical" class="index_btn">
        <p class="green_txt">PHYSICAL THERAPY</p>
        <p>物理療法</p>
        <img src="<?php echo $rootDir ?>/images/facility/facility_btn.png" alt="">
      </a>
    </div>
    <section class="treatment__model">
      <div class="treatment__model-wrapper">
        <div class="treatment__model-title-wrapper">
          <h3 class="treatment__model-title">
            再生医療×運動療法の治療モデルプラン
          </h3>
        </div>
        <div class="treatment__model-group">
          <div class="treatment__model-area treatment__model-area--01">
            <div class="treatment__model-area-inner">
              <div class="treatment__model-area-title-wrapper">
                <p class="treatment__model-area-title">MODEL 01</p>
              </div>
              <div class="treatment__model-area-wrapper">
                <div class="treatment__model-area-head">
                  <div class="treatment__model-area-head-title-wrapper">
                    <p class="treatment__model-area-head-title">対象診療科目</p>
                  </div>
                  <div class="treatment__model-area-head-tag-wrapper">
                    <p class="treatment__model-area-head-tag">変形性関節症</p>
                    <p class="treatment__model-area-head-tag">筋腱損傷</p>
                  </div>
                </div>
                <div class="treatment__model-area-body">
                  <div class="treatment__model-area-body-left">
                    <div class="treatment__model-squre treatment__model-squre--gray">
                      <p class="treatment__model-squre-head">再生医療＋物理療法</p>
                      <div class="treatment__model-squre-body">
                        <div class="treatment__model-squre-body-group treatment__model-squre-body-group--left">
                          <div class="treatment__model-squre-img">
                            <img src="<?php echo $rootDir ?>/images/treatment/shock-wave-therapy.png" alt="">
                          </div>
                          <p class="treatment__model-squre-body-text">骨、筋肉、靭帯等を刺激し、再生力を高める治療です。主に慢性疾患に効果を発揮します。</p>
                        </div>
                        <div class="treatment__model-squre-body-group">
                          <div class="treatment__model-squre-img">
                            <img src="<?php echo $rootDir ?>/images/treatment/culture-supernatant.png" alt="">
                          </div>
                          <p class="treatment__model-squre-body-text">体外衝撃波により自己治癒力があがっている筋組織・骨組織の再生力を強化します。</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="treatment__model-area-body-center">
                    <picture>
                      <source media="(max-width: 767px)" srcset="<?php echo $rootDir ?>/images/treatment/arrow-bottom.svg">
                      <img src="<?php echo $rootDir ?>/images/treatment/arrow-right.svg" alt="">
                    </picture>
                  </div>
                  <div class="treatment__model-area-body-right">
                    <div class="treatment__model-squre treatment__model-squre--green">
                      <p class="treatment__model-squre-head">運動療法</p>
                      <div class="treatment__model-squre-body">
                        <div class="treatment__model-squre-body-group treatment__model-squre-body-group--left treatment__model-squre-body-group--left_right">
                          <div class="treatment__model-squre-img">
                            <img src="<?php echo $rootDir ?>/images/treatment/model01-dd.jpg" alt="">
                          </div>
                          <p class="treatment__model-squre-body-title">DDシステム</p>
                          <p class="treatment__model-squre-body-text">筋力だけでなく、関節の安定性や反射速度等、様々な情報を可視化し、トレーニングに活かします。</p>
                        </div>
                        <div class="treatment__model-squre-body-group">
                          <div class="treatment__model-squre-img">
                            <img src="<?php echo $rootDir ?>/images/treatment/model01-rehabilitation.jpg" alt="">
                          </div>
                          <p class="treatment__model-squre-body-title">理学療法士によるリハビリ</p>
                          <p class="treatment__model-squre-body-text">それぞれの患者さんの症状に合わせ、オーダーメイドのリハビリを提供します。</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="treatment__model-area-bottom">
                  <div class="treatment__model-area-bottom-icon">
                    <img src="<?php echo $rootDir ?>/images/treatment/doctor.svg" alt="">
                  </div>
                  <div class="treatment__model-area-bottom-text-wrapper">
                    <p class="treatment__model-area-bottom-text">
                      注射や点滴はそれ単体でも効果はあります。しかし疼痛改善には注射が、<br>
                      根本原因を取り去るにはリハビリが必要になります。<br>
                      体外衝撃波で土台を作り、上清液注射で疼痛の改善と組織の再生を促し、運動療法で再発しない身体づくりを目指します。すべてを組み合わせて行うことで、最高の治療効果を引き出します。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="treatment__model-area treatment__model-area--02">
            <div class="treatment__model-area-inner">
              <div class="treatment__model-area-title-wrapper">
                <p class="treatment__model-area-title">MODEL 02</p>
              </div>
              <div class="treatment__model-area-wrapper">
                <div class="treatment__model-area-head">
                  <div class="treatment__model-area-head-title-wrapper">
                    <p class="treatment__model-area-head-title">対象診療科目</p>
                  </div>
                  <div class="treatment__model-area-head-tag-wrapper">
                      <p class="treatment__model-area-head-tag">スポーツ障害</p>
                  </div>
                  <div class="treatment__model-area-head-text">
                    <p>
                      疲労骨折／野球肘／投球障害肩／関節捻挫（靭帯損傷）<br class="sp"><span class="pc_slash">／</span>シンスプリント<br class="pc">
                      <span class="sp_slash">／</span>ゴルフ肘／テニス肘など
                    </p>
                  </div>
                </div>
                <div class="treatment__model-area-body">
                  <div class="treatment__model-area-body-left">
                    <div class="treatment__model-squre treatment__model-squre--gray">
                      <p class="treatment__model-squre-head">再生医療＋物理療法</p>
                      <div class="treatment__model-squre-body">
                        <div class="treatment__model-squre-body-group treatment__model-squre-body-group--left">
                          <div class="treatment__model-squre-img">
                            <img src="<?php echo $rootDir ?>/images/treatment/shock-wave-therapy.png" alt="">
                          </div>
                          <p class="treatment__model-squre-body-text">骨、筋肉、靭帯等を刺激し、再生力を高める治療です。主に慢性疾患に効果を発揮します。</p>
                        </div>
                        <div class="treatment__model-squre-body-group">
                          <div class="treatment__model-squre-img treatment__model-squre-img--group">
                            <img src="<?php echo $rootDir ?>/images/treatment/shock-wave-therapy-group.png" alt="">
                          </div>
                          <p class="treatment__model-squre-body-text">体外衝撃波により自己治癒力があがっている筋組織・骨組織の再生力を強化します。</p>
                        </div>
                      </div>
                    </div>
                    <p class="treatment__model-area-body-note">※ドーピング検査のあるアスリートには上清液は使用できないため、PRPや脂肪幹細胞を使用します。</p>
                  </div>
                  <div class="treatment__model-area-body-center">
                    <picture>
                      <source media="(max-width: 767px)" srcset="<?php echo $rootDir ?>/images/treatment/arrow-bottom.svg">
                      <img src="<?php echo $rootDir ?>/images/treatment/arrow-right.svg" alt="">
                    </picture>
                  </div>
                  <div class="treatment__model-area-body-right">
                    <div class="treatment__model-squre treatment__model-squre--green">
                      <p class="treatment__model-squre-head">運動療法</p>
                      <div class="treatment__model-squre-body">
                        <div class="treatment__model-squre-body-group treatment__model-squre-body-group--left treatment__model-squre-body-group--left_right treatment__model-squre-body-group--pt">
                          <div class="treatment__model-squre-img">
                            <img src="<?php echo $rootDir ?>/images/treatment/model01-dd.jpg" alt="">
                          </div>
                          <p class="treatment__model-squre-body-title">DDシステム</p>
                          <p class="treatment__model-squre-body-text">筋力だけでなく、関節の安定性や反射速度等、様々な情報を可視化し、トレーニングに活かします。</p>
                        </div>
                        <div class="treatment__model-squre-body-group">
                          <div class="treatment__model-squre-img">
                            <img src="<?php echo $rootDir ?>/images/treatment/model01-rehabilitation.jpg" alt="">
                          </div>
                          <p class="treatment__model-squre-body-title">理学療法士によるリハビリ</p>
                          <p class="treatment__model-squre-body-text">それぞれの患者さんの症状に合わせ、オーダーメイドのリハビリを提供します。</p>
                        </div>
                      </div>
                    </div>
                    <p class="treatment__model-area-body-note"></p>
                  </div>
                </div>
                <div class="treatment__model-area-bottom">
                  <div class="treatment__model-area-bottom-icon">
                    <img src="<?php echo $rootDir ?>/images/treatment/doctor.svg" alt="">
                  </div>
                  <div class="treatment__model-area-bottom-text-wrapper">
                    <p class="treatment__model-area-bottom-text">
                      スポーツでは早期復帰と再発防止が強く求められます。それには体外衝撃波等の物理療法と再生医療を組み合わせて炎症と疼痛をできるだけ早く鎮圧し、運動療法でなぜその怪我や障害を負ってしまったかを適切に見極め、再受傷を防ぐといったコンビネーションが非常に重要となります。医療施設だけ、スポーツ施設だけでは中々成し遂げることが難しいこの連携を、MTX Academyと当院でシームレスに構築します。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="service" class="treatment__menu treatment__menu--white treatment__menu--01">
      <div class="treatment__menu-inner">
        <div class="treatment__menu-head">
          <div class="treatment__menu-head-label-wrapper">
            <p class="treatment__menu-head-label">再生医療</p>
          </div>
          <div class="treatment__menu-head-logo">
            <img src="<?php echo $rootDir ?>/images/treatment/logo.png" alt="">
          </div>
        </div>
        <ul class="treatment__menu-list">
          <?php
            $args = [
              'post_type' => 'treatment',
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
            if ($WP_post->have_posts()) {
              while ($WP_post->have_posts()) {
                $WP_post->the_post();
          ?>
          <li class="treatment__menu-item">
            <a href="<?php the_permalink(); ?>" class="treatment__menu-link">
              <div class="treatment__menu-img">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title(); ?>">
              </div>
              <div class="treatment__menu-body">
                <div class="treatment__menu-body-title-wrapper">
                  <p class="treatment__menu-body-title treatment__menu-body-title--link"><?php the_title(); ?></p>
                </div>
                <div class="treatment__menu-body-text">
                  <?php echo get_field('lead'); ?>
                </div>
              </div>
            </a>
          </li>
          <?php
              }
              wp_reset_postdata();
            }
          ?>
        </ul>
      </div>
    </section>
    <section id="exercise" class="treatment__menu treatment__menu--green treatment__menu--02">
      <div class="treatment__menu-inner">
        <div class="treatment__menu-head">
          <div class="treatment__menu-head-label-wrapper">
            <p class="treatment__menu-head-label">運動療法</p>
          </div>
        </div>
        <ul class="treatment__menu-list">
          <?php
            $args = [
              'post_type' => 'treatment',
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
            if ($WP_post->have_posts()) {
              while ($WP_post->have_posts()) {
                $WP_post->the_post();
          ?>
          <li class="treatment__menu-item">
            <a href="<?php echo get_field('url'); ?>" target="_blank" class="treatment__menu-link">
              <div class="treatment__menu-img">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title(); ?>">
              </div>
              <div class="treatment__menu-body">
                <div class="treatment__menu-body-title-wrapper">
                  <p class="treatment__menu-body-title treatment__menu-body-title--ex_link"><?php the_title(); ?></p>
                </div>
                <div class="treatment__menu-body-text">
                  <?php echo get_field('lead'); ?>
                </div>
                <?php
                  $facilities = get_field('facilities');
                  if (!empty($facilities)):
                ?>
                <div class="treatment__menu-body-associated">
                  <div class="treatment__menu-body-associated-inner">
                    <p class="treatment__menu-body-associated-text">関連施設</p>
                    <?php
                    foreach (get_field('facilities') as $facility) {
                      if ($facility == 'ddrobotec'): ?>
                        <div class="treatment__menu-body-associated-img treatment__menu-body-associated-img--ddrobotec">
                          <img src="<?php echo $rootDir ?>/images/treatment/ddrobotec-logo.png" alt="">
                        </div>
                      <?php elseif ($facility == 'mtx-academy'): ?>
                        <div class="treatment__menu-body-associated-img treatment__menu-body-associated-img--academy">
                          <img src="<?php echo $rootDir ?>/images/treatment/academy-logo-white.png" alt="">
                        </div>
                      <?php else: ?>
                        <div class="treatment__menu-body-associated-img treatment__menu-body-associated-img--academy">
                          <img src="<?php echo $rootDir ?>/images/treatment/academy-logo.png" alt="">
                        </div>
                      <?php
                      endif;
                    }
                    ?>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </a>
          </li>
          <?php
              }
              wp_reset_postdata();
            }
          ?>
        </ul>
      </div>
    </section>
    <section id="physical" class="treatment__menu treatment__menu--white treatment__menu--03">
      <div class="treatment__menu-inner">
        <div class="treatment__menu-head">
          <div class="treatment__menu-head-label-wrapper">
            <p class="treatment__menu-head-label">物理療法・その他</p>
          </div>
        </div>
        <ul class="treatment__menu-list">
          <?php
            $args = [
              'post_type' => 'treatment',
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
            if ($WP_post->have_posts()) {
              while ($WP_post->have_posts()) {
                $WP_post->the_post();
          ?>
          <li class="treatment__menu-item">
            <?php if (get_field('url') !== ''): ?>
            <a href="<?php echo get_field('url'); ?>" target="_blank" class="treatment__menu-link">
            <?php else: ?>
            <a href="<?php the_permalink(); ?>" class="treatment__menu-link">
            <?php endif; ?>
              <div class="treatment__menu-img">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="<?php the_title(); ?>">
              </div>
              <div class="treatment__menu-body">
                <div class="treatment__menu-body-title-wrapper">
                  <?php if (get_field('url') !== ''): ?>
                  <p class="treatment__menu-body-title treatment__menu-body-title--ex_link"><?php the_title(); ?></p>
                  <?php else: ?>
                  <p class="treatment__menu-body-title treatment__menu-body-title--link"><?php the_title(); ?></p>
                  <?php endif; ?>
                </div>
                <div class="treatment__menu-body-text">
                  <?php echo get_field('lead'); ?>
                </div>
                <?php
                  $facilities = get_field('facilities');
                  if (!empty($facilities)):
                ?>
                <div class="treatment__menu-body-associated">
                  <div class="treatment__menu-body-associated-inner">
                    <p class="treatment__menu-body-associated-text">関連施設</p>
                    <?php
                    foreach (get_field('facilities') as $facility) {
                      if ($facility == 'ddrobotec'): ?>
                        <div class="treatment__menu-body-associated-img treatment__menu-body-associated-img--ddrobotec">
                          <img src="<?php echo $rootDir ?>/images/treatment/ddrobotec-logo.png" alt="">
                        </div>
                      <?php elseif ($facility == 'mtx-academy'): ?>
                        <div class="treatment__menu-body-associated-img treatment__menu-body-associated-img--academy">
                          <img src="<?php echo $rootDir ?>/images/treatment/academy-logo.png" alt="">
                        </div>
                      <?php else: ?>
                        <div class="treatment__menu-body-associated-img">
                          <img src="<?php echo $rootDir ?>/images/treatment/logo.png" alt="">
                        </div>
                      <?php
                      endif;
                    }
                    ?>
                  </div>
                </div>
                <?php endif; ?>
              </div>
            </a>
          </li>
          <?php
              }
              wp_reset_postdata();
            }
          ?>
        </ul>
      </div>
    </section>
    <?php get_template_part('component/footer__other'); ?>
  </div>
</main>

<?php get_footer(); ?>
