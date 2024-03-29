<?php
require 'config.php';
/*
 * 初期設定
 */
// アイキャッチ画像をサポート
add_theme_support( 'post-thumbnails' );
// <p> タグ、 <br /> タグの自動挿入無効化
remove_filter('the_title', 'wpautop'); // タイトル蘭
$url = $_SERVER['REQUEST_URI'];
$is_contact = strstr($url, 'contact');
if ($is_contact == true) {
  remove_filter('the_content', 'wpautop'); // 本文欄
}
remove_filter('comment_text', 'wpautop'); // コメント欄
remove_filter('the_excerpt', 'wpautop'); // 抜粋欄
// wp_headから不要なものを削除
remove_action('wp_head', 'wp_generator'); //WPのバージョン情報
remove_action('wp_head', 'rsd_link'); //RSDリンク
remove_action('wp_head', 'index_rel_link' ); //linkタグ
remove_action('wp_head', 'wlwmanifest_link'); //Windows Live Writerサポート
remove_action('wp_head', 'wp_shortlink_wp_head'); //短縮URL
remove_action('wp_head', 'rel_canonical'); //canonicalタグ
remove_action('wp_head', 'parent_post_rel_link', 10, 0 );
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// 投稿ページでアイキャッチ画像を設定
add_theme_support( 'post-thumbnails',array('post') );
// ウィジェットの機能を追加
add_theme_support('widgets');
// メニューから非表示
function remove_menus(){
    remove_menu_page('edit-comments.php'); // コメント
}
add_action('admin_menu', 'remove_menus');
// 更新通知を管理者権限のみに表示
function update_nag_admin_only() {
  if (!current_user_can('administrator')) {
    remove_action('admin_notices', 'update_nag', 3);
  }
}
add_action('admin_init', 'update_nag_admin_only');
// 一覧ページにアイキャッチの追加
// 列の追加
if (!function_exists('add_custom_post_columns')) {
  function add_custom_post_columns($columns) {
    $columns['slug'] = "スラッグ";
    $columns['thumbnail'] = 'アイキャッチ画像';
    echo '<style>
        .fixed .column-categories, .fixed .column-rel, .fixed .column-response, .fixed .column-role, .fixed .column-tags {width: 6%;}
        .fixed .column-thumbnail {width: 120px;}
        .fixed .column-slug {width: 8%;}
        .fixed .column-seotitle {width: 8%;}
        .fixed .column-seodesc {width: 14%;}
      </style>';
    unset($columns['comments']);
    return $columns;
  }
}
if (!function_exists('add_custom_page_column')) {
  function add_custom_page_column($columns) {
    $columns['slug'] = "スラッグ";
    echo '<style>
        .fixed .column-slug {width: 8%;}
        .fixed .column-seotitle {width: 8%;}
        .fixed .column-seodesc {width: 15%;}
      </style>';
    unset($columns['comments']);
    unset($columns['categories']);
    unset($columns['tags']);
    return $columns;
  }
}
add_filter('manage_pages_columns', 'add_custom_page_column');
add_filter('manage_posts_columns', 'add_custom_post_columns');
// 内容の表示
if (!function_exists('output_custom_columns_for_thumb')) {
  function output_custom_columns_for_thumb($column_name, $post_id) {
    if ('thumbnail' === $column_name) {
      $thumb_img = get_the_post_thumbnail($post_id, array(120,120), 'thumbnail');
      echo $thumb_img ?: '-';
    }
    if( $column_name == 'slug' ) {
        $post = get_post($post_id);
        $slug = $post->post_name;
        echo esc_attr($slug);
    }
  }
}
add_action('manage_pages_custom_column', 'output_custom_columns_for_thumb', 10, 2);
add_action('manage_posts_custom_column', 'output_custom_columns_for_thumb', 10, 2);

// the_archive_title 余計な文字を削除
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('',false);
  } elseif (is_tag()) {
    $title = single_tag_title('',false);
  } elseif (is_tax()) {
    $title = single_term_title('',false);
  } elseif (is_post_type_archive() ){
    $title = post_type_archive_title('',false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：'.esc_html( get_search_query(false) );
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {

  }
  return $title;
});



