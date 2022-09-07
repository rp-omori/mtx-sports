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
  <div id="flow" class="flow-contents">

    <div class="flow-top-wrapper">
      <div class="flow-top">
        <p>FLOW</p>
      </div>
    </div>

    <div id="" class="flow-main">
      <div class="flow-main__inner">
        <div class="flow-main__inner_left">
          <!-- <div class="flow-main__inner_left_ttl">
            <p>FLOW</p>
          </div> -->
          <div class="flow-main__inner_left_txt">
            <p>
              患者さんの “良くなった”、“良くなっていない” といった主観的な感覚は、治療経過の評価に非常に重要です。<br>
              しかしながら、この感覚は本人だけのものであり、医師は正確に評価できません。<br>
              当院では医師の診察により疾患の状態を数値化。それに基づき、再生医療と運動療法を組み合わせた治療計画を行います。数値化された目標に向かって、患者様と共に明確に治療経過を測りながら進めることで、目標達成へと着実に進め、<br>
              “終わりの見える治療”を目指します。<br>
              用いるのは、最新機器「ダイナミック・デバイス」とSFMAやCESなどの運動機能の状態を測る診断基準です。<br>
              治療目標と経過の数値や状態は、医師、理学療法士、トレーナー、患者さんの全員で共有し、連携して進めていきます。
            </p>
          </div>
          <a href="<?php echo esc_url(home_url('system_facility')); ?>" class="flow-main__inner_left_btn index_btn">
            <p>治療体制はこちら</p>
            <img src="<?php echo $rootDir ?>/images/flow/icon-arrow-circle-right--white.svg" alt="">
          </a>
        </div>
        <div class="flow-main__inner_right">
          <img class="pc" src="<?php echo $rootDir ?>/images/flow/flow-main__innner_right.png" alt="">
          <img class="sp" src="<?php echo $rootDir ?>/images/flow/flow-main__innner_right_sp.png" alt="">
        </div>
      </div>
    </div>

    <div id="" class="flow-circle">
      <div class="flow-circle__inner">
        <div id="left" style="" class="flow-circle__inner_left">
          <img class="pc" src="<?php echo $rootDir ?>/images/flow/flow_circle.png" alt="">
          <img class="sp" src="<?php echo $rootDir ?>/images/flow/flow_circle_sp.png" alt="">
          <img class="pc flow_mark" src="<?php echo $rootDir ?>/images/flow/flow_mark.png" alt="">
        </div>
        <div id="right" class="flow-circle__inner_right">
          <div class="flow-circle__inner_right_box">
            <div class="flow-circle__inner_right_box_top">
              <div class="flow-circle__inner_right_box_top_ttl">
                <div class="flow-circle__inner_right_box_top_ttl_left">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_01.png" alt="">
                  <p>診察・動きの評価</p>
                </div>
                <div class="flow-circle__inner_right_box_top_ttl_right">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_01.png" alt="">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_02.png" alt="">
                </div>
              </div>
              <div class="flow-circle__inner_right_box_top_txt">
                <p>
                  診察・カウンセリングを行いつつ、当クリニックでは必ず患部含め、全身の動きを確認いたします。<br>
                  診察室で患者様に動いていただき、痛みやしびれの根本的な原因を様々なスケールを活用し、医師が診断します。場合によっては、DDシステム（機械）を使うこともあります。
                </p>
              </div>
              <div class="flow-circle__inner_right_box_top_logo">
                <p>関連施設</p>
                <img src="<?php echo $rootDir ?>/images/flow/flow_logo_01.png" alt="">
                <img class="small" src="<?php echo $rootDir ?>/images/flow/flow_logo_02.png" alt="">
              </div>
            </div>
            <div class="flow-circle__inner_right_box_middle">
              <div class="flow-circle__inner_right_box_middle_left">
                <div class="flow-circle__inner_right_box_middle_left_top">
                  <p>活用する評価方法と機器</p>
                </div>
                <div class="flow-circle__inner_right_box_middle_left_bottom">
                  <p class="green">
                    SFMA<br>
                    （Selective Functional Movement Assessment）
                  </p>
                  <p>「痛みがないにもかかわらず、動きの制限がある部位」に焦点を当て、身体の隠れた問題を探ります。</p>
                  <p class="green">CES （Corrective Exercise Specialist）</p>
                  <p>スクワットや片足バランスで動きの中の異常を探り、筋膜リリースや筋の刺激を用いて改善していきます。</p>
                  <p class="green">DDシステム (ddrobotec©)</p>
                  <p>下半身の筋力や瞬発力など、約50項目を視覚化してグラフに表し視覚化することで、有効な筋力強化ができます。</p>
                </div>
              </div>
              <div class="flow-circle__inner_right_box_middle_right">
                <div class="flow-circle__inner_right_box_middle_right_txt">
                  <img src="<?php echo $rootDir ?>/images/flow/bottom_arrow.svg" alt="">
                  <p>動きを診るための広い診察室</p>
                </div>
                <div class="flow-circle__inner_right_box_middle_right_img">
                <img src="<?php echo $rootDir ?>/images/flow/flow_img_01.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="flow-circle__inner_right_box_middle">
              <div class="flow-circle__inner_right_box_middle_right sp_mb">
                <div class="flow-circle__inner_right_box_middle_right_txt">
                  <img src="<?php echo $rootDir ?>/images/flow/bottom_arrow.svg" alt="">
                  <p>DDシステムで見ることができる数値</p>
                </div>
                <div class="flow-circle__inner_right_box_middle_right_img">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_img_02.jpg" alt="">
                </div>
              </div>
              <div class="flow-circle__inner_right_box_middle_right">
                <div class="flow-circle__inner_right_box_middle_right_txt">
                  <img src="<?php echo $rootDir ?>/images/flow/bottom_arrow.svg" alt="">
                  <p>問診やレントゲンだけではなく、<br>スケールを活用し動きを数値化します</p>
                </div>
                <div class="flow-circle__inner_right_box_middle_right_img">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_img_03.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="flow-circle__inner_right_box">
            <div class="flow-circle__inner_right_box_top">
              <div class="flow-circle__inner_right_box_top_ttl">
                <div class="flow-circle__inner_right_box_top_ttl_left">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_02.png" alt="">
                  <p>目標設定</p>
                </div>
                <div class="flow-circle__inner_right_box_top_ttl_right">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_01.png" alt="">
                </div>
              </div>
              <div class="flow-circle__inner_right_box_top_txt">
                <p>
                  医師が今の患部の状態を分析し、患者様とともに目標を決めます。<br>
                  目標については、“まずは歩けるようになりたい”なのか“歩くことはもちろん、走ったり運動もしたい”など、
                  患者様により設定されるゴールが異なるものですので、どのような状態を目指したいのかもお聞きした上で設定いたします。
                </p>
              </div>
              <div class="flow-circle__inner_right_box_top_logo">
                <p>関連施設</p>
                <img src="<?php echo $rootDir ?>/images/flow/flow_logo_01.png" alt="">
              </div>
            </div>
          </div>
          <div class="flow-circle__inner_right_box">
            <div class="flow-circle__inner_right_box_top">
              <div class="flow-circle__inner_right_box_top_ttl">
                <div class="flow-circle__inner_right_box_top_ttl_left">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_03.png" alt="">
                  <p>治療計画（再生医療・運動療法・物理療法）</p>
                </div>
                <div class="flow-circle__inner_right_box_top_ttl_right">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_01.png" alt="">
                </div>
              </div>
              <div class="flow-circle__inner_right_box_top_txt">
                <p>
                  「02.目標設定」で立てた目標に合わせて、医師により、再生医療と運動療法・物理療法を組み合わせた治療プログラムを計画します。<br>
                  治療プログラムは、目指すゴールに合わせて、治療期間や回数なども異なります。
                </p>
              </div>
              <div class="flow-circle__inner_right_box_top_logo">
                <p>関連施設</p>
                <img src="<?php echo $rootDir ?>/images/flow/flow_logo_01.png" alt="">
              </div>
            </div>
          </div>
          <div class="flow-circle__inner_right_box">
            <div class="flow-circle__inner_right_box_top">
              <div class="flow-circle__inner_right_box_top_ttl">
                <div class="flow-circle__inner_right_box_top_ttl_left">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_04.svg" alt="">
                  <p>治療プログラム開始<br>（再生医療・運動療法・物理療法）</p>
                </div>
                <div class="flow-circle__inner_right_box_top_ttl_right">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_01.png" alt="">
                </div>
              </div>
              <div class="flow-circle__inner_right_box_top_txt">
                <p>
                  「03.治療計画」で立てた治療計画にそって医師、理学療法士、トレーナーが連携して治療を行っていきます。<br>
                  運動療法は、DDシステムやMTXアカデミーでも行いますが、患者様の治療の状況はすべて共通のカルテで共有され、スムーズに治療を行う体制を整えております。
                </p>
              </div>
              <div class="flow-circle__inner_right_box_top_logo">
                <p>関連施設</p>
                <img src="<?php echo $rootDir ?>/images/flow/flow_logo_01.png" alt="">
                <img class="small" src="<?php echo $rootDir ?>/images/flow/flow_logo_03.png" alt="">
                <img class="small" src="<?php echo $rootDir ?>/images/flow/flow_logo_02.png" alt="">
              </div>
            </div>
            <div class="flow-circle__inner_right_box_bottom">
              <div class="flow-circle__inner_right_box_bottom_right sp_mb">
                <div class="flow-circle__inner_right_box_bottom_right_img">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_img_04.jpg" alt="">
                </div>
              </div>
              <div class="flow-circle__inner_right_box_bottom_right sp_mb">
                <div class="flow-circle__inner_right_box_bottom_right_img">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_img_05.jpg" alt="">
                </div>
              </div>
              <div class="flow-circle__inner_right_box_bottom_right">
                <div class="flow-circle__inner_right_box_bottom_right_img">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_img_06.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="flow-circle__inner_right_box">
            <div class="flow-circle__inner_right_box_top">
              <div class="flow-circle__inner_right_box_top_ttl">
                <div class="flow-circle__inner_right_box_top_ttl_left">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_05.png" alt="">
                  <p>再診・再評価</p>
                </div>
                <div class="flow-circle__inner_right_box_top_ttl_right">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_01.png" alt="">
                </div>
              </div>
              <div class="flow-circle__inner_right_box_top_txt">
                <p>
                  定期的に再診、再評価を行い、理学療法士やトレーナーと連携して都度軌道修正が必要か確認します。<br>
                  状況によって治療計画の見直しを行い、より早い機能改善に努めます。
                </p>
              </div>
            </div>
          </div>
          <div class="flow-circle__inner_right_box more">
            <div class="flow-circle__inner_right_box_top">
              <div class="flow-circle__inner_right_box_top_ttl">
                <div class="flow-circle__inner_right_box_top_ttl_left">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_06.png" alt="">
                  <p>目標達成</p>
                </div>
                <div class="flow-circle__inner_right_box_top_ttl_right">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_01.png" alt="">
                </div>
              </div>
              <div class="flow-circle__inner_right_box_top_txt">
                <p>
                  当初立てていた目標値に達成した場合治療計画は終了となりますが、ご希望によりより高いゴールへ向かうためのお手伝いをします。
                </p>
              </div>
            </div>
          </div>
          <div class="flow-circle__inner_right_box more">
            <div class="flow-circle__inner_right_box_top">
              <div class="flow-circle__inner_right_box_top_ttl">
                <div class="flow-circle__inner_right_box_top_ttl_left">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_07.png" alt="">
                  <p>フォローアップ</p>
                </div>
                <div class="flow-circle__inner_right_box_top_ttl_right">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_01.png" alt="">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_02.png" alt="">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_03.png" alt="">
                </div>
              </div>
              <div class="flow-circle__inner_right_box_top_txt">
                <p>
                  人の体や運動機能は日々、変化します。<br>
                  また治療に戻らなくても良いように、私たちは、小さな変化もキャッチアップし、対処していきます。
                </p>
              </div>
              <div class="flow-circle__inner_right_box_top_logo">
                <p>関連施設</p>
                <img src="<?php echo $rootDir ?>/images/flow/flow_logo_01.png" alt="">
                <img class="small" src="<?php echo $rootDir ?>/images/flow/flow_logo_03.png" alt="">
                <img class="small" src="<?php echo $rootDir ?>/images/flow/flow_logo_02.png" alt="">
              </div>
            </div>
          </div>
          <div id="last_item" class="flow-circle__inner_right_box more">
            <div class="flow-circle__inner_right_box_top">
              <div class="flow-circle__inner_right_box_top_ttl">
                <div class="flow-circle__inner_right_box_top_ttl_left">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_08.svg" alt="">
                  <p>運動の日常化</p>
                </div>
                <div class="flow-circle__inner_right_box_top_ttl_right">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_01.png" alt="">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_02.png" alt="">
                  <img src="<?php echo $rootDir ?>/images/flow/flow_person_03.png" alt="">
                </div>
              </div>
              <div id="txtArea" class="flow-circle__inner_right_box_top_txt">
                <p class="width">
                  私たちの目指すものは、人々が運動の必要性を感じ、<br>
                  人々の生活の中に常に運動があることです。<br>
                  それにより、人々が自分の足で人生の最後まで立ち、動き、楽しく生きられることを目指します。
                </p>
                <img src="<?php echo $rootDir ?>/images/flow/flow_img_07.jpg" alt="">
              </div>
              <div id="logoArea" class="flow-circle__inner_right_box_top_logo">
                <p>関連施設</p>
                <img src="<?php echo $rootDir ?>/images/flow/flow_logo_01.png" alt="">
                <img class="small" src="<?php echo $rootDir ?>/images/flow/flow_logo_03.png" alt="">
                <img class="small" src="<?php echo $rootDir ?>/images/flow/flow_logo_02.png" alt="">
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

<script>

const rightContents = document.getElementById("right");
const leftContents = document.getElementById("left");
const lastItem = document.getElementById("last_item");


function resizeWindow(){
  if (window.matchMedia('(max-width: 767px)').matches) {
    //スマホ処理
    leftContents.style.height = 'auto'
  } else if (window.matchMedia('(min-width:768px)').matches) {
    //PC処理
    let rightContentsHeight = rightContents.clientHeight
    let lastItemHeight = lastItem.clientHeight
    console.log(rightContentsHeight)
    leftContents.style.height = `${rightContentsHeight - lastItemHeight - 60}px`
  }
}

window.addEventListener('resize', resizeWindow);



</script>
