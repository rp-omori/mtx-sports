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
  <?php get_template_part('component/c__bread_other'); ?>

  <!-- コンテンツ部分 -->
  <div id="facility" class="facility-contents">

    <div class="facility-top-wrapper">
      <div class="facility-top">
        <p>SYSTEM & FACILITY</p>
      </div>
    </div>

    <div class="facility-indexArea">
      <a href="#system" class="index_btn">
        <p class="green_txt">SERVICE SYSTEM</p>
        <p>治療体制</p>
        <img src="<?php echo $rootDir ?>/images/facility/facility_btn.png" alt="">
      </a>
      <a href="#collaborating" class="index_btn">
        <p class="green_txt">FACILITY</p>
        <p>クリニック＆連携施設・設備</p>
        <img src="<?php echo $rootDir ?>/images/facility/facility_btn.png" alt="">
      </a>
    </div>

    <div id="system" class="facility-systemArea">
      <div class="facility-systemArea__inner">
        <div class="facility-systemArea__inner_ttl">
          <p>SERVICE SYSTEM</p>
        </div>
        <div class="facility-systemArea__inner_lead">
          <p>
            「再生医療」「物理療法・手技療法」<br class="sp">「運動療法」などを駆使して、<br>
            ONE TEAMでトータルサポートします！
          </p>
        </div>
        <div class="facility-systemArea__inner_txt">
          <p>
          一人の患者さんに対し、医師・トレーナー・理学療法士がチームを組んで治療へと当たります。<br>
          各専門の人材が患者さんに対応いたしますので、怪我をした人やパフォーマンスを発揮できないと悩んでいるアスリート以外でも、日常生活でちょっと関節に違和感のある高齢者の方や、成長痛が強いお子様といった相談でも応対できます。従来のクリニックでは扱わなかったような体にまつわる悩みにも、最高のサポートでケアサービスを提供していきます。
          <br><br>
          “再生医療”と“リハビリ”の組み合わせは他の施設にはない、当クリニック独自の特徴です。<br>
          医師が診察と運動機能の数値化の結果をもって、治療の計画をします。その計画に基づき、一人の患者さんに対し、<br class="pc">
          医師・理学療法士・トレーナーが連携し、根本的な痛みや悩みの改善に取り組める体制をご用意しています。
          </p>
        </div>
        <div class="facility-systemArea__inner_img">
          <img class="pc" src="<?php echo $rootDir ?>/images/facility/facility_systemArea__inner_img.png" alt="">
          <img class="sp" src="<?php echo $rootDir ?>/images/facility/facility_systemArea__inner_img_sp.png" alt="">
        </div>
        <div class="facility-systemArea__inner_txt">
          <p>
            治療は、医師による再生医療で痛みやしびれなどの原因を取り除いた後、理学療法士によるリハビリを実施。リハビリ後はトレーナーの指導の下、患者さんのご希望に応じて日常生活レベルの訓練やスポーツパフォーマンスアップの技術練習まで総合的にサポートします。また、すべての過程において、医師が常に経過を確認いたします。<br>
            ＭＴＸアカデミーや四ツ谷メディカル＆テクノロジーセンターと連携を行うことで、<br class="pc">
            設備面でもクリニックとリハビリ施設、トレーニングスタジオなどが一気通貫でご利用が可能です。
          </p>
        </div>
        <div class="facility-systemArea__inner_btnArea">
          <a href="" class="index_btn">
            <p>治療の流れ</p>
            <img src="<?php echo $rootDir ?>/images/facility/facility_btn_right_white.png" alt="">
          </a>
          <a href="" class="index_btn">
            <p>医師・スタッフ紹介</p>
            <img src="<?php echo $rootDir ?>/images/facility/facility_btn_right_white.png" alt="">
          </a>
        </div>
      </div>
    </div>

    <div id="collaborating" class="facility-collaboratingArea">

    <div class="bg_img_left">
      <img src="<?php echo $rootDir ?>/images/facility/background_img_left.png" alt="">
    </div>

    <div class="bg_img_right">
      <img src="<?php echo $rootDir ?>/images/facility/background_img_right.png" alt="">
    </div>

    <div class="bg_img_bottom">
      <img src="<?php echo $rootDir ?>/images/facility/background_img_bottom.png" alt="">
    </div>

      <div class="facility-collaboratingArea__inner">
        <div class="facility-collaboratingArea__inner_ttl">
          <p>FACILITY</p>
        </div>
        <div class="facility-collaboratingArea__inner_contents">
          <div class="facility-collaboratingArea__inner_contents_ttl">
            <p>クリニック・連携施設</p>
          </div>
          <div class="facility-collaboratingArea__inner_contents_box">
            <div class="facility-collaboratingArea__inner_contents_box_left">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_01.jpg" alt="">
            </div>
            <div class="facility-collaboratingArea__inner_contents_box_right">
              <div class="facility-collaboratingArea__inner_contents_box_right_tab">
                <p>クリニック</p>
              </div>
              <div class="index_btn facility-collaboratingArea__inner_contents_box_right_ttl">
                <img src="<?php echo $rootDir ?>/images/facility/facility_btn_white.png" alt="">
                <p>診療室・処置室</p>
              </div>
              <div class="facility-collaboratingArea__inner_contents_box_right_txt">
                <p>
                  診察室はしっかりと運動評価もできるよう、広いスペースとなっています。動作評価のための鏡や罫線も配置しています。<br>
                  運動療法や物理療法を行う処置室も備えており、クリニック内でもリハビリを行うことが可能です。<br>
                  完全予約制のためお待たせすることなくご案内できます。<br>
                  エレベーターも備えているため、足の不自由な方にもご利用いただけます。
                </p>
              </div>
            </div>
          </div>
          <div class="facility-collaboratingArea__inner_contents_box flex">
            <div class="img">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_02.jpg" alt="">
            </div>
            <div class="img">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_03.jpg" alt="">
            </div>
            <div class="img">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_04.jpg" alt="">
            </div>
          </div>
          <div class="facility-collaboratingArea__inner_contents_box reverse">
            <div class="facility-collaboratingArea__inner_contents_box_left">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_05.jpg" alt="">
            </div>
            <div class="facility-collaboratingArea__inner_contents_box_right">
              <div class="facility-collaboratingArea__inner_contents_box_right_tab">
                <p>連携施設</p>
              </div>
              <div class="index_btn facility-collaboratingArea__inner_contents_box_right_ttl">
                <a class="link">
                  <p>ddrobtec©︎</p>
                  <img src="<?php echo $rootDir ?>/images/facility/facility_link.png" alt="">
                </a>
                <img src="<?php echo $rootDir ?>/images/facility/facility_btn_white.png" alt="">
                <p>四ツ谷メディカル＆テクノロジーセンター</p>
              </div>
              <div class="facility-collaboratingArea__inner_contents_box_right_txt">
                <p>
                  ＭＴＸアカデミーと業務提携を行い、スイスで開発されたDDシステム、イタリアで開発されたD-WALLの二つを揃えている四ツ谷にオープンした日本で唯一のトレーニング施設です。ＤＤで下半身の測定とトレーニングを行い、D-WALLで上半身とバランストレーニングを行うことができます。<br>
                  両方を組み合わせて、全身のバランスを整えていくことを目的とし、最新の機器を扱うスタッフと、トレーニング内容を一緒に考える理学療法士、ＭＴＸトレーナーと力を合わせてお客様に合わせた運動や高齢者社会になっていく日本で、健康寿命の延伸につながるようなトレーニングを提供することを目指します。
                </p>
              </div>
            </div>
          </div>
          <div class="facility-collaboratingArea__inner_contents_box">
            <div class="facility-collaboratingArea__inner_contents_box_left">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_06.jpg" alt="">
            </div>
            <div class="facility-collaboratingArea__inner_contents_box_right">
              <div class="facility-collaboratingArea__inner_contents_box_right_tab">
                <p>連携施設</p>
              </div>
              <a href="" class="index_btn facility-collaboratingArea__inner_contents_box_right_ttl border">
                <img src="<?php echo $rootDir ?>/images/facility/facility_btn_white.png" alt="">
                <p>MTXアカデミー</p>
                <img class="abso" src="<?php echo $rootDir ?>/images/facility/facility_link.png" alt="">
              </a>
              <div class="facility-collaboratingArea__inner_contents_box_right_txt">
                <p>
                  初心者からプロフェッショナルまで、本気の成長をサポートするアカデミー型スポーツ施設です。<br>
                  身体の使い方、鍛え方、整え方、治し方、パフォーマンスアップには、ひとりひとり異なる「正解」があり、その時必要なテーマ（正解）を持つことが確実な成長につながる、という方針で運営しています。個々のテーマ（正解）に合わせた内容に取り組めるよう、施設内には、リカバリー（回復）、ストレングス（強化）、プラクティス（実践）の３つのフィールドを設け、確実に成長していくための仕組みを持っています。
                </p>
              </div>
            </div>
          </div>
          <div class="facility-collaboratingArea__inner_contents_box flex">
            <div class="img">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_07.jpg" alt="">
            </div>
            <div class="img">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_08.jpg" alt="">
            </div>
            <div class="img">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_09.jpg" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="facility-collaboratingArea__inner">
        <div class="facility-collaboratingArea__inner_contents">
          <div class="facility-collaboratingArea__inner_contents_ttl">
            <p>機器</p>
          </div>
          <div class="facility-collaboratingArea__inner_contents_box reverse">
            <div class="facility-collaboratingArea__inner_contents_box_left">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_10.jpg" alt="">
            </div>
            <div class="facility-collaboratingArea__inner_contents_box_right">
              <div class="facility-collaboratingArea__inner_contents_box_right_logo">
                <img src="<?php echo $rootDir ?>/images/facility/facility_logo_01.png" alt="">
              </div>
              <div class="facility-collaboratingArea__inner_contents_box_right_tab green">
                <p>運動療法</p>
              </div>
              <div class="index_btn facility-collaboratingArea__inner_contents_box_right_ttl">
                <img src="<?php echo $rootDir ?>/images/facility/facility_btn_green.png" alt="">
                <p>DDシステム</p>
              </div>
              <div class="facility-collaboratingArea__inner_contents_box_right_txt">
                <p>
                  スイスで開発されたDDシステムは、ヨーロッパを中心に、イタリアセリエＡのサッカーチームや、レッドブルのパフォーマンスアップセンターに導入されていますが、日本にはまだ4台しか導入されていない貴重なマシンです。<br>
                  最初は、冬季スポーツのパフォーマンスアップのために作られましたが、モニターを見ながらトレーニングすることで、神経系のパフォーマンスアップに繋がるという副次的な結果も得られるようになったことから、怪我からの復帰にも力を入れることとなりました。測定からゲーム感覚の運動までオールインワンのマシンを是非ご体験ください。
                </p>
              </div>
            </div>
          </div>
          <div class="facility-collaboratingArea__inner_contents_box flex">
            <div class="img">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_11.jpg" alt="">
            </div>
            <div class="img">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_12.jpg" alt="">
            </div>
            <div class="img">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_13.jpg" alt="">
            </div>
          </div>
          <div class="facility-collaboratingArea__inner_contents_box sp_mb">
            <div class="facility-collaboratingArea__inner_contents_box_left">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_14.jpg" alt="">
            </div>
            <div class="facility-collaboratingArea__inner_contents_box_right">
              <div class="facility-collaboratingArea__inner_contents_box_right_logo medium">
                <img src="<?php echo $rootDir ?>/images/facility/facility_logo_02.png" alt="">
              </div>
              <div class="facility-collaboratingArea__inner_contents_box_right_tab green">
                <p>運動療法</p>
              </div>
              <div class="index_btn facility-collaboratingArea__inner_contents_box_right_ttl">
                <img src="<?php echo $rootDir ?>/images/facility/facility_btn_green.png" alt="">
                <p>HAL®（Hybrid<br class="zp"> Assistive Limb®）</p>
              </div>
              <div class="facility-collaboratingArea__inner_contents_box_right_txt">
                <p>
                  身体機能を改善・補助・拡張・再生することができる、世界初の装着型サイボーグです。<br>
                  人が体を動かそうとすると、その運動意思に従って脳から神経を通じて筋肉に信号が伝わり、その際微弱な「生体電位信号」が体表に漏れ出してきます。HAL®は、装着者の「生体電位信号」を皮膚に貼ったセンサーで検出し、意思に従った動作を実現します。自身の生体電位信号をモニターで可視化できる為、正しい動きを模索することなく身体機能上達までのプロセスが明確になります。装着型サイボーグにより、従来は不可能だった『感覚を鍛える』トレーニングで、お客様一人一人のパフォーマンス向上を目指します。これまで言語や身振りで伝えていた感覚をテクノロジーで体感できます。
                </p>
              </div>
            </div>
          </div>
          <div class="facility-collaboratingArea__inner_contents_box reverse">
            <div class="facility-collaboratingArea__inner_contents_box_left">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_15.jpg" alt="">
            </div>
            <div class="facility-collaboratingArea__inner_contents_box_right">
              <div class="facility-collaboratingArea__inner_contents_box_right_logo medium">
                <img src="<?php echo $rootDir ?>/images/facility/facility_logo_03.png" alt="">
              </div>
              <div class="facility-collaboratingArea__inner_contents_box_right_tab green">
                <p>物理療法</p>
              </div>
              <a href="" class="index_btn facility-collaboratingArea__inner_contents_box_right_ttl">
                <img src="<?php echo $rootDir ?>/images/facility/facility_btn_green.png" alt="">
                <p>収束型　対外衝撃波（BTL6000-Focus)</p>
              </a>
              <div class="facility-collaboratingArea__inner_contents_box_right_txt">
                <p>
                  当院が採用した体外衝撃波はイギリスBTL社のもので、２０２２年時点で最大の出力を誇ります。<br>
                  日本ではまだマイナーな治療器具であり、保険適用も足底腱膜炎のみですが、世界的には各関節、靭帯、腱の障害や骨折後の治癒の停滞、またシンスプリントや疲労骨折などにも広く使用されています。<br>
                  体外衝撃波で古くなってしまった組織に刺激を与えて活性化し、そこに再生医療の注射で組織の修復を促すという非常に良い組み合わせが可能です。日本ではまだ限られた施設でしか行われておりません。
                </p>
              </div>
            </div>
          </div>
          <div class="facility-collaboratingArea__inner_contents_box">
            <div class="facility-collaboratingArea__inner_contents_box_left">
              <img src="<?php echo $rootDir ?>/images/facility/facility_img_16.jpg" alt="">
            </div>
            <div class="facility-collaboratingArea__inner_contents_box_right">
              <div class="facility-collaboratingArea__inner_contents_box_right_logo medium">
                <img src="<?php echo $rootDir ?>/images/facility/facility_logo_03.png" alt="">
              </div>
              <div class="facility-collaboratingArea__inner_contents_box_right_tab green">
                <p>物理療法</p>
              </div>
              <div class="index_btn facility-collaboratingArea__inner_contents_box_right_ttl">
                <img src="<?php echo $rootDir ?>/images/facility/facility_btn_green.png" alt="">
                <p>超音波治療（LIPUS）</p>
              </div>
              <div class="facility-collaboratingArea__inner_contents_box_right_txt">
                <p>
                  伊藤超短波社製UST-770にLIPUS（リーパス）が搭載されています。<br>
                  また、１秒間に数百万回のミクロマッサージ効果が得られる超音波も使えるハイブリット治療器です。<br>
                  LIPUSは骨折治療器として唯一認められている機器です。骨折部にプローブを固定し照射する事で骨を作る細胞や、血管を作る細胞を刺激し骨の形成を促進します。<br>
                  <br><br>
                  超音波は温熱効果と音圧効果（ミクロマッサージ）が特徴で、ホットパックなどの熱は皮膚表面で消費されるのに対し、超音波は最大６cmまで熱と振動を届かせる事が出来ます。それにより手技では届かない深層にアプローチする事が可能です。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php get_template_part('component/footer__other'); ?>



  </div>

</main>

<?php get_footer(); ?>
