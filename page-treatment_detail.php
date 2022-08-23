<?php
/**
 * Template Name: treatment_detail
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>


<main class="main">

  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__title'); ?>

  <!-- コンテンツ部分 -->
  <div id="treatmentDetail" class="treatment-detail">
    <div class="triangle triangle--01"><img src="<?php echo $rootDir ?>/images/treatment_detail/triangle-left.svg" alt=""></div>
    <div class="triangle triangle--02"><img src="<?php echo $rootDir ?>/images/treatment_detail/triangle-right.svg" alt=""></div>
    <div class="triangle triangle--03"><img src="<?php echo $rootDir ?>/images/treatment_detail/triangle-left.svg" alt=""></div>
    <div class="triangle triangle--04"><img src="<?php echo $rootDir ?>/images/treatment_detail/triangle-right.svg" alt=""></div>
    <div class="treatment-detail__inner">
      <div class="index_btn__wrapper">
        <a href="#symptoms" class="index_btn">
          <p>PRP治療法とは</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
        <a href="#symptoms" class="index_btn">
          <p>対象疾患</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
        <a href="#symptoms" class="index_btn">
          <p>こんな方に<br class="sp">すすめたい</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
        <a href="#symptoms" class="index_btn">
          <p>当治療を<br class="sp">受けられない方</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
        <a href="#symptoms" class="index_btn">
          <p>治療の流れ</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
        <a href="#symptoms" class="index_btn">
          <p>注意事項</p>
          <img src="<?php echo $rootDir ?>/images/medical_detail/medical_detail_btn.png" alt="">
        </a>
      </div>

      <ul class="treatment-detail__contents-list">
        <li class="treatment-detail__contents-item">
          <div class="treatment-detail__contents">
            <div class="treatment-detail__contents-inner">
              <div class="contentsBox_ttl treatment-detail__contents-title">
                <div class="contentsBox_ttl_img">
                  <img src="<?php echo $rootDir ?>/images/icon/icon-regenerative-treatment.svg" alt="">
                </div>
                <div class="contentsBox_ttl_txt">
                  <p>PRP治療法とは</p>
                </div>
              </div>
              <div class="treatment-detail__contents-body">
                <p class="treatment-detail__contents-text">
                  PRP（Plate Rich Plasma）療法とは自己多血小板血漿注入療法のことです。血小板には成長因子が多く含まれていると考えられており、その成長因子によって幹部の自己修復機能を促進することを期待して行う治療法です。具体的には、患者さんご自身の血液中に含まれる血小板を採血で取り出し、血小板の成分だけを高い濃度で抽出して痛みのある部位などに注射します。<br><br>
                  PRP療法は広く一般にもその名前が知られるようになっていますが、実際には様々な会社からPRPを作成する方法が出されています。そのため注射の頻度や値段にも違いがあります。当院ではPRP療法の中でもPFC-FD療法を採用しています。これはご自身の血液から作成されたPRPのうち、成長因子を取り出して凍結乾燥したものになります。<br>
                  PRP療法の中でも特に必要な成長因子を重点的に投与できると考えられています。<br><br>
                  PRP（PFC-FD）療法によって、成長因子が損傷した組織の回復を促し、痛みを改善することが期待されます。
                </p>
                <div class="treatment-detail__contents-img">
                  <img src="<?php echo $rootDir ?>/images/dummy.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="treatment-detail__contents-item">
          <div class="treatment-detail__contents-item-inner">
            <div class="contentsBox_ttl treatment-detail__contents-title">
              <div class="contentsBox_ttl_img">
                <img src="<?php echo $rootDir ?>/images/icon/icon-bulb.svg" alt="">
              </div>
              <div class="contentsBox_ttl_txt">
                <p>対象疾患</p>
              </div>
            </div>
            <div class="treatment-detail__contents-item-body">
              <div class="treatment-detail__contents-item-body-flex">
                <ul class="contents-item-detail__list">
                  <li class="contents-item-detail__item contents-item-detail__item--white">関節（肩・肘・手・股・膝・足など）</li>
                  <li class="contents-item-detail__item contents-item-detail__item--white">関節（肩・肘・手・股・膝・足など）</li>
                  <li class="contents-item-detail__item contents-item-detail__item--white">関節（肩・肘・手・股・膝・足など）</li>
                </ul>
                <div class="treatment-detail__contents-item-img treatment-detail__contents-item-img--small">
                  <img src="<?php echo $rootDir ?>/images/dummy.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="treatment-detail__contents-item">
          <div class="treatment-detail__contents-item-inner">
            <div class="contentsBox_ttl treatment-detail__contents-title">
              <div class="contentsBox_ttl_img">
                <img src="<?php echo $rootDir ?>/images/icon/icon-heart.svg" alt="">
              </div>
              <div class="contentsBox_ttl_txt">
                <p>こんな方にすすめたい</p>
              </div>
            </div>
            <div class="treatment-detail__contents-item-body">
              <ul class="contents-item-detail__list">
                <li class="contents-item-detail__item contents-item-detail__item--white">関節（肩・肘・手・股・膝・足など）</li>
                <li class="contents-item-detail__item contents-item-detail__item--white">関節（肩・肘・手・股・膝・足など）</li>
                <li class="contents-item-detail__item contents-item-detail__item--white">関節（肩・肘・手・股・膝・足など）</li>
              </ul>
            </div>
          </div>
        </li>
        <li class="treatment-detail__contents-item">
          <div class="treatment-detail__contents-item-inner">
            <div class="contentsBox_ttl treatment-detail__contents-title">
              <div class="contentsBox_ttl_img">
                <img src="<?php echo $rootDir ?>/images/icon/icon-stop.svg" alt="">
              </div>
              <div class="contentsBox_ttl_txt">
                <p>当治療を<br class="sp">受けられない方</p>
              </div>
            </div>
            <div class="treatment-detail__contents-item-body">
              <div class="treatment-detail__contents-item-note-wrapper">
                <p class="treatment-detail__contents-item-note">※重篤な下記疾患、症状がある方はまずはご相談ください</p>
              </div>
              <ul class="contents-item-detail__list">
                <li class="contents-item-detail__item contents-item-detail__item--green">関節（肩・肘・手・股・膝・足など）関節（肩・肘・手・股・膝・足など）関節（肩・肘・手・股・膝・足など）関節（肩・肘・手・股・膝・足など）</li>
                <li class="contents-item-detail__item contents-item-detail__item--green">関節（肩・肘・手・股・膝・足など）</li>
                <li class="contents-item-detail__item contents-item-detail__item--green">関節（肩・肘・手・股・膝・足など）</li>
              </ul>
            </div>
          </div>
        </li>
        <li class="treatment-detail__contents-item">
          <div class="treatment-detail__contents-item-inner">
            <div class="contentsBox_ttl treatment-detail__contents-title">
              <div class="contentsBox_ttl_img">
                <img src="<?php echo $rootDir ?>/images/icon/icon-reload.svg" alt="">
              </div>
              <div class="contentsBox_ttl_txt">
                <p>治療の流れ</p>
              </div>
            </div>
            <div class="treatment-detail__contents-item-body">
              <div class="treatment-detail__contents-item-note-wrapper">
                <p class="treatment-detail__contents-item-note">※関節内投与治療まで３週間～要する治療法です。場合によっては複数回の通院が必要になります。</p>
                <p class="treatment-detail__contents-item-note">※ご自身の細胞となりますが、細胞が含まれる治療です</p>
              </div>
              <div class="treatment-detail__contents-item-img">
                <img src="<?php echo $rootDir ?>/images/dummy.png" alt="">
              </div>
            </div>
          </div>
        </li>
        <li class="treatment-detail__contents-item">
          <div class="treatment-detail__contents-item-inner">
            <div class="contentsBox_ttl treatment-detail__contents-title">
              <div class="contentsBox_ttl_img">
                <img src="<?php echo $rootDir ?>/images/icon/icon-attention.svg" alt="">
              </div>
              <div class="contentsBox_ttl_txt">
                <p>注意事項（リスク・副作用）</p>
              </div>
            </div>
            <div class="treatment-detail__contents-item-body">
              <div class="treatment-detail__contents-item-note-wrapper">
                <p class="treatment-detail__contents-item-note">※効果には個人差があり、変形が強い場合には効果が出辛いことがあります。</p>
              </div>
              <p class="treatment-detail__contents-item-text">
                投与後数日は注射部位のかゆみや違和感が現れますが、それらの症状は数日で落ちつきますので様子をみるようにしてください。自己細胞を用いているため、注入液による副作用の可能性は極めて低いと考えられておりますが、一般的な注射における合併症発生の可能性はございます。<br><br>
                詳しくは対面にてご説明いたします。
              </p>
            </div>
          </div>
        </li>
      </ul>
      <div class="treatment-detail-btnArea">
        <div class="btn btn--green treatment-detail-btnArea__btn">
          <a>料金一覧を見る</a>
        </div>
        <div class="btn btn--green treatment-detail-btnArea__btn">
          <a>治療の流れはこちら</a>
        </div>
      </div>
    </div>
    <?php get_template_part('component/footer__other'); ?>
  </div>
</main>

<?php get_footer(); ?>
