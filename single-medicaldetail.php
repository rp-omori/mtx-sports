<?php
/**
 * Template Name: medical_detail
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>


<main class="main">

  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__bread'); ?>

  <!-- コンテンツ部分 -->

  <div id="medical-detail" class="medical-detail-contents">

    <div class="bg_img_left">
      <img src="<?php echo $rootDir ?>/images/medical_detail/background_img_left.png" alt="">
    </div>

    <div class="bg_img_right">
      <img src="<?php echo $rootDir ?>/images/medical_detail/background_img_right.png" alt="">
    </div>

    <div class="medical-detail-top-wrapper">
      <div class="medical-detail-top">
        <div class="medical-detail-top__left">
          <!-- <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_main_img.png" alt=""> -->
          <img src="<?php the_field('body_diagram'); ?>" alt="">
        </div>
        <div class="medical-detail-top__right">
          <div class="medical-detail-top__right_txtArea">
            <div class="medical-detail-top__right_txtArea_tab">
              <!-- <p>スポーツによる関節の怪我・痛み</p> -->
              <p><?php the_field('orange_tab'); ?></p>
            </div>
            <div class="medical-detail-top__right_txtArea_ttl">
              <!-- <p>野球肘</p> -->
              <p><?php the_title(); ?></p>
            </div>
            <div class="medical-detail-top__right_txtArea_subTtl">
              <!-- <p>野球肘</p> -->
              <p><?php the_field('other_name'); ?></p>
            </div>
            <div class="medical-detail-top__right_txtArea_txt">
              <!-- <p>野球で多いですが、いろいろな種目で起きることがあります。無症状でも骨や軟骨が壊れていることもあり、早期発見が重要です。</p> -->
              <p><?php the_field('lead_txt'); ?></p>
            </div>
            <div class="medical-detail-top__right_txtArea_soreSpot">
              <p class="medical-detail-top__right_txtArea_soreSpot_sore">・痛む箇所</p>
              <div class="medical-detail-top__right_txtArea_soreSpot_spot">
                <?php if(have_rows('sore_spot')): ?>
                  <?php while(have_rows('sore_spot')): the_row(); ?>
                    <div class="medical-detail-top__right_txtArea_soreSpot_spot_detail">
                    <!-- <p>肘</p> -->
                      <p><?php the_sub_field('spot'); ?></p>
                    </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="medical-detail-top__img">
          <!-- <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_sub_img.png" alt=""> -->
          <img src="<?php the_field('illustration'); ?>" alt="">
        </div>
      </div>
    </div>

    <div class="medical-detail-indexArea">
      <a href="#symptoms" class="index_btn">
        <p>症状</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
      <a href="#cause" class="index_btn">
        <p>病態と原因</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
      <a href="#method" class="index_btn">
        <p>当クリニックの<br class="sp">治療方法</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
      <a href="#menu" class="index_btn">
        <p>該当する<br class="sp">治療メニュー</p>
        <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
      </a>
    </div>

    <div class="medical-detail-menuArea">
      <div id="symptoms" class="medical-detail-menuArea__box">
        <div class="contentsBox_ttl medical-detail-menuArea__box_ttl">
          <div class="contentsBox_ttl_img medical-detail-menuArea__box_ttl_img">
            <img src="<?php echo $rootDir ?>/images/medical_detail/question_mark.png" alt="">
          </div>
          <div class="contentsBox_ttl_txt medical-detail-menuArea__box_txt">
            <p>こんな症状はありませんか？</p>
          </div>
        </div>
        <div class="medical-detail-menuArea__box_contents">
          <!-- <p>
            投球時に肘痛が出現します。疼痛の出現部位により様々な原因が考えられます。<br>
            最初期には最初期には肘痛がない場合もあり、早期発見、早期治療が非常に重要になります。
          </p> -->
          <p><?php the_field('symptoms'); ?></p>
        </div>
      </div>
      <div id="cause" class="medical-detail-menuArea__box">
        <div class="contentsBox_ttl medical-detail-menuArea__box_ttl">
          <div class="contentsBox_ttl_img medical-detail-menuArea__box_ttl_img">
            <img src="<?php echo $rootDir ?>/images/medical_detail/electricity_mark.png" alt="">
          </div>
          <div class="contentsBox_ttl_txt medical-detail-menuArea__box_txt">
            <p>病態と原因について</p>
          </div>
        </div>
        <div class="medical-detail-menuArea__box_contents">
          <!-- <p>
            投球動作の繰り返しによって起きる肘周囲の障害ですが、骨や筋力、投球フォームが未熟な小中学生に起きやすいとされています。無理なフォームによる靭帯へのストレスや、未熟な骨に対する牽引ストレスが主な原因と言われています。
          </p>
          <ul>
            <li>内側型は、上腕骨の内側上顆に付着する筋肉の牽引力（引き伸ばされる力）によって、付着部に炎症が起き、痛みが発生します。</li>
            <li>外側型は骨性の痛みのことが多く、場合によっては手術の対象になる危険な箇所です。無症状で病状が進行しているケースもあり、検診を含めた早期発見が重要です。ゆえに肘の外側の痛みがある場合は、一刻も早い検査が必要です。</li>
            <li>後方型は上腕三頭筋（二の腕の筋肉）の牽引力により肘頭が痛くなります。</li>
          </ul>
          <p>
            内側型、外側型、後方型に分けられます。筋肉の引っ張る力により骨に繰り返しのストレスがかかって骨折を骨折を起こしたり、無理のあるフォームで靭帯にストレスがかってしまうこともあります。
          </p> -->
          <p><?php the_field('cause'); ?></p>
        </div>
      </div>
      <div id="method" class="medical-detail-menuArea__box">
        <div class="contentsBox_ttl medical-detail-menuArea__box_ttl">
          <div class="contentsBox_ttl_img medical-detail-menuArea__box_ttl_img">
            <img src="<?php echo $rootDir ?>/images/medical_detail/heart_mark.png" alt="">
          </div>
          <div class="contentsBox_ttl_txt medical-detail-menuArea__box_txt">
            <p>当クリニックでできる治療方法</p>
          </div>
        </div>
        <div class="medical-detail-menuArea__box_contents">
          <!-- <p>
            早期発見のためのエコー検査を行うことができます。
          </p>
          <p>
            症状が出てからでも、適切な検査を行い病状を把握します。基本的には休養が第一ですが、対外衝撃波で治療促進が可能です。海外では用いられていますが、日本の保険では認められておらず、自由診療の強みとなります。その間に柔軟性や筋力の向上を行います。
          </p>
          <p>
            疼痛が消失したら、投球フォームの修正を行いながら徐々に球数、距離を増やしていきます。MTX Academyのstrength, performance部門と連携を行いながら行いながら治療ができます。
          </p> -->
          <p><?php the_field('method'); ?></p>
        </div>
      </div>
      <div id="menu" class="medical-detail-menuArea__box">
        <div class="contentsBox_ttl medical-detail-menuArea__box_ttl">
          <div class="contentsBox_ttl_img medical-detail-menuArea__box_ttl_img">
            <img src="<?php echo $rootDir ?>/images/medical_detail/hand_mark.png" alt="">
          </div>
          <div class="contentsBox_ttl_txt medical-detail-menuArea__box_txt">
            <p>該当する治療メニュー</p>
          </div>
        </div>
        <div class="medical-detail-menuArea__box_contents">
          <div class="index_btn_wrapper">
            <?php if(have_rows('treatment_menu')): ?>
              <?php while(have_rows('treatment_menu')): the_row(); ?>
                <a href="<?php the_sub_field("menu_link") ?>" class="index_btn">
                  <p><?php the_sub_field("menu_name") ?></p>
                  <?php $etc = get_sub_field('menu_link'); ?>
                    <?php if(empty($etc)):?>
                    <?php else:?>
                      <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn_right.png" alt="">
                    <?php endif;?>
                </a>
              <?php endwhile; ?>
            <?php endif;?>
            <p><?php the_field('other_treatment_menu'); ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="medical-detail-btnArea">
      <a href="#" class="btn btn--green medical-detail-btnArea__btn">
        <p>その他の治療メニューはこちら</p>
      </a>
      <a href="#" class="btn btn--green medical-detail-btnArea__btn">
        <p>料金一覧を見る</p>
      </a>
      <a href="#" class="btn btn--green medical-detail-btnArea__btn">
        <p>治療の流れはこちら</p>
      </a>
    </div>


  </div>


</main>

<?php get_footer(); ?>
