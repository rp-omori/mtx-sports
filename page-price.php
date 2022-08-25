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

    <div class="contents-box">
      <div class="contents-box_cat">
        <p>診療</p>
      </div>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name">
              <div class="flex">
                <div class="flex_box">
                  <p>初診</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_minute"><p>20分</p></td>
            <td class="contents-box_menu__inner_box_price"><p>¥5,000</p></td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name">
              <div class="flex">
                <div class="flex_box">
                  <p>2回目以降</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_minute"><p>10分</p></td>
            <td class="contents-box_menu__inner_box_price"><p>¥3,000</p></td>
          </tr>
        </tbody>
      </table>
      <div class="contents-box_caution">
        <p>※治療を行なった場合は、診察料を頂戴しません。</p>
      </div>
    </div>

    <div class="contents-box">
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
        <p>再生医療</p>
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
