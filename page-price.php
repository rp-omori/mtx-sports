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

  <!-- コンテンツ部分 -->
  <div class="price-contents">

<<<<<<< Updated upstream
    <div class="contents-box">
=======
  <!-- onlineshop一覧の取得 -->
<?php


$args = array(
    'post_type' => 'prices',
    'order' => 'ASC',
    'posts_per_page' => -1,
    'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
);

$WP_post = new WP_Query($args);

// var_dump($WP_post);

if($WP_post -> have_posts()){
  while($WP_post -> have_posts()) {
    foreach( $WP_post -> posts as $WP_posts ){
      $post_data = [];
      $WP_post->the_post();
      $post_data['treatment']  =  get_the_title();
      $post_id = get_the_ID();
      $post_data['data'] = [];
      $object = new stdClass();
      if(have_rows('treatment')){
        while(have_rows('treatment')) {
          while(the_row()){
            $treatment_name = get_sub_field("treatment_name");
            $treatment_tab = get_sub_field("treatment_tab");
            $treatment_point = get_sub_field("treatment_point");
            $treatment_detail = get_sub_field("treatment_detail");
            $object -> name = $treatment_name;
            $object -> tab = $treatment_tab;
            $object -> point = $treatment_point;
            $object -> detail = $treatment_detail;
              foreach( $treatment_detail as $value){
                $treatment_part = $value['treatment_part'];
                $treatment_set = $value['treatment_set'];
                $total = $value['total'];
                $object -> part = $treatment_part;
                $n=0;
                foreach( $treatment_set as $value){
                  $treatment_times = $value['treatment_times'];
                  $treatment_price = $value['treatment_price'];
                  ++$n;
                }
              }
              $object -> total = $n;
              $arr_obj = (array) $object;
              $post_data['data'][] = $arr_obj;
          }
        }
      }
      $my_post['data'][] = $post_data;
    }
  }
  $WP_post_json = json_encode($my_post);
}



?>

  <div id="price-contents" class="price-contents">

    <!-- <div class="contents-box">
>>>>>>> Stashed changes
        <div class="contents-box_cat">
          <p>診断</p>
        </div>
        <table class="contents-box_menu">
          <tbody class="contents-box_menu__inner">
            <?php if(have_rows('treatment',62)): ?>
            <?php while(have_rows('treatment',62)): the_row(); ?>
            <tr class="contents-box_menu__inner_box">
              <td class="contents-box_menu__inner_box_name">
                <div class="flex">
                  <div class="flex_box">
                    <!-- <p>初診</p> -->
                    <p><?php the_sub_field("treatment_name") ?></p>
                  </div>
                </div>
              </td>
              <?php if(have_rows('treatment_detail')): ?>
                <?php while(have_rows('treatment_detail')): the_row(); ?>
                <?php if(have_rows('treatment_set')): ?>
                  <?php while(have_rows('treatment_set')): the_row(); ?>
                        <td class="contents-box_menu__inner_box_minute">
                          <!-- <p>20分</p> -->
                          <p><?php the_sub_field("treatment_times") ?></p>
                        </td>
                        <td class="contents-box_menu__inner_box_price">
                          <!-- <p>¥5,000</p> -->
                          <p><?php the_sub_field("treatment_price") ?></p>
                        </td>
                    <?php endwhile; ?>
                  <?php endif;?>
                <?php endwhile; ?>
              <?php endif;?>
            </tr>
            <?php endwhile; ?>
            <?php endif;?>
          </tbody>
        </table>
        <div class="contents-box_caution">
          <p>※治療を行なった場合は、診察料を頂戴しません。</p>
        </div>
      <?php wp_reset_postdata(); ?>
<<<<<<< Updated upstream
    </div>

    <div class="contents-box">
=======
    </div> -->

    <!-- <div class="contents-box">
