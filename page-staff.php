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
  <div id="introduce" class="introduce-contents">

    <div class="introduce-top-wrapper">
      <div class="introduce-top">
        <p>STAFF</p>
      </div>
    </div>

    <div class="introduce-top-lead">
      <p>一人の患者さんに対し、<br class="sp">医師・トレーナー・理学療法士<br>がチームを組んで治療していきます。</p>
    <img class="pc" src="<?php echo $rootDir ?>/images/introduce/introduce-top-img.png" alt="">
    <img class="sp" src="<?php echo $rootDir ?>/images/introduce/introduce-top-img_sp.png" alt="">
    </div>

    <div id="system" class="introduce-contents">
      <div class="introduce-contents__inner">
        <div class="introduce-contents__inner_ttl">
          <p>院長</p>
        </div>
        <div class="introduce-contents__inner_box">
          <div class="introduce-contents__inner_box_left">
            <img src="<?php echo $rootDir ?>/images/introduce/staff_01.png" alt="">
          </div>
          <div class="introduce-contents__inner_box_right">
            <div class="introduce-contents__inner_box_right_name">
              <div class="introduce-contents__inner_box_right_name_top">
                <div class="introduce-contents__inner_box_right_name_top_left">
                  <p class="en">TOMIOKA</p>
                  <p>富岡 義仁</p>
                  <p class="small">とみおか よしひと</p>
                </div>
                <div class="introduce-contents__inner_box_right_name_top_right">
                  <img src="<?php echo $rootDir ?>/images/introduce/method_01_white.png" alt="">
                  <img class="small" src="<?php echo $rootDir ?>/images/introduce/method_02_white.png" alt="">
                  <img class="small" src="<?php echo $rootDir ?>/images/introduce/method_03_white.png" alt="">
                </div>
              </div>
              <div class="introduce-contents__inner_box_right_name_bottom">
                <p>担当領域：診察／動きの評価／運動療法・物理療法の処方および治療経過の評価</p>
              </div>
            </div>
            <div class="introduce-contents__inner_box_right_lead">
              <p>
                患者さんの悩みに寄り添い<br>
                共に解決を目指します
              </p>
              <p class="small">
                これまで整形外科医として診療をする中で、手術加療を選択せざるを得ない方や、
                まだ手術に至らないまでも、痛みで苦しんでいる方を多く診てきました。
                日本の保険診療は全ての方々に同様の質の高い医療を安価で提供できる一方、
                海外では認められているような再生医療を含む先進医療を導入するのには非常に時間がかかっているのが事実です。<br>
                当院では、最新の体外衝撃波や再生医療の注射を用い、また運動療法も最新器具と一流のスタッフで行うことにより、相乗効果で症状の改善・再発の予防をしてまいります。
              </p>
            </div>
            <div class="introduce-contents__inner_box_right_license">
              <p>・ 保有資格</p>
              <ul>
                <li>整形外科専門医</li>
                <li>NATA Certified Athletic Trainer |全米公認アスレティックトレーナー</li>
                <li>IOC Diploma in Sports Medicine | 国際オリンピック委員会公認スポーツドクター</li>
                <li>NASM | Performance Enhancement Specialist</li>
                <li>NASM | Collective Excercise Specialist</li>
                <li>FMS | Functional Movement Systems</li>
                <li>SFMA | Selective Functional Movement Assessment</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="introduce-contents__inner bg_white">
        <div class="introduce-contents__inner_ttl pd_0">
          <p class="green">監修医師</p>
        </div>
        <div class="introduce-contents__inner_box reverse">
          <div class="introduce-contents__inner_box_left sp_right">
            <img src="<?php echo $rootDir ?>/images/introduce/staff_02.png" alt="">
          </div>
          <div class="introduce-contents__inner_box_right reverse">
            <div class="introduce-contents__inner_box_right_name">
              <div class="introduce-contents__inner_box_right_name_top border_green">
                <div class="introduce-contents__inner_box_right_name_top_left">
                  <p class="en white">SERA</p>
                  <p class="black">世良 泰</p>
                  <p class="small black">せら やすし</p>
                </div>
                <div class="introduce-contents__inner_box_right_name_top_right">
                  <img src="<?php echo $rootDir ?>/images/introduce/method_01_white.png" alt="">
                  <img class="small" src="<?php echo $rootDir ?>/images/introduce/method_02_white.png" alt="">
                  <img class="small" src="<?php echo $rootDir ?>/images/introduce/method_03_white.png" alt="">
                </div>
              </div>
              <div class="introduce-contents__inner_box_right_name_bottom">
                <p class="black">担当領域：治療内容監修</p>
              </div>
            </div>
            <div class="introduce-contents__inner_box_right_lead">
              <p class="green">
                生活に最も身近な、真のスポーツ医学を<br>
                日本そして世界で実践することを目指します
              </p>
              <p class="small black">
                正しい医療を受けられず夢を諦めた選手、痛みは年齢のせいと諦めた方々を数多くみてきました。<br>
                運動は飲み薬と同じかそれ以上の効果があります。<br>
                保険診療の医療だけでは提供できない、全ての悩みに寄り添う真のスポーツ医学を全てのスタッフで提供します。
              </p>
            </div>
          </div>
        </div>
        <div class="introduce-contents__inner_box_license">
              <p class="green">・ 保有資格</p>
              <ul>
                <li>日本整形外科学会専門医</li>
                <li>日本内科学会認定内科医</li>
                <li>公衆衛生学修士</li>
                <li>IOC Diploma in Sports Medicine | 国際オリンピック委員会公認スポーツドクター</li>
                <li>日本スポーツ協会公認スポーツドクター</li>
                <li>日本医師会認定健康スポーツ医</li>
                <li>日本整形外科学会認定スポーツ医</li>
                <li>日本パラスポーツ協会公認障がい者スポーツ医</li>
                <li>NASM | Performance Enhancement Specialist</li>
                <li>NASM | Collective Excercise Specialist</li>
                <li>日本医師会認定産業医</li>
                <li>MTX Academyチームドクター（ジム，野球，レスリング）</li>
                <li>TWOLAPSチームドクター（陸上）</li>
                <li>日本陸上連盟医事委員</li>
                <li class="pc">　</li>
                <li class="pc">　</li>
              </ul>
            </div>
      </div>
      <div class="introduce-contents__inner">
        <div class="introduce-contents__inner_ttl">
          <p>理学療法士</p>
        </div>
        <div class="introduce-contents__inner_box mb_more">
          <div class="introduce-contents__inner_box_left">
            <img src="<?php echo $rootDir ?>/images/introduce/staff_03.png" alt="">
          </div>
          <div class="introduce-contents__inner_box_right">
            <div class="introduce-contents__inner_box_right_name">
              <div class="introduce-contents__inner_box_right_name_top border_none">
                <div class="introduce-contents__inner_box_right_name_top_left">
                  <p class="en">ISHIZAKI</p>
                  <p>石崎 翔大</p>
                  <p class="small">いしざき しょうた</p>
                </div>
                <div class="introduce-contents__inner_box_right_name_top_right">
                  <img src="<?php echo $rootDir ?>/images/introduce/method_02.png" alt="">
                </div>
              </div>
            </div>
            <div class="introduce-contents__inner_box_right_lead">
              <p>
                痛みのない最高の身体機能獲得に向けて<br>
                最善を尽くします
              </p>
              <p class="small">
                2011年理学療法士免許を取得。整形外科領域で延べ6万件以上の治療、トレーニングに携わり、日常生活での痛みの改善、オリンピック代表選手などのアスリートの競技復帰をサポートしてきました。<br>
                当クリニックでは、最先端の治療技術、エクササイズを活用して治療、痛みの改善を行なっていきます。
              </p>
            </div>
            <div class="introduce-contents__inner_box_right_license">
              <p>・ 保有資格</p>
              <ul>
                <li>Physical Therapist｜理学療法士</li>
                <li>SFMA | Selective Functional Movement Assessment</li>
                <li>TRX functional training</li>
                <li>Fascal　Manipulation®</li>
                <li>PRI ® ｜Postural Restoration Institute</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="introduce-contents__inner_box reverse">
          <div class="introduce-contents__inner_box_left sp_right">
            <img src="<?php echo $rootDir ?>/images/introduce/staff_04.png" alt="">
          </div>
          <div class="introduce-contents__inner_box_right reverse">
            <div class="introduce-contents__inner_box_right_name">
              <div class="introduce-contents__inner_box_right_name_top border_none">
                <div class="introduce-contents__inner_box_right_name_top_left">
                  <p class="en other">SHINKAI</p>
                  <p>新海 貴史</p>
                  <p class="small">しんかい たかふみ</p>
                </div>
                <div class="introduce-contents__inner_box_right_name_top_right">
                  <img src="<?php echo $rootDir ?>/images/introduce/method_02.png" alt="">
                </div>
              </div>
              <div class="introduce-contents__inner_box_right_name_bottom">
                <p>Physical Therapist｜理学療法士</p>
              </div>
            </div>
            <div class="introduce-contents__inner_box_right_lead">
              <p>
                １人でも多くの患者さんの<br>
                悩み解消のために全力をつくします
              </p>
              <p class="small">
                理学療法士として今まで整形外科病院やクリニックにおいて、<br>
                子どもから高齢者、アスリートまで幅広いジャンルの患者さんに携わらせていただきました。<br>
                <br>
                自身も小学校から野球を始めて現在もプレーヤーとして続けておりますので、投球障害で悩む野球選手を1人でも多くサポートしてまいります。
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="introduce-contents__inner bg_white mb">
        <div class="introduce-contents__inner_ttl pd_0">
          <p class="green">MTXアカデミートレーナー<br>- 実践トレーニング担当 -</p>
        </div>
        <div class="introduce-contents__inner_box reverse">
          <div class="introduce-contents__inner_box_left sp_right">
            <img src="<?php echo $rootDir ?>/images/introduce/staff_05.png" alt="">
          </div>
          <div class="introduce-contents__inner_box_right reverse">
            <div class="introduce-contents__inner_box_right_name">
              <div class="introduce-contents__inner_box_right_name_top border_green">
                <div class="introduce-contents__inner_box_right_name_top_left">
                  <p class="en white">KIMURA</p>
                  <p class="black">木村 匡宏</p>
                  <p class="small black">きむら まさひろ</p>
                  <p class="degree">柔道整復師<br class="pc"><span class="sp" style="display: inline !important;"></span>医療国家資格取得</p>
                </div>
                <div class="introduce-contents__inner_box_right_name_top_right">
                  <img src="<?php echo $rootDir ?>/images/introduce/method_02_white.png" alt="">
                </div>
              </div>
            </div>
            <div class="introduce-contents__inner_box_right_lead">
              <p class="green">
                私たちが目指すのは、<br>
                “日本に、スポーツ医学を正しく広めること”です
              </p>
              <p class="small black">
                我々の想いは、一部のトップアスリートだけではなく、小・中学生、学生、一般の方まで、 誰もが最先端のスポーツ医学を身近に活用できるクリニックであることです。<br>ドクターとトレーナーが力を合わせ、みなさまをサポートしてまいります。
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="introduce-contents__inner bg_white pd_sp">
        <div class="introduce-contents__inner_ttl pd_0">
          <p class="green">MTXアカデミートレーナー<br>- 強化トレーニング担当 -</p>
        </div>
        <div class="introduce-contents__inner_box">
          <div class="introduce-contents__inner_box_left">
            <img src="<?php echo $rootDir ?>/images/introduce/staff_06.png" alt="">
          </div>
          <div class="introduce-contents__inner_box_right">
            <div class="introduce-contents__inner_box_right_name">
              <div class="introduce-contents__inner_box_right_name_top border_green">
                <div class="introduce-contents__inner_box_right_name_top_left">
                  <p class="en white">TANABE</p>
                  <p class="black">田邊 大吾</p>
                  <p class="small black">たなべ だいご</p>
                  <p class="degree more">はり師<br class="pc"><span>/</span>きゅう師<br class="pc"><span>/</span>あん摩マッサージ指圧師 </p>
                </div>
                <div class="introduce-contents__inner_box_right_name_top_right">
                  <img src="<?php echo $rootDir ?>/images/introduce/method_02_white.png" alt="">
                </div>
              </div>
            </div>
            <div class="introduce-contents__inner_box_right_lead">
              <p class="green">
                チーム一丸で<br>
                患者様をサポートします
              </p>
              <p class="small black">
                正しい情報や判断基準を得られず、繰り返し起こってしまう怪我に泣かされる子どもたちやアスリートを、今までたくさん見てきました。<br>
                同じことを繰り返さないためにも、ドクターの診察からリハビリ、競技復帰のためのトレーニングまで、医師、理学療法士、そして私たちトレーナーという専門家が連携を取り、一人一人に寄り添った最善のサポートをいたします。
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="introduce-contents__inner pd_more">
        <div class="introduce-contents__inner_ttl">
          <p>MTXアカデミートレーナー<br>- 回復治療担当 -</p>
        </div>
        <div class="introduce-contents__inner_box mb_more reverse">
          <div class="introduce-contents__inner_box_left sp_right">
            <img src="<?php echo $rootDir ?>/images/introduce/staff_07.png" alt="">
          </div>
          <div class="introduce-contents__inner_box_right reverse">
            <div class="introduce-contents__inner_box_right_name">
              <div class="introduce-contents__inner_box_right_name_top border_none">
                <div class="introduce-contents__inner_box_right_name_top_left">
                  <p class="en other">WATANABE</p>
                  <p>渡邊　健二</p>
                  <p class="small">わたなべ　けんじ</p>
                  <p class="degree less white">柔道整復師</p>
                </div>
                <div class="introduce-contents__inner_box_right_name_top_right">
                  <img src="<?php echo $rootDir ?>/images/introduce/method_03.png" alt="">
                </div>
              </div>
            </div>
            <div class="introduce-contents__inner_box_right_lead">
              <p>
                一人一人に寄り添い最善の<br>
                サポートを行います
              </p>
              <p class="small">
                私が柔道整復師として患者様と向き合っていく中で、必ずぶつかってきた壁があります。それは「施術の限界」という壁でした。<br>
                このクリニックでは、その「施術の限界」を突破するきっかけをドクターが作ってくれます。<br>
                さらに、治療連携においては整骨院と整形外科との連携をこれまで以上に身近にし、正確な診断のもと、さらに患者様に寄り添ったサポートを、チーム一丸で行なってまいります。
              </p>
            </div>
          </div>
        </div>
        <div class="introduce-contents__inner_ttl">
          <p>MTXアカデミートレーナー<br>- HAL®担当 -</p>
        </div>
        <div class="introduce-contents__inner_box mb">
          <div class="introduce-contents__inner_box_left">
            <img src="<?php echo $rootDir ?>/images/introduce/staff_08.png" alt="">
          </div>
          <div class="introduce-contents__inner_box_right">
            <div class="introduce-contents__inner_box_right_name">
              <div class="introduce-contents__inner_box_right_name_top border_none">
                <div class="introduce-contents__inner_box_right_name_top_left">
                  <p class="en">SUZUKI</p>
                  <p>鈴木 昂輔</p>
                  <p class="small">すずき こうすけ</p>
                  <p class="degree less white">介護福祉士</p>
                </div>
                <div class="introduce-contents__inner_box_right_name_top_right">
                  <img src="<?php echo $rootDir ?>/images/introduce/method_02.png" alt="">
                </div>
              </div>
            </div>
            <div class="introduce-contents__inner_box_right_lead">
              <p>
                小学生からご高齢の方まで幅広い<br>
                患者様の怪我や病気を治したいです
              </p>
              <p class="small">
                病院で診察を受けてお薬をもらって帰る。<br>
                これだけではなく、専門家が寄り添って<br>
                社会復帰を出来るように、一人一人サポートいたします。<br>
                <br>
                怪我や病気に悩まされ家の中で生活している人が、身体を動かす大切さを知れる、小学生からご高齢の方まで幅広く利用できる施設を目指します。
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php get_template_part('component/footer__other'); ?>



  </div>

</main>

<?php get_footer(); ?>
