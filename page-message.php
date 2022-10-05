<?php
/**
 * Template Name: privacy-policy
 */

get_header(); ?>
<?php
$rootDir = get_template_directory_uri();
?>


<main class="main">

  <!-- 共通タイトル部分 -->
  <?php get_template_part('component/c__title'); ?>

  <div class="p-message">
    <div class="p-message__top">
      <div class="p-message__about">
        <div class="contentsBox_ttl">
          <div class="contentsBox_ttl_txt p-message__contents">
            <p>当クリニックにつきまして</p>
          </div>
        </div>
        <p class="p-message__text">
          平素より弊院の治療方針にご賛同いただき、また大切な患者様をご紹介いただき誠にありがとうございます。<br>
          弊院は再生医療と物理療法、運動療法に特化した自費診療クリニックとして東京四谷に2022年8月に開院いたしました。<br>
          院長は米国Certified Athletic Trainer(ATC)、整形外科専門医、オリンピック委員会公認スポーツドクターの資格を日本で初めて取得した、運動器とスポーツのスペシャリストであり、最新の器具と一流の治療スタッフを揃えております。またMTX Academyとの密な連携により、ピッチングレーンや、ウェイトトレーニング、ダッシュ等スポーツ復帰に必要なトレーニングが可能な施設も備えております。
        </p>
      </div>
      <div class="p-message__btn-wrapper">
        <a href="<?php echo esc_url(home_url('/staff')); ?>" class="btn btn--green">
          <p>医師・スタッフ紹介</p>
        </a>
        <a href="<?php echo esc_url(home_url('/system_facility')); ?>" class="btn btn--green">
          <p>治療体制と施設・設備</p>
        </a>
        <a href="<?php echo esc_url(home_url('/#medical-menu')); ?>" class="btn btn--green">
          <p>診療科目</p>
        </a>
      </div>
      <div class="p-message__cooperation">
        <div class="contentsBox_ttl">
          <div class="contentsBox_ttl_txt p-message__contents">
            <p>当クリニックとの連携につきまして</p>
          </div>
        </div>
        <p class="p-message__text">
          自費診療のため、保険適応でぶつかりあってしまうこともありません。弊院で治療終了後、皆様へ患者様を再度紹介させていただきますので、良い循環を作っていくことができたらと思っております。<br><br>
          手術療法が最善と考えられる患者様に関しましては、詳細のご説明をした上で、対応可能な連携先医療機関に責任をもってご紹介をしてまいります。
        </p>
      </div>
    </div>
    <div class="p-message__flow">
      <div class="p-message__title-wrapper">
        <p class="p-message__title">連携の流れ</p>
      </div>
      <div class="p-message__flow-wrapper">
        <div class="p-message__img">
          <picture>
            <source media="(max-width: 767px)" srcset="<?php echo $rootDir ?>/images/message/cooperation-sp.png">
            <img src="<?php echo $rootDir ?>/images/message/cooperation.png" alt="">
          </picture>
        </div>
        <div class="p-message__for-clinic">
          <div class="contentsBox_ttl">
            <div class="contentsBox_ttl_txt p-message__contents">
              <p>クリニック、病院の皆様へ</p>
            </div>
          </div>
          <p class="p-message__text">
            単位の縛りでリハビリを思うようにできない、<br>
            集束型体外衝撃波や再生医療等自費領域を使用したいといった患者様がいらっしゃいましたらぜひご紹介ください。<br>
            貴院での保険診療と弊院での自費診療で良循環を作っていけましたら、望外の望みでございます。
          </p>
        </div>
        <div class="p-message__for-trainer">
          <div class="contentsBox_ttl">
            <div class="contentsBox_ttl_txt p-message__contents">
              <p>接骨院、鍼灸院、トレーナーの皆様へ</p>
            </div>
          </div>
          <p class="p-message__text">
            画像診断や医師の介入を希望されるものの、クリニックや病院へは壁を感じてしまう、紹介しづらいなどございましたら、ぜひご相談ください。<br>
            院長は元々がATCであり、現場第一主義です。皆様との連携を積極的に取り組んでいきたいと考えています。<br>
            手術加療についてのご相談も伺えますので、遠慮なくお申し付けください。
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- footer手前の２つ並びのメニュー -->
  <?php get_template_part('component/footer__other'); ?>

</main>

<?php get_footer(); ?>
