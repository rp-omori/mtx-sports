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
            <div class="concept-lead__cross-icon">×</div>
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

    <section class="concept-interview">
      <div class="concept-interview__wrapper">
        <div class="concept-section__title-wrapper concept-section__title-wrapper--left concept-section__title-wrapper--white">
          <h3 class="concept-section__title">INTERVIEW</h3>
          <p class="concept-section__sub-title">メソッド開発者の想い</p>
        </div>
        <div class="concept-interview__main">
          <div class="concept-interview__lead">
            <p class="concept-interview__lead-text">
              MTX膝・関節クリニックのメソッドは、医師とトレーナーが手を組み開発されました。<br>
              開発に携わった3人のメソッド開発にかけた想いを語ってもらいました。
            </p>
            <div class="concept-interview__lead-human-wrapper">
              <div class="concept-interview__lead-human-inner">
                <div class="concept-interview__lead-human">
                  <div class="concept-interview__lead-human-img">
                    <img src="<?php echo $rootDir ?>/images/concept/tomioka.png" alt="">
                  </div>
                  <div class="concept-interview__lead-human-body">
                    <p class="concept-interview__lead-human-title">院長</p>
                    <p class="concept-interview__lead-human-name">富岡 義仁</p>
                    <p class="concept-interview__lead-human-ruby">とみおか　よしひと</p>
                  </div>
                </div>
                <div class="concept-interview__lead-human">
                  <div class="concept-interview__lead-human-img">
                    <img src="<?php echo $rootDir ?>/images/concept/sera.png" alt="">
                  </div>
                  <div class="concept-interview__lead-human-body">
                    <p class="concept-interview__lead-human-title">監修医師</p>
                    <p class="concept-interview__lead-human-name">世良　泰</p>
                    <p class="concept-interview__lead-human-ruby">せら　やすし</p>
                  </div>
                </div>
                <div class="concept-interview__lead-human">
                  <div class="concept-interview__lead-human-img">
                    <img src="<?php echo $rootDir ?>/images/concept/kimura.png" alt="">
                  </div>
                  <div class="concept-interview__lead-human-body">
                    <p class="concept-interview__lead-human-title">MTXトレーナー</p>
                    <p class="concept-interview__lead-human-name">木村　國宏</p>
                    <p class="concept-interview__lead-human-ruby">きむら　まさひろ</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="concept-interview__body">
            <div class="concept-interview__body-wrapper concept-interview__body-wrapper--right">
              <div class="concept-interview__comment-wrapper">
                <h4 class="concept-interview__title">まずはお三方の経歴を教えてください</h4>
                <div class="concept-interview__comment">
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">木村</p>
                    <p class="concept-interview__comment-text">
                      2005年からスポーツトレーナーとして活動しています。高齢者向け体操教室や、健康講演のような活動をするなかで、運動に触れていない人たち、触れられない人たちに、運動の素晴らしさを広げるための活動が必要と感じました
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">世良</p>
                    <p class="concept-interview__comment-text">
                      プロチームでスポーツドクターとして活動していましたが、プロよりも、”環境が整っていない子”のサポートに興味がありました。未だに非科学的な指導を受けている子に、運動の仕方まで処方できる正しいスポーツ医療を提供したいです
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">富岡</p>
                    <p class="concept-interview__comment-text">
                      日本の高校を卒業後アメリカの大学に進学し、アスレティックトレーナー(Certified Athletic Trainer)という資格をとって日本に帰ってきました。この資格は、スポーツの現場で活躍する医療の資格です。その後日本の大学医学部に編入し医師免許も取得しました。私もプロだけでなく、スポーツドクターの存在を知らない人の助けになりたいです
                    </p>
                  </div>
                </div>
              </div>
              <div class="concept-interview__img-wrapper">
                <div class="concept-interview__img concept-interview__img--01">
                  <img src="<?php echo $rootDir ?>/images/concept/comment-01.png" alt="">
                </div>
              </div>
            </div>
            <div class="concept-interview__body-wrapper concept-interview__body-wrapper--left">
              <div class="concept-interview__comment-wrapper">
                <h4 class="concept-interview__title">
                  日本という国のスポーツ医学の<br>
                  現在地について
                </h4>
                <div class="concept-interview__comment">
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">世良</p>
                    <p class="concept-interview__comment-text">
                      世界と比較して３０年くらいは遅れています。
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">木村</p>
                    <p class="concept-interview__comment-text">
                      そんなにですか！？
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">富岡</p>
                    <p class="concept-interview__comment-text">
                      海外とは認識がそもそも違うかなあという感じですね。
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">世良</p>
                    <p class="concept-interview__comment-text">
                      そもそも、スポーツドクターという資格がないです。<br>
                      日本の医師は、専門医機構という第三者機関を作って、整形外科専門医や内科専門医という風に職域を分類しているのです。その中にスポーツ医学は入っていないです。結果として、スポーツ医学は、日本じゃ正しく認識されていないというのが実態です。
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">富岡</p>
                    <p class="concept-interview__comment-text">
                      結局、整形外科が９割くらいの印象です。スポーツドクターって本当は病院で手術をしたり精密検査をしたりするタイプと、スポーツの現場で選手やトレーナーと病院の橋渡しをするタイプがにいるんです。けれど日本だと、後者のアプローチが難しく、どうしても病院にいて、選手が怪我をしたり不調を訴えて来るのを待って、後手にまわってしまう事が多いんです。僕は自分から選手の元に行きたいんですよ。
                    </p>
                  </div>
                </div>
              </div>
              <div class="concept-interview__img-wrapper">
                <div class="concept-interview__img concept-interview__img--02">
                  <img src="<?php echo $rootDir ?>/images/concept/comment-02.png" alt="">
                </div>
              </div>
            </div>
            <div class="concept-interview__body-wrapper concept-interview__body-wrapper--right">
              <div class="concept-interview__comment-wrapper">
                <h4 class="concept-interview__title">
                  MTXのクリニック部門の特徴とは？
                </h4>
                <div class="concept-interview__comment">
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">富岡</p>
                    <p class="concept-interview__comment-text">
                      一般的な病院は、状態がマイナスに落ち込んだ人を、０の状態に戻すことが任務ですが、それだけだと途中でケアが終わってしまいます。本来であればマイナスを０、そしてプラスまでもってくのが理想です。筋トレをしたりだとか、実際に球を投げるところもみて、初めて治療が完了する。MTXアカデミーではそういうことまで行います。
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">世良</p>
                    <p class="concept-interview__comment-text">
                      医師以外のスタッフが充実していますので、怪我まではいかないけれど腰が痛いとか、純粋にパフォーマンスを上げたいっていう人もケアできます。リハビリから先の、怪我を予防するためのパフォーマンス上昇術など木村さんなどのトレーニングは、おじいちゃんおばあちゃんでも応用できます。この一気通貫したサービスは他にはないと思いますね
                    </p>
                  </div>
                </div>
              </div>
              <div class="concept-interview__img-wrapper">
                <div class="concept-interview__img concept-interview__img--03">
                  <img src="<?php echo $rootDir ?>/images/concept/comment-03.png" alt="">
                </div>
              </div>
            </div>
            <div class="concept-interview__body-wrapper concept-interview__body-wrapper--left">
              <div class="concept-interview__comment-wrapper">
                <h4 class="concept-interview__title">
                  治す関節治療とは何か？
                </h4>
                <div class="concept-interview__comment">
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">世良</p>
                    <p class="concept-interview__comment-text">
                      我々は、治るというのは日常生活で本人が求めるレベルまで戻ることかなと考えているのです。この本人が求めるレベルというのが、個人によって異なる。医師が行うリハビリにほとんどの運動療法は入っていないのです。
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">木村</p>
                    <p class="concept-interview__comment-text">
                      たぶんこの３人に共通するのは、“人には回復力が間違いなくある”という立場にたっていることかと思います。その人の回復力を信じて、その人が求めるレベルに回復するまでは治療を続けてあげようと。
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">富岡</p>
                    <p class="concept-interview__comment-text">
                      そうですね。体の異常は、構造的な異常と、機能的な異常に分けられます。レントゲンなどの検査では異常はないけれど、ダッシュをしたら痛いっていうのは、機能的な異常が放置されている可能性がある。両方しっかり診てあげて、患者さんのゴールに応じて、再生医療もリハビリも、運動療法も含めて行うことが“治る関節治療”だと思います。
                    </p>
                  </div>
                </div>
              </div>
              <div class="concept-interview__img-wrapper">
                <div class="concept-interview__img concept-interview__img--04">
                  <img src="<?php echo $rootDir ?>/images/concept/comment-04.png" alt="">
                </div>
              </div>
            </div>
            <div class="concept-interview__body-wrapper concept-interview__body-wrapper--right">
              <div class="concept-interview__comment-wrapper">
                <h4 class="concept-interview__title">
                  数値化して患者さんの回復具合を見るとは
                </h4>
                <div class="concept-interview__comment">
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">富岡</p>
                    <p class="concept-interview__comment-text">
                      クリニックではDDシステムとD-Wallっていう２種類の最新器具を導入しています。<br>
                      どちらも自分の身体の状態を数値で表示する機械です。数値で表すことで、どれくらい良くなったかが分かりやすいと思います。
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">木村</p>
                    <p class="concept-interview__comment-text">
                      DDシステムはトレーニングでもよく使っています。<br>
                      これまでのマシンが、１、10、20と10刻みでしかスコアを計測できなかったとすると、このマシンでは0.1単位やもっと細かい単位が測れるので選手たちにも喜ばれています。
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">世良</p>
                    <p class="concept-interview__comment-text">
                      最新器具の導入により、人間が無意識に動かしていた身体の動きを数値化できるようになりました。<br>
                      本人にも、治ったことがわからない患部の具合を見られる他、スポーツ選手は、癖で動かしていたフォームの矯正も行いやすくなり、怪我防止になります。
                    </p>
                  </div>
                </div>
              </div>
              <div class="concept-interview__img-wrapper">
                <div class="concept-interview__img concept-interview__img--05">
                  <img src="<?php echo $rootDir ?>/images/concept/comment-05.png" alt="">
                </div>
              </div>
            </div>
            <div class="concept-interview__body-wrapper concept-interview__body-wrapper--col">
              <div class="concept-interview__comment-wrapper">
                <h4 class="concept-interview__title">
                  クリニックが見据える未来への展望
                </h4>
                <div class="concept-interview__comment">
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">富岡</p>
                    <p class="concept-interview__comment-text">
                      患者さんが自分の身体のことをちゃんと理解できるようになって欲しいと思いますねなるのが理想です。子どもは、身体の使い方を間違えたり、限界がわからず無理をして怪我をするということが多いのです。自分の身体を知れば、痛みなく効率的にパフォーマンスを伸ばせると思います。
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">世良</p>
                    <p class="concept-interview__comment-text">
                      運動が身体に良いことは、みんなわかっている。わかっているけれど、やれない人のサポートをしたいと思っています。スポーツをやっているような若い人から、お年寄りまで全部含めて対象を限らず、スポーツ医学を提供したいっていうのが最終的な目標です。
                    </p>
                  </div>
                  <div class="concept-interview__comment-inner">
                    <p class="concept-interview__comment-name">木村</p>
                    <p class="concept-interview__comment-text">
                      僕は、 運動がどんどん日常に入っていくような世の中にしていきたいです。小学校の45分の授業の中で、5分間はエクササイズに費やそうというような、そういう世の中にしたい。<br>
                      また、アカデミーに来る方たちの中には、怪我の結果自分に絶望を感じてくる方も結構いらっしゃいます。昨日の試合で怪我をしたため、もしかしたら明日からボールを一生投げられないかもしれないといった不安を抱えている人が少なくない。彼ら彼女らに対して、ここでちゃんと休む、この日はこういうトレーニングを行う、投げ方のフォームをこう修正する。<br>
                      そうすればまたボールが投げられる、と具体的にトレーニングのやり方と、その先の展望を語り続けたい。そうすると、“明日から俺、頑張ります”って明るく変わっていくんですよ。<br>
                      明日また体を動かしたいなっていう、ちょっとした気持ちを上げる関わりを続けること。<br>
                      絶望を希望へ変えていく活動を、ずっと行いたいと思います。
                    </p>
                  </div>
                </div>
              </div>
              <div class="concept-interview__img-wrapper">
                <div class="concept-interview__img concept-interview__img--06">
                  <img src="<?php echo $rootDir ?>/images/concept/comment-06.png" alt="">
                </div>
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
