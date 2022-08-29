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
  <div id="concept" class="concept-contents">

    <div class="concept-top-wrapper">
      <div class="concept-top">
        <p>ABOUT US</p>
      </div>
    </div>
    <div id="system" class="concept-systemArea">
      <div class="concept-systemArea__inner">
        <div class="concept-systemArea__inner_ttl">
          <p>OUR CONCEPT</p>
        </div>
      </div>
    </div>
    <div class="concept-lead">
      <div class="concept-lead__wrapper">
        <div class="concept-lead__left">
          <div class="concept-lead__head">
            <div class="concept-lead__cross">
              <span class="concept-lead__cross-text">再生医療</span>
            </div>
            <div class="concept-lead__cross">
              <span class="concept-lead__cross-text">運動療法</span>
            </div>
          </div>
          <h3 class="concept-lead__title">“ 治す ” 関節治療を目指して</h3>
          <p class="concept-lead__text">アスリートの競技人生・身体的障害のある方の人生に向き合い、身体の機能改善に取り組んできたMTXだからできる「再生医療」×「運動療法」を組み合わせた医療。医師とトレーナー陣が一体となって、パフォーマンスや痛みに悩む方々に寄り添い、共に解決に向かって進んでいきます。</p>
        </div>
        <div class="concept-lead__right">
          <div class="concept-lead__img">
            <img src="<?php echo $rootDir ?>/images/concept/lead.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="concept-indexArea">
      <a href="#system" class="index_btn">
        <p class="green_txt">BACKGROUND</p>
        <p>クリニックをつくった背景</p>
        <img src="<?php echo $rootDir ?>/images/facility/facility_btn.png" alt="">
      </a>
      <a href="#collaborating" class="index_btn">
        <p class="green_txt">INTERVIEW</p>
        <p>メソッド開発者の想い</p>
        <img src="<?php echo $rootDir ?>/images/facility/facility_btn.png" alt="">
      </a>
    </div>

    <section class="concept-background">
      <div class="concept-background__wrapper">
        <div class="concept-section__title-wrapper concept-section__title-wrapper--right concept-section__title-wrapper--green">
          <h3 class="concept-section__title">BACKGROUND</h3>
          <p class="concept-section__sub-title">クリニックをつくった背景</p>
        </div>
        <div class="concept-background__main">
          <div class="concept-background__main-inner">
            <div class="concept-background__left">
              <div class="concept-background__title-wrapper">
                <p class="concept-background__title">MTXが</p>
                <p class="concept-background__title">クリニックを開院した理由</p>
              </div>
              <p class="concept-background__main-text">
                近年、動画サイトなどで、球速アップや足が速くなる方法を教える動画が増えてきました。ですが、視聴者が自分に合った方法を取捨選択できる保証はなく、合わない方法を試みて逆にパフォーマンスが低下したり、怪我をする人が多くなってきています。<br>
                また高齢者の方で運動が健康に重要であることを認識しているにもかかわらず、どこに行けば、どうすれば良いのかがわからず、悩んでいる方もいらっしゃいます。<br><br>
                そこで、長年スポーツ指導活動を行ってきたわれわれ我々は、新たに医師を仲間に加えることで、海外では当たり前にあるような複合施設を作ることを目標としました。目標とする複合施設とは、ケガけがや転倒を予防するといった基礎的な運動機能のケアから始まり、事故で受傷した際の治療やリハビリ、その後のパフォーマンスアップまでを一貫してみられる空間です。<br><br>
                そもそも、医療機関に来院される患者さんはすでに中長期の治療を必要とする重い状態になっていることが多いです。本来であれば、このような状態になる前に早期発見できれば良いのですが、ほとんどの運動施設には医療者がおらず、問題の早期発見につながる不調や痛みを気軽に相談できる環境にはなっておりません。この大きな矛盾を含む課題を解決すべく、当施設では、医療機関とトレーニング施設をシームレスにつなげることで、お互いが抱える欠点の解消を行います。これまでＭＴＸでは対応できなかったケガけがの治療とリハビリは医師と理学療法士が行い、医療機関では手が出せなかった運動機能の向上は、トレーナーがカバーしていくことで、老若男女を問わず健康で活動的な日々を送っていただけることを目標とします。
              </p>
            </div>
            <div class="concept-background__right">
              <div class="concept-background__img">
                <img src="<?php echo $rootDir ?>/images/concept/concept-background01.png" alt="">
              </div>
            </div>
          </div>
          <div class="concept-background__main-inner">
            <div class="concept-background__left">
              <div class="concept-background__title-wrapper">
                <p class="concept-background__title">私たちが目指す</p>
                <p class="concept-background__title">“ 治す ” 関節治療とは</p>
              </div>
              <p class="concept-background__main-text">
                怪我や加齢による関節の変形は、現代の医学で元通りに戻すことは難しいとされています。そのため、重度の変形、特に膝や股関節であれば変形してしまった関節の骨を切除し、人工物に取り替える人工関節置換術や、骨を切ってストレスをうまく逃す骨切り術が盛んに行われています。<br><br>
                これらは技術も確立されてきておりますが、感染症や術後の疼痛の残存、股関節であれば脱臼のリスクなど、避けられない合併症が多くあることも事実です。<br><br>
                近年は再生医療の注射の研究が進んできており、手術を避け、健康な生活を送られている方もいらっしゃいます。<br>
                しかし根本原因として、運動能力の低下が疼痛の原因となっていることも多く、再生医療（注射）だけ、運動療法（リハビリ）だけではなく、それらをすべて一貫したシステムでみることにより、治る関節医療の実現を目指しています。
              </p>
            </div>
            <div class="concept-background__right">
              <div class="concept-background__img">
                <img src="<?php echo $rootDir ?>/images/concept/concept-background02.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="concept-background">
      <div class="concept-background__wrapper">
        <div class="concept-section__title-wrapper concept-section__title-wrapper--left concept-section__title-wrapper--white">
          <h3 class="concept-section__title">INTERVIEW</h3>
          <p class="concept-section__sub-title">メソッド開発者の想い</p>
        </div>
        <div class="concept-background__main">
          <div class="concept-background__main-inner">
            <div class="concept-background__left">
              <div class="concept-background__title-wrapper">
                <p class="concept-background__title">MTXが</p>
                <p class="concept-background__title">クリニックを開院した理由</p>
              </div>
              <p class="concept-background__main-text">
                近年、動画サイトなどで、球速アップや足が速くなる方法を教える動画が増えてきました。ですが、視聴者が自分に合った方法を取捨選択できる保証はなく、合わない方法を試みて逆にパフォーマンスが低下したり、怪我をする人が多くなってきています。<br>
                また高齢者の方で運動が健康に重要であることを認識しているにもかかわらず、どこに行けば、どうすれば良いのかがわからず、悩んでいる方もいらっしゃいます。<br><br>
                そこで、長年スポーツ指導活動を行ってきたわれわれ我々は、新たに医師を仲間に加えることで、海外では当たり前にあるような複合施設を作ることを目標としました。目標とする複合施設とは、ケガけがや転倒を予防するといった基礎的な運動機能のケアから始まり、事故で受傷した際の治療やリハビリ、その後のパフォーマンスアップまでを一貫してみられる空間です。<br><br>
                そもそも、医療機関に来院される患者さんはすでに中長期の治療を必要とする重い状態になっていることが多いです。本来であれば、このような状態になる前に早期発見できれば良いのですが、ほとんどの運動施設には医療者がおらず、問題の早期発見につながる不調や痛みを気軽に相談できる環境にはなっておりません。この大きな矛盾を含む課題を解決すべく、当施設では、医療機関とトレーニング施設をシームレスにつなげることで、お互いが抱える欠点の解消を行います。これまでＭＴＸでは対応できなかったケガけがの治療とリハビリは医師と理学療法士が行い、医療機関では手が出せなかった運動機能の向上は、トレーナーがカバーしていくことで、老若男女を問わず健康で活動的な日々を送っていただけることを目標とします。
              </p>
            </div>
            <div class="concept-background__right">
              <div class="concept-background__img">
                <img src="<?php echo $rootDir ?>/images/concept/concept-background01.png" alt="">
              </div>
            </div>
          </div>
          <div class="concept-background__main-inner">
            <div class="concept-background__left">
              <div class="concept-background__title-wrapper">
                <p class="concept-background__title">私たちが目指す</p>
                <p class="concept-background__title">“ 治す ” 関節治療とは</p>
              </div>
              <p class="concept-background__main-text">
                怪我や加齢による関節の変形は、現代の医学で元通りに戻すことは難しいとされています。そのため、重度の変形、特に膝や股関節であれば変形してしまった関節の骨を切除し、人工物に取り替える人工関節置換術や、骨を切ってストレスをうまく逃す骨切り術が盛んに行われています。<br><br>
                これらは技術も確立されてきておりますが、感染症や術後の疼痛の残存、股関節であれば脱臼のリスクなど、避けられない合併症が多くあることも事実です。<br><br>
                近年は再生医療の注射の研究が進んできており、手術を避け、健康な生活を送られている方もいらっしゃいます。<br>
                しかし根本原因として、運動能力の低下が疼痛の原因となっていることも多く、再生医療（注射）だけ、運動療法（リハビリ）だけではなく、それらをすべて一貫したシステムでみることにより、治る関節医療の実現を目指しています。
              </p>
            </div>
            <div class="concept-background__right">
              <div class="concept-background__img">
                <img src="<?php echo $rootDir ?>/images/concept/concept-background02.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php get_template_part('component/footer__other'); ?>
  </div>
</main>

<?php get_footer(); ?>