// パンくずリスト自動生成
function output_breadcrumb(){
  $home = '<li><a href="'.get_bloginfo('url').'">TOP</a></li><span>&gt;&#160;</span>';
  echo '<ul class="breadcrumb">';

  // トップページの場合
  if ( is_front_page() ) {

  // カテゴリーページの場合
  } else if ( is_category() ) {
  $cat = get_queried_object();
  $cat_id = $cat->parent;
  $cat_list = array();
  while($cat_id != 0) {
    $cat = get_category( $cat_id );
    $cat_link = get_category_link( $cat_id );
    array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li><span>&gt;&#160;</span>' );
    $cat_id = $cat->parent;
  }
  echo $home;
  foreach ($cat_list as $value) {
    echo $value;
  }
  the_archive_title('<li>', '</li>');

  // アーカイブページの場合
  } else if ( is_archive() ) {
  echo $home;
  the_archive_title('<li>', '</li>');

  // 投稿ページの場合
  } else if ( is_single() ) {
  $cat = get_the_category();
  if( isset( $cat[0]->cat_ID ) ) $cat_id = $cat[0]->cat_ID;
  $cat_list = array();
  while( $cat_id != 0 ) {
    $cat = get_category( $cat_id );
    $cat_link = get_category_link( $cat_id );
    array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li><span>&gt;&#160;</span>' );
    $cat_id = $cat->parent;
  }
  echo $home;
  foreach($cat_list as $value) {
    echo $value;
  }
  $cp_label = esc_html(get_post_type_object(get_post_type())->label);
  $cp_name = esc_html(get_post_type_object(get_post_type())->name);
  echo '<li><a href="' . esc_url(home_url($cp_name)) . '">' . $cp_label . '</a></li><span>&gt;&#160;</span>';
  the_title('<li>', '</li>');

  // 固定ページの場合
} else if ( is_page() ) {
  echo $home;
  the_title('<li>', '</li>');

  // 検索結果の場合
  } else if ( is_search() ) {
  echo $home;
  echo '<li>「'.get_search_query().'」の検索結果</li>';

  // 404ページの場合
  } else if ( is_404() ) {
  echo $home;
  echo '<li>ページが見つかりません</li>';
  }
  echo '</ul>';
}

//サイトのパスを取得するショートコード
function homePathcode() {
  return get_home_url();
  }
add_shortcode('homePath', 'homePathcode');

//テーマのテーマフォルダのパスを取得するショートコード
function imgPathcode() {
return get_template_directory_uri();
}
add_shortcode('imgPath', 'imgPathcode');

//ウェブサイトの投稿や固定ページが更新されるたびにsitemap.xmlを更新する
function update_sitemap() {

  //トップページ 新着記事も更新されるので現在時刻にする
  $url = esc_url(home_url());
  $lastmod = date('Y-m-d\TH:i:s\Z');
  $xml = "<url>
    <loc>{$url}</loc>
    <lastmod>{$lastmod}</lastmod>
  </url>";

  //固定ページと記事ページを取得
  $posts_array = get_posts(array(
    'post_type' => array("page", "post", "blog", "prices", "services", "medicaldetail", "news", "column"),
    'posts_per_page' => -1,
    'meta_query' => array(
      array(
        'key' => 'noindex',
        'compare' => 'NOT EXISTS',
      )
    )
  ));
  if($posts_array){
    foreach($posts_array as $post){
      setup_postdata($post);
      $url = get_the_permalink($post->ID);
      $lastmod = date('Y-m-d\TH:i:s\Z', get_post_timestamp($post, "modified"));
      $xml .= "<url>
        <loc>{$url}</loc>
        <lastmod>{$lastmod}</lastmod>
      </url>";
    }
    wp_reset_postdata();
  }

  //カテゴリー
  $category_ids = get_terms("category", array("fields" => "ids"));
  foreach($category_ids as $category_id){
    $xml .= "<url>
      <loc>".get_category_link($category_id)."</loc>
    </url>";
  }

  //最終的なxmlデータを整形
  $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?><urlset
  xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">{$xml}
  </urlset>";

  //ファイルを書き出し
  file_put_contents(get_theme_file_path("sitemap.xml"), $xml, LOCK_EX);
}
add_action('save_post', 'update_sitemap');