>>>>>>> Stashed changes
      <div class="contents-box_cat">
        <p>再生医療</p>
      </div>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="2">
              <div class="flex">
                <div class="flex_box">
                  <p>PRP治療</p>
                </div>
                <p class="detail">肩・手・肘・股関節・膝・足関節・その他ブロック</p>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part" rowspan="1">
              <p>1部位</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥150,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_part" rowspan="1">
              <p>2部位</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥300,000</p>
            </td>
          </tr>
        </tbody>
      </table>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="4">
              <div class="flex">
                <div class="flex_box">
                  <p class="orange_tab">オープニング価格</p>
                  <p>脂肪幹細胞治療（ASC）</p>
                </div>
                <p class="detail">肩・手・肘・股関節・膝・足関節・その他ブロック</p>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part" rowspan="2">
              <p>1関節 3V(1,500万cell）</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥1,000,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>2回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥1,400,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_part" rowspan="2">
              <p>2関節 6V(3,000万cell）</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥1,400,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>2回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥2,000,000</p>
            </td>
          </tr>
        </tbody>
      </table>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="4">
              <div class="flex">
                <div class="flex_box">
                  <p class="orange_tab">オープニング価格</p>
                  <p>培養上清液治療（関節内）</p>
                </div>
                <p class="detail">肩・手・肘・股関節・膝・足関節・その他ブロック</p>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part" rowspan="2">
              <p>1関節　5ml　</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥60,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>3回セット</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥150,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_part" rowspan="2">
              <p>22関節 10ml (5ml×2)</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥100,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>3回セット</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥280,000</p>
            </td>
          </tr>
        </tbody>
      </table>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="4">
              <div class="flex">
                <div class="flex_box">
                  <p class="orange_tab">オープニング価格</p>
                  <p>ハイドロリリース</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part" rowspan="4">
              <p>培養上清液1ml～5ml</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1ml</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥15,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>3ml</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥40,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>5ml</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥60,000</p>
            </td>
          </tr>
        </tbody>
      </table>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="2">
              <div class="flex">
                <div class="flex_box">
                  <p class="orange_tab">オープニング価格</p>
                  <p>体外衝撃波（収束型）＋ 培養上清液治療</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part" rowspan="1">
              <p>-</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>※上清液＋衝撃波1回から、− ¥5,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_part" rowspan="1">
              <p>-</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>3回セット</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>※上清液＋衝撃波3回から、− ¥15,000</p>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="contents-box_caution">
        <p>※オープニング価格は年内まで。</p>
      </div>
      <a href="" class="contents-box_btn">
        <img src="<?php echo $rootDir ?>/images/price/price_btn.png" alt="">
        <p>再生医療についてはこちら</p>
      </a>
    </div>

    <div class="contents-box">
      <div class="contents-box_cat">
        <p>運動療法</p>
      </div>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name">
              <div class="flex">
                <div class="flex_box">
                  <p>DDシステム</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_exp">
              <p>※セットでのご提案がベースとなります</p>
            </td>
            <!-- <td class="contents-box_menu__inner_box_price width" rowspan="4"><p>※セットでのご提案がベースとなります</p></td> -->
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name">
              <div class="flex">
                <div class="flex_box">
                  <p>D-Wall</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_exp">
              <p>※セットでのご提案がベースとなります</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name" rowspan="2">
              <div class="flex">
                <div class="flex_box">
                  <p>MTXアカデミー</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_exp">
              <p>トレーナーによる強化・トレーニング</p>
              <p>※セットでのご提案がベースとなります</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_exp">
              <p>HAL</p>
              <p>※セットでのご提案がベースとなります</p>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="contents-box_caution">
        <p>　</p>
      </div>
      <a href="" class="contents-box_btn">
        <img src="<?php echo $rootDir ?>/images/price/price_btn.png" alt="">
        <p>運動療法についてはこちら</p>
      </a>
    </div>

    <div class="contents-box">
      <div class="contents-box_cat">
        <p>物理療法</p>
      </div>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name" rowspan="3">
              <div class="flex">
                <div class="flex_box">
                  <p>体外衝撃波(収束型）</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_minute"><p>1回</p></td>
            <td class="contents-box_menu__inner_box_price"><p>¥15,000</p></td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute"><p>3回セット</p></td>
            <td class="contents-box_menu__inner_box_price"><p>¥40,000</p></td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute"><p>5回セット</p></td>
            <td class="contents-box_menu__inner_box_price"><p>¥60,000</p></td>
          </tr>
        </tbody>
      </table>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name">
              <div class="flex">
                <div class="flex_box">
                  <p>MTXアカデミー</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_exp">
              <p>
                新治療器と手技を併せたMTX独自の治療（LIPUS等）<br>
                ※治療法により異なります
              </p>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="contents-box_caution">
        <p>　</p>
      </div>
      <a href="" class="contents-box_btn">
        <img src="<?php echo $rootDir ?>/images/price/price_btn.png" alt="">
        <p>物理療法についてはこちら</p>
      </a>
    </div>

    <div class="contents-box">
      <div class="contents-box_cat">
        <p>その他</p>
      </div>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="1">
              <div class="flex">
                <div class="flex_box">
                  <p>サイレントマニピュレーション（ブロック＋手技）</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part">
              <p>肩</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥150,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="1">
              <div class="flex">
                <div class="flex_box">
                  <p>ボツリヌス注射（脳梗塞などの痙縮）</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part">
              <p>1部位</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>※仕入れ価格次第で決定</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="1">
              <div class="flex">
                <div class="flex_box">
                  <p>幹細胞培養上清液 点滴</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part">
              <p>-</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1ml</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥30,000</p>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="contents-box_caution">
        <p>※オープニング価格は年内まで。</p>
      </div>
      <a href="" class="contents-box_btn sp_btn">
        <p>その他オプション等については、お問い合わせください。</p>
      </a>
    </div>

  </div>

  <!-- footer手前の２つ並びのメニュー -->
  <?php get_template_part('component/footer__other'); ?>

</main>

<?php get_footer(); ?>
<<<<<<< Updated upstream
=======



<script>

  $(function(){


    /*
    * @画面を読み込んだら処理開始
    */
    window.addEventListener('load', function () {
      //下で定義している処理をここで開始
      init()
    })


    // データ取得
    const getWPData = () => {
      const data = JSON.parse('<?php echo $WP_post_json; ?>');
      return data;
    }

    // const getWPData = () => {
    //   const data = JSON.parse('<?php echo $WP_post_json; ?>').slice();
    //   data.sort( (a,b) => {
    //     if(a.order < b.order){
    //       return -1;
    //     } else {
    //       return 1;
    //     }
    //   });
    //   console.log(data);
    //   return data;
    // }


    // 初期化
    const init = () => {

      const priceData = getWPData()
      const lengthArr = []
      const priceContents = document.getElementById('price-contents')
      console.log(priceData)


      // const getLength = () =>{
      //   priceData.
      // }

      const createContents = () => {

        let priceList = ''

        priceData.data.forEach(arrContents => {

          priceList += `
              <div id="contents-box" class="contents-box">
                <div class="contents-box_cat">
                  <p>${arrContents.treatment}</p>
                </div>
          `

          arrContents.data.forEach(contentsData => {

            priceList+=`
              <table class="contents-box_menu">
                <tbody class="contents-box_menu__inner">
                  <tr class="contents-box_menu__inner_box">
            `

            if(arrContents.treatment === "再生医療"){

                priceList+=`
                  <td class="contents-box_menu__inner_box_name width" rowspan="${contentsData.total * contentsData.detail.length}">
                    <div class="flex">
                      <div class="flex_box">
                `

                if(contentsData.tab){
                  priceList+=`
                    <p class="orange_tab">オープニング価格</p>
                  `
                }

                priceList+=`
                    <p>${contentsData.name}</p>
                  </div>
                `

                if(contentsData.point){
                  priceList+=`
                    <p class="detail">肩・手・肘・股関節・膝・足関節・その他ブロック</p>
                  `
                }

                priceList+=`
                    </div>
                  </td>
                `

            } else if (arrContents.treatment === "運動療法") {
                priceList+=`
                  <td class="contents-box_menu__inner_box_name" rowspan="${contentsData.total * contentsData.detail.length}">
                    <div class="flex">
                      <div class="flex_box">
                        <p>${contentsData.name}</p>
                      </div>
                    </div>
                  </td>
                `
            }
            else{
                priceList+=`
                  <td class="contents-box_menu__inner_box_name" rowspan="${contentsData.total * contentsData.detail.length}">
                    <div class="flex">
                      <div class="flex_box">
                        <p>${contentsData.name}</p>
                      </div>
                    </div>
                  </td>
                `
            }

            contentsData.detail.forEach(contentsDetail => {

              if(contentsDetail.treatment_part !== ''){
                  priceList += `
                    <td class="contents-box_menu__inner_box_part" rowspan="${contentsDetail.treatment_set.length}">
                      <p>${contentsDetail.treatment_part}</p>
                    </td>
                  `
              }


              contentsDetail.treatment_set.forEach(contentsSet => {
                // console.log(contentsSet)

                if(contentsDetail.treatment_part !== '') {
                  priceList+=`
                      <td class="contents-box_menu__inner_box_minute">
                        <p>${contentsSet.treatment_times}</p>
                      </td>
                      <td class="contents-box_menu__inner_box_price">
                        <p>${contentsSet.treatment_price}</p>
                      </td>
                    </tr>
                  `
                } else if(contentsDetail.treatment_part === '' && contentsSet.treatment_price === ''){
                  priceList+=`
                    <td class="contents-box_menu__inner_box_exp">
                      <p>${contentsSet.treatment_times}</p>
                    </td>
                  </tr>
                  `
                } else {
                  priceList+=`
                    <td class="contents-box_menu__inner_box_minute">
                      <p>${contentsSet.treatment_times}</p>
                    </td>
                    <td class="contents-box_menu__inner_box_price">
                      <p>${contentsSet.treatment_price}</p>
                    </td>
                  `
                }


              })

            })

            if(contentsData.detail.treatment_part !== ''){
              priceList+=`
                  </tbody>
                </table>
              `
            } else{
              priceList+=`
                    </tr>
                  </tbody>
                </table>
              `
            }

          })

          priceList += `
            </div>
          `

          priceList += `
            <div id="contents-box_sub" class="contents-box_sub">
              <div class="contents-box_sub_caution">
                <p>※治療を行なった場合は、診察料を頂戴しません。</p>
              </div>
              <a href="" class="contents-box_sub_btn">
                  <img src="<?php echo $rootDir ?>/images/price/price_btn.png" alt="">
                  <p>再生医療についてはこちら</p>
              </a>
            </div>
          `

        })


        // console.log(priceList)

        priceContents.insertAdjacentHTML('afterbegin', priceList)


      }

      // getLength()
      createContents()

    }


  })

</script>
>>>>>>> Stashed changes
