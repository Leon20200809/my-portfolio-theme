<?php
// 定数定義
$stylesheet_dir = get_stylesheet_directory_uri();
$file_dir = get_template_directory_uri();

// CSS・JSファイルの読み込み
function my_enqueue_styles(){
    global $stylesheet_dir;
    wp_enqueue_style('reset', $stylesheet_dir . '/css/reset.css', array());
    wp_enqueue_style('swiper', $stylesheet_dir . '/js/swiper/swiper-bundle.min.css', array('reset'));
    wp_enqueue_style('style', $stylesheet_dir . '/style.css', array('reset', 'swiper'));

    wp_enqueue_script('jquery');
    wp_enqueue_script('inview', $stylesheet_dir . '/js/jquery.inview.min.js', array('jquery'));
    wp_enqueue_script('swiper', $stylesheet_dir . '/js/swiper/swiper-bundle.min.js', array('jquery', 'inview'));
    wp_enqueue_script('main', $stylesheet_dir . '/js/main.js', array('jquery', 'inview', 'swiper'));
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
} 

// 投稿ページのサムネイル画像 有効化
add_theme_support('post-thumbnails');//両方

// カスタム投稿の追加
function create_custom_post_type() {
    register_post_type('works', [
    'labels' => [
        'name' => '制作実績',
        'singular_name' => '制作実績',
    ],
    'public' => true, // 管理画面だけではなくサイト上でも表示
    'has_archive' => true, // アーカイブページの有無
    'menu_position' => 5, // メニューの位置
    'menu_icon' => 'dashicons-portfolio',
    'supports' => ['title', 'editor', 'thumbnail'],
    'rewrite' => ['slug' => 'works', 'with_front' => false],
    'show_in_rest' => true, // ブロックエディタ対応
    ]);
}
add_action('init', 'create_custom_post_type');


// カスタムフィールドの追加（制作物URL）
function add_works_custom_fields() {
    add_meta_box(
        'works_url_box',          // ID
        '模写サイトのURL',         // タイトル
        'display_works_url_box',  // コールバック関数
        'works',                  // 投稿タイプ
        'normal', 'default'
    );
}
add_action('add_meta_boxes', 'add_works_custom_fields');

function display_works_url_box($post) {
    $works_url = get_post_meta($post->ID, 'works_url', true);
    echo '<label for="works_url">模写サイトのURLを入力：</label>';
    echo '<input type="text" name="works_url" id="works_url" value="' . esc_attr($works_url) . '" style="width:100%">';
}

function save_works_custom_fields($post_id) {
    if (array_key_exists('works_url', $_POST)) {
    update_post_meta($post_id, 'works_url', sanitize_text_field($_POST['works_url']));
    }
}
add_action('save_post', 'save_works_custom_fields');
    

// ナビメニューの登録
function mytheme_setup() {
    register_nav_menus([
        'header-menu' => 'ヘッダーメニュー',
    ]); 

    // テーマでタイトルタグを自動生成
    // タイトルタグのサポートを追加
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mytheme_setup');
