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
    <div class="kv">キービジュアル</div>

    <section class="medical-treatment">
      <div class="section-title__wrapper --white --center">
        <h2 class="section-title">MENU</h2>
        <p class="section-sub-title">症状から探す診療メニュー</p>
      </div>
      <ul class="medical-treatment__list">
        <li class="medical-treatment__item medical-treatment__item--01">
          <h3 class="medical-treatment__head">
            <div class="medical-treatment__head-img icon-shoulder">
              <img src="<?php echo $rootDir ?>/images/top/icon-shoulder.svg" alt="">
            </div>
            <button class="medical-treatment__accordion">
              肩が痛い・肩がこる
            </button>
          </h3>
          <ul class="symptoms__list">
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">肩関節周囲炎<br>（凍結肩・五十肩）</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">腱板損傷</h4>
              </a>
            </li>
          </ul>
        </li>
        <li class="medical-treatment__item medical-treatment__item--02">
          <h3 class="medical-treatment__head">
            <div class="medical-treatment__head-img icon-lower-back">
              <img src="<?php echo $rootDir ?>/images/top/icon-lower-back.svg" alt="">
            </div>
            <button class="medical-treatment__accordion">
              腰が痛い
            </button>
          </h3>
          <ul class="symptoms__list">
            <li class="symptoms__item">
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
            </li>
          </ul>
        </li>
        <li class="medical-treatment__item medical-treatment__item--03">
          <h3 class="medical-treatment__head">
            <div class="medical-treatment__head-img icon-lower-limbs">
              <img src="<?php echo $rootDir ?>/images/top/icon-lower-limbs.svg" alt="">
            </div>
            <button class="medical-treatment__accordion">
              下肢の痛みやしびれなど
            </button>
          </h3>
          <ul class="symptoms__list">
            <li class="symptoms__item">
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
            </li>
          </ul>
        </li>
        <li class="medical-treatment__item medical-treatment__item--04">
          <h3 class="medical-treatment__head">
            <div class="medical-treatment__head-img icon-knee">
              <img src="<?php echo $rootDir ?>/images/top/icon-knee.svg" alt="">
            </div>
            <button class="medical-treatment__accordion">
              膝が痛い
            </button>
          </h3>
          <ul class="symptoms__list">
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">変形性関節症</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">ロコモティブシンドローム</h4>
              </a>
            </li>
          </ul>
        </li>
        <li class="medical-treatment__item medical-treatment__item--05 medical-treatment__item--dg">
          <h3 class="medical-treatment__head dc">
            <div class="medical-treatment__head-img icon-sports-injury">
              <img src="<?php echo $rootDir ?>/images/top/icon-sports-injury.svg" alt="">
            </div>
            <button class="medical-treatment__accordion">
              スポーツ障害・外傷
            </button>
          </h3>
          <ul class="symptoms__list">
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">疲労骨折<br>（腰椎分離症）</h4>
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
          </ul>
        </li>
        <li class="medical-treatment__item medical-treatment__item--06 medical-treatment__item--dg">
          <h3 class="medical-treatment__head dc">
            <div class="medical-treatment__head-img icon-growing-pain">
              <img src="<?php echo $rootDir ?>/images/top/icon-growing-pain.svg" alt="">
            </div>
            <button class="medical-treatment__accordion tal">
              子どもの成長による痛みと<br>
              運動機能の悩み
            </button>
          </h3>
          <ul class="symptoms__list">
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">成長痛（骨端症・オスグッド病）</h4>
              </a>
            </li>
            <li class="symptoms__item">
              <a href="" class="symptoms__link">
                <h4 class="symptoms__name">運動機能の悩み</h4>
                <span class="symptoms__note">※まずはお問合せください</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="medical-treatment-line">
        <div class="medical-treatment-line__inner">
          <p class="medical-treatment-line__text">症状や疾患が特定できない場合はまずご相談ください</p>
          <a href="" class="medical-treatment-line__link">
            <span>LINEで診療相談</span>
          </a>
        </div>
      </div>
    </section>

    <section class="message">
      <div class="message__inner">
        <div class="message__top">
          <div class="message__img">
            <img src="<?php echo $rootDir ?>/images/top/director-mask2.png" alt="">
          </div>
          <div class="message__wrapper">
            <span class="message__label">院長メッセージ</span>
            <h3 class="message__title">
              再生医療×運動療法で<br>
              関節の痛み、スポーツの悩みに<br>
              新たな提案を。
            </h3>
            <p class="message__text">
              私がスポーツドクターになろうと志したきっかけは、私自身の高校時代のアメリカンフットボールの練習中に負った膝の大怪我の経験です。<br>
              痛みや不安と共に運動を続ける日々の中で、自分と同じような悩みをもつアスリートを助けたいと思うようになり、スポーツ医療の本場である米国に留学し、アスレティックトレーナー(ATC)の資格を取得しました。そこで得た現場第一の姿勢は今も医療者としての根幹に息づいています。<br><br>
              これまで、整形外科医として診療をする中で、手術加療を選択せざるを得ない方や、まだ手術に至らないまでも、痛みで苦しんでいる方を多く診てきました。<br>
              日本の保険診療は全ての方々に同様の質の高い医療を安価で提供できる一方、海外では認められているような再生医療を含む先進医療を導入するのには非常に時間がかかっているのが実情です。<br><br>
              当院では、最先端の体外衝撃波や、再生医療の注射を用い、また運動療法も最先端器具と一流のスタッフで行うことにより、相乗効果で症状の改善、再発の予防をしてまいります。
            </p>
            <p class="message__director">
              MTXスポーツ・関節クリニック院長<br>
              富岡 義仁（とみおか　よしひと）
            </p>
          </div>
        </div>
        <div class="profile">
          <div class="profile__accordion-head">
            <button class="profile__accordion">
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
                    NASM　Corrective Exercise Specialist<br>
                    SFMA　
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

    <section class="clinic-features">
      <div class="clinic-features__wrapper">
        <div class="section-title__wrapper --green --right">
          <h2 class="section-title">FEATURES</h2>
          <p class="section-sub-title">クリニックの特徴</p>
        </div>
        <div class="clinic-features__01">
          <div class="clinic-features__01-img-wrapper">
            <div class="clinic-features__01-img">
              <img src="<?php echo $rootDir ?>/images/top/features.png" alt="">
            </div>
          </div>
          <div class="clinic-features__01-body">
            <div class="clinic-features__head-wrapper">
              <span class="clinic-features__head-label">FEATURES</span>
              <p class="clinic-features__head">01</p>
            </div>
            <div class="clinic-features__01-main">
              <p class="clinic-features__01-main-title">再生医療×運動療法</p>
              <p class="clinic-features__01-main-sub-title">ONE TEAMでトータルサポート</p>
              <p class="clinic-features__01-main-text">治療だけではない、リハビリだけでもない。</p>
              <p class="clinic-features__01-main-text">医師診断・評価の下、理学療法士や経験と知識をもった</p>
              <p class="clinic-features__01-main-text">MTXトレーナー陣と連携して予防にも取り組みます。</p>
            </div>
          </div>
        </div>
        <div class="clinic-features__02">
          <div class="clinic-features__02-wrapper">
            <div class="clinic-features__02-left">
              <div class="clinic-features__02-left-body">
                <div class="clinic-features__02-left-head">
                  <div class="clinic-features__head-wrapper">
                    <span class="clinic-features__head-label">FEATURES</span>
                    <p class="clinic-features__head">02</p>
                  </div>
                  <div class="clinic-features__sub-title">
                    数値化されたゴールに向かう<br>
                    “終わりの見える”治療プログラム
                  </div>
                </div>
                <p class="clinic-features__02-left-text">
                  今の患部の状態を評価（数値化）し、目標を最初に決め、それに向けた治療とリハビリの計画立案を医師が行います。定期的に評価を行い、状態の確認と計画の見直しをしていきます。
                </p>
              </div>
            </div>
            <div class="clinic-features__02-right">
              <div class="clinic-features__02-right-graph">
                <img src="<?php echo $rootDir ?>/images/top/graph.svg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="clinic-features__03">
          <div class="clinic-features__03-wrapper">
            <div class="clinic-features__03-left">
              <div class="clinic-features__03-left-img">
                <img src="<?php echo $rootDir ?>/images/top/feature03-01.png" alt="">
              </div>
            </div>
            <div class="clinic-features__03-center">
              <div class="clinic-features__head-wrapper">
                <span class="clinic-features__head-label">FEATURES</span>
                <p class="clinic-features__head">03</p>
              </div>
              <div class="clinic-features__sub-title">
                院長の持つ豊富な知識・経験で<br>
                痛みやしびれの根本的な原因を解明
              </div>
              <p class="clinic-features__03-text">富岡院長はじめ、ドクター陣が日本のみならず海外で培った経験と、学んだ知識とを活かし、様々な診察、評価方法を活用して根本的な原因を解明します。</p>
            </div>
            <div class="clinic-features__03-right">
              <div class="clinic-features__03-right-img">
                <img src="<?php echo $rootDir ?>/images/top/feature03-02.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="clinic-features__04">
          <div class="clinic-features__04-wrapper">
            <div class="clinic-features__04-left">
              <div class="clinic-features__04-left-img">
                <img src="<?php echo $rootDir ?>/images/top/feature04.png" alt="">
              </div>
            </div>
            <div class="clinic-features__04-right">
              <div class="clinic-features__head-wrapper">
                <span class="clinic-features__head-label">FEATURES</span>
                <p class="clinic-features__head">04</p>
              </div>
              <div class="clinic-features__sub-title">
                日本に4台しかない最先端機器<br>
                “ダイナミック・デバイス（DD）”
              </div>
              <p class="clinic-features__04-text">
                人工知能が搭載されたダイナミック・デバイス（DD）。<br>
                運動能力を数値化することが可能なため、パフォーマンス向上、注射と組み合わせての症状改善に向けたリカバリープログラムなど、多岐にわたって活用が可能。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
