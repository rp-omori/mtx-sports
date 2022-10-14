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
          <p>診断</p>
        </div>
        <table class="contents-box_menu">
          <tbody class="contents-box_menu__inner">

          <?php $fields = (get_field('diagnose')); ?>

          <?php if ($fields) :
              foreach ((array)$fields  as $field) : ?>

                <tr class="contents-box_menu__inner_box">
                  <td class="contents-box_menu__inner_box_name">
                    <div class="flex">
                      <div class="flex_box">
                        <p><?php echo esc_html($field['treatment_name']); ?></p>
                      </div>
                    </div>
                  </td>

                <?php
                $fileldSec = ($field['treatment_detail']);
                if ($fileldSec) :
                    foreach ((array)$fileldSec as $field) :?>
                <?php $count = count($fileldSec); ?>

                      <?php
                        $fileldtir = ($field['treatment_set']);
                        if ($fileldtir) :
                            foreach ((array)$fileldtir as $field) : ?>
                      <?php $countSec = count($fileldtir); ?>

                            <td class="contents-box_menu__inner_box_minute">
                              <p><?php echo esc_html($field['treatment_times']); ?></p>
                            </td>
                            <td class="contents-box_menu__inner_box_price">
                              <p><?php echo esc_html($field['treatment_price']); ?></p>
                            </td>

                          </tr>

                      <?php
                          endforeach;
                      endif; ?>

                <?php
                    endforeach;
                endif; ?>

                <!-- </tr> -->

          <?php
              endforeach;
          endif;
          ?>

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
      <!-- <table class="contents-box_menu">
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
              <p>¥165,000</p>
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
              <p>¥330,000</p>
            </td>
          </tr>
        </tbody>
      </table> -->
      <!-- <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="4">
              <div class="flex">
                <div class="flex_box">
                  <p class="orange_tab">オープニング価格<br>（2022年内限定）</p>
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
              <p>¥1,100,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>2回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥1,540,000</p>
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
              <p>¥1,540,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>2回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥2,200,000</p>
            </td>
          </tr>
        </tbody>
      </table> -->
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">

        <?php $fields = (get_field('regenerative_medicine')); ?>

        <?php if ($fields) :
            foreach ((array)$fields  as $field) :
              $countIndex = 0;
              $rowCount = 0;
            foreach($fields[$countIndex]['treatment_detail'] as $index){
              $rowCount += count($index['treatment_set']);
            }
            ?>

              <tr class="contents-box_menu__inner_box">
                <td class="contents-box_menu__inner_box_name width" rowspan="<?php echo $rowCount?>">
                  <div class="flex">
                    <div class="flex_box">
                      <?php if($field['treatment_tab']): ?>
                        <p class="orange_tab">オープニング価格<br>（2022年内限定）</p>
                      <?php endif; ?>
                      <p><?php echo esc_html($field['treatment_name']); ?></p>
                    </div>
                    <?php if($field['treatment_point']): ?>
                      <p class="detail">肩・手・肘・股関節・膝・足関節・その他ブロック</p>
                    <?php endif; ?>
                  </div>
                </td>

              <?php
              $fileldSec = ($field['treatment_detail']);
              $countSec = count($fileldSec);
              if ($fileldSec) :
                  foreach ((array)$fileldSec as $field) :?>

                <td class="contents-box_menu__inner_box_part" rowspan="<?php echo $countSec?>">
                  <p><?php echo esc_html($field['treatment_part']); ?></p>
                </td>

                    <?php
                      $fileltir = ($field['treatment_set']);
                      $countTir = count($fileltir);
                      if ($fileltir) :
                          foreach ((array)$fileltir as $field) : ?>

                          <td class="contents-box_menu__inner_box_minute">
                            <p><?php echo esc_html($field['treatment_times']); ?></p>
                          </td>
                          <td class="contents-box_menu__inner_box_price">
                            <p><?php echo esc_html($field['treatment_price']); ?></p>
                          </td>

                        </tr>

                    <?php
                        endforeach;
                    endif; ?>

              <?php
                  endforeach;
              endif; ?>

        <?php
          $countIndex++;
            endforeach;
        endif;
        ?>

        </tbody>
      </table>
      <!-- <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="4">
              <div class="flex">
                <div class="flex_box">
                  <p class="orange_tab">オープニング価格<br>（2022年内限定）</p>
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
              <p>¥66,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>3回セット</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥165,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_part" rowspan="2">
              <p>2関節 10ml (5ml×2)</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥110,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>3回セット</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥308,000</p>
            </td>
          </tr>
        </tbody>
      </table> -->
      <!-- <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="4">
              <div class="flex">
                <div class="flex_box">
                  <p class="orange_tab">オープニング価格<br>（2022年内限定）</p>
                  <p>ハイドロリリース <br>＋ 培養上清液治療</p>
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
              <p>¥16,500</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>3ml</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥44,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>5ml</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥66,000</p>
            </td>
          </tr>
        </tbody>
      </table> -->
      <!-- <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name width" rowspan="4">
              <div class="flex">
                <div class="flex_box">
                  <p class="orange_tab">オープニング価格<br>（2022年内限定）</p>
                  <p>体外衝撃波（集束型）<br>＋ 培養上清液治療</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part" rowspan="2">
              <p>1関節　5ml</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥77,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>3回セット</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥192,500</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_part" rowspan="2">
              <p>2関節 10ml (5ml×2)</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥121,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute">
              <p>3回セット</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥335,500</p>
            </td>
          </tr>
        </tbody>
      </table> -->
      <div class="contents-box_caution">
        <p>※オープニング価格（2022年内限定）は年内まで。</p>
      </div>
      <a href="<?php echo esc_url(home_url('services/#service')); ?>" class="contents-box_btn">
        <img src="<?php echo $rootDir ?>/images/price/price_btn.png" alt="">
        <p>再生医療についてはこちら</p>
      </a>
    </div>

    <!-- <div class="contents-box">
      <div class="contents-box_cat">
        <p>運動療法</p>
      </div>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name more">
              <div class="flex">
                <div class="flex_box">
                  <p>DDシステム（ddrobotec®）</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_exp">
              <p>※治療と組み合わせてのご料金となります</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name more">
              <div class="flex">
                <div class="flex_box">
                  <p>D-Wall　（Technology社）</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_exp">
              <p>※治療と組み合わせてのご料金となります</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name more" rowspan="3">
              <div class="flex">
                <div class="flex_box">
                  <p>MTXアカデミー</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_exp">
              <p>MTXアカデミー　Practice（実践）</p>
              <p>※治療と組み合わせてのご料金となります</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_exp">
              <p>MTXアカデミー　Strength（強化）</p>
              <p>※治療と組み合わせてのご料金となります</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_exp">
              <p>HAL</p>
              <p>※治療と組み合わせてのご料金となります</p>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="contents-box_caution">
        <p>　</p>
      </div>
      <a href="<?php echo esc_url(home_url('services/#exercise')); ?>" class="contents-box_btn">
        <img src="<?php echo $rootDir ?>/images/price/price_btn.png" alt="">
        <p>運動療法についてはこちら</p>
      </a>
    </div> -->

    <!-- <div class="contents-box">
      <div class="contents-box_cat">
        <p>物理療法</p>
      </div>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name" rowspan="3">
              <div class="flex">
                <div class="flex_box">
                  <p>集束型 体外衝撃波(BTL-6000-Focus）</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_minute"><p>1回</p></td>
            <td class="contents-box_menu__inner_box_price"><p>¥16,500</p></td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute"><p>3回セット</p></td>
            <td class="contents-box_menu__inner_box_price"><p>¥44,000</p></td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_minute"><p>5回セット</p></td>
            <td class="contents-box_menu__inner_box_price"><p>¥66,000</p></td>
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
                ※治療と組み合わせてのご料金となります
              </p>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="contents-box_caution">
        <p>　</p>
      </div>
      <a href="<?php echo esc_url(home_url('services/#physical')); ?>" class="contents-box_btn">
        <img src="<?php echo $rootDir ?>/images/price/price_btn.png" alt="">
        <p>物理療法についてはこちら</p>
      </a>
    </div> -->

    <!-- <div class="contents-box">
      <div class="contents-box_cat">
        <p>その他</p>
      </div>
      <table class="contents-box_menu">
        <tbody class="contents-box_menu__inner">
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name" rowspan="1">
              <div class="flex">
                <div class="flex_box">
                  <p>サイレントマニピュレーション<br>（ブロック＋手技）</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part small">
              <p>肩</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1回</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥33,000</p>
            </td>
          </tr>
          <tr class="contents-box_menu__inner_box">
            <td class="contents-box_menu__inner_box_name" rowspan="1">
              <div class="flex">
                <div class="flex_box">
                  <p>幹細胞培養上清液 点滴</p>
                </div>
              </div>
            </td>
            <td class="contents-box_menu__inner_box_part small">
              <p>-</p>
            </td>
            <td class="contents-box_menu__inner_box_minute">
              <p>1ml</p>
            </td>
            <td class="contents-box_menu__inner_box_price">
              <p>¥33,000</p>
            </td>
          </tr>
        </tbody>
      </table>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="contents-box_btn sp_btn center">
        <p>その他オプション等については、<br>お問い合わせください。</p>
      </a>
    </div> -->

  </div>

  <!-- footer手前の２つ並びのメニュー -->
  <?php get_template_part('component/footer__other'); ?>

</main>

<?php get_footer(); ?>
