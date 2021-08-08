<?php
/**
 * Japn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Japn
 */
$job_list = array(
	'営業系' => array(
		'営業（法人・個人）',
		'ルート営業、代理店営業',
		'内勤営業、カウンターセールス',
		'IT系・システム営業',
		'⼈材コーディネーター、キャリアカウンセラー',
		'営業マネージャー',
		'Webマーケティング、リサーチ、分析',
		'テレマーケティング、アポインター',
		'その他、営業系関連職',
	), 
	'事務系' => array(
		'一般事務、営業事務、秘書、受付',
		'広報、PR',
		'総務',
		'人事・労務、採用',
		'経理、財務',
		'貿易、物流、購買',
		'その他、事務系関連職',
	), 
	'販売・サービス系' => array(
		'販売・接客スタッフ',
		'店長・店長候補',
		'ホールスタッフ',
		'調理師、シェフ、調理補助',
		'スーパーバイザー、エリアマネジャー',
		'その他、販売・サービス系関連職',
	),
	'美容・ブライダル・旅行系' => array(
		'エステティシャン',
		'美容部員',
		'トリマー',
		'ネイリスト、アイリスト',
		'理容師、美容師',
		'ウエディングプランナー',
		'コーディネーター、プランナー（冠婚葬祭）',
		'旅⾏コーディネーター、添乗員',
		'カウンタースタッフ、予約⼿配、オペレーター',
		'ホテルスタッフ',
		'その他、美容・ブライダル・旅行系関連職',
	), 
	'専門サービス系' => array(
		'保育⼠・幼稚園教諭', 
		'児童相談員',
		'介護スタッフ・ヘルパー',
		'福祉事業責任者・施設⻑',
		'ケアマネジャー（介護⽀援専⾨員）',
		'⽣活相談員・⽣活⽀援員',
		'管理栄養⼠・栄養⼠・フードコーディネーター',
		'看護師、准看護師',
		'⻭科衛⽣⼠',
		'医療事務',
		'講師、インストラクター',
		'教室長・校長',
		'スポーツインストラクター・トレーナー',
		'教務事務',
		'通訳・翻訳',
		'通訳・翻訳',
		'その他、専門サービス系関連職',
	), 
	'IT・エンジニア系' => array(
		'システム開発（Web・オープン系）',
		'システム開発（汎⽤機系）',
		'システム開発（組み込み・制御系）',
		'パッケージソフト・ミドルウェア開発',
		'システムコンサルタント、プリセールス',
		'インフラエンジニア（設計・構築）',
		'インフラエンジニア（運用・保守）',
		'テクニカルサポート',
		'社内SE',
		'その他、IT・エンジニア系関連職',
	),
	'クリエイティブ' => array(
		'Webプロデューサー、ディレクター、プランナー',
		'Webデザイナー・コーダー',
		'Webショップ・ECサイト運営',
		'グラフィックデザイナー',
		'CGデザイナー',
		'ライター、編集、エディター',
		'DTPオペレーター',
		'アシスタントディレクター',
		'制作進行管理',
		'デザイナー（ファッション・雑貨）・パタンナー',
		'マーチャンダイザー、バイヤー',
		'スタイリスト、ヘアメイク',
		'デザイナー・コーディネーター（インテリア・空間・店舗）',
		'その他、クリエイティブ系関連職',
	), 
	'建築・⼟⽊系' => array(
		'設計',
		'施工管理',
		'CADオペレーター',
		'設備保全・メンテナンス',
		'その他、建築・⼟⽊系関連職',
	),
	'設備・交通・運輸系' => array(
		'施設・設備管理',
		'警備、清掃',
		'ドライバー',
		'倉庫作業・管理',
		'空港関連職',
		'その他、不動産・設備・運輸系関連職',
	),
	'専門職系' => array(
		'コンサルタント',
		'税理士・税理士補助',
		'弁護士・パラリーガル',
		'公務員',
		'通訳、翻訳',
		'団体職員',
		'学校法人職員',
		'その他、専門職系関連職',
	)
);
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'japn_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function japn_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Japn, use a find and replace
		 * to change 'japn' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'japn', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'japn' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'japn_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'japn_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function japn_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'japn_content_width', 640 );
}
add_action( 'after_setup_theme', 'japn_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function japn_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'japn' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'japn' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'japn_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function japn_scripts() {
	wp_enqueue_style( 'japn-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'japn-style', 'rtl', 'replace' );

	wp_enqueue_script( 'japn-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'japn_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

