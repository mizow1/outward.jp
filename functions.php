<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage outward
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'twentynineteen_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
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
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'twentynineteen' ),
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen' ),
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '1.1', true );
		wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '1.1', true );
	}

	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo twentynineteen_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'twentynineteen_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


// ページ最上位の親のID取得
function ps_get_root_page( $cur_post, $cnt = 0 ) {
  if ( $cnt > 100 ) { return false; }
  $cnt++;
  if ( $cur_post->post_parent == 0 ) {
          $root_page = $cur_post;
  } else {
          $root_page = ps_get_root_page( get_post( $cur_post->post_parent ), $cnt );
  }
  return $root_page;
}


// 固定ページ内の画像URLをショートコード化
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
return get_bloginfo('url');
}
add_shortcode('tdir', 'tmp_dir');
function tmp_dir() {
return get_template_directory_uri();
}


//パーツ読み込みをショートコード化
function my_php_Include($params = array()) {
 extract(shortcode_atts(array('file' => 'default'), $params));
 ob_start();
 include(STYLESHEETPATH . "/$file.php");
 return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');


//メールアドレス確認用
add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
function wpcf7_text_validation_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){
            $target_name = $matches[1];
            if ($_POST[$name] != $_POST[$target_name]) {
                if (method_exists($result, 'invalidate')) {
                    $result->invalidate( $tag,"※確認用のメールアドレスが一致していません");
                } else {
                    $result['valid'] = false;
                    $result['reason'][$name] = '※確認用のメールアドレスが一致していません';
                }
            }
        }
    }
    return $result;
}


// 生成画像サイズ追加
add_image_size('custom-image', 600, 9999);


//ヘッダー整理
// RSSフィード出力を削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// スタイルシートを削除します
remove_action('wp_head', 'wp_print_styles', 8);
// 絵文字変換スクリプトとスタイルを削除
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
// 「wp-json」を削除
remove_action('wp_head','rest_output_link_wp_head');
// リンク情報「EditURI」を削除
remove_action('wp_head', 'rsd_link');
// リンク情報「wlwmanifest」を削除
remove_action('wp_head', 'wlwmanifest_link');
// WordPressのバージョン情報を削除
remove_action('wp_head', 'wp_generator');
// リンク情報「prev」「next」を削除
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// リンク情報「canonical」を削除
remove_action('wp_head', 'rel_canonical');
// リンク情報「shortlink」を削除
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
// リンク情報「oEmbed」を削除します
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
// 「dns-prefetch」を削除
add_filter( 'emoji_svg_url', '__return_false' );


// 制作実績記事一覧表示順指定機能 start↓
add_filter( 'manage_works_posts_columns', 'add_works_order_column' );
function add_works_order_column( $columns ) {
  $columns['works_order'] = '表示順';
  return $columns;
}
add_action( 'manage_works_posts_custom_column' , 'show_works_order_column', 10, 2 );
function show_works_order_column( $column, $post_id ) {
  if ( $column == 'works_order' ) {
    $works_order = get_post_meta( $post_id, 'works_order', true );
    echo esc_html($works_order);
  }
}
add_filter( 'manage_edit-works_sortable_columns', 'add_works_order_sortable_column' );
function add_works_order_sortable_column( $sortable_columns ) {
  $sortable_columns['works_order'] = 'works_order';
  return $sortable_columns;
}
add_action( 'quick_edit_custom_box',  'add_works_order_quick_edit_fields', 10, 2 );
function add_works_order_quick_edit_fields( $column_name, $post_type ) {
  if ( $column_name != 'works_order' || $post_type != 'works' ) return;
  ?>
  <fieldset class="inline-edit-col-right">
    <div class="inline-edit-col">
      <label class="alignleft">
        <span class="title">表示順</span>
        <span class="input-text-wrap">
          <input type="number" name="works_order" class="text works_order" value="">
        </span>
      </label>
    </div>
  </fieldset>
  <?php
}
add_action( 'save_post_works', 'save_works_order_quick_edit_data' );
function save_works_order_quick_edit_data( $post_id ) {
  if ( ! isset( $_POST['works_order'] ) ) return;
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
  if ( ! current_user_can( 'edit_post', $post_id ) ) return;

  $works_order = sanitize_text_field( $_POST['works_order'] );
  update_post_meta( $post_id, 'works_order', $works_order );
}
// 制作実績記事一覧表示順指定機能 end↑



// ログイン画面のロゴ変更(Ver3.8～)
// function login_logo() {
//   echo '<style type="text/css">.login h1 a { background-image: url('.get_bloginfo('template_directory').'/img/login-logo.png); width: 300px; height: 46px; background-size: 300px 46px;}</style>';
// }
// add_action('login_head', 'login_logo');
//
// function custom_login_logo_url() {
//         return get_bloginfo( 'url' );
// }
// add_filter( 'login_headerurl', 'custom_login_logo_url' );
//
// function custom_login_logo_url_title() {
//         return '';
// }
// add_filter( 'login_headertitle', 'custom_login_logo_url_title' );


// 年度別アーカイブリストの表示
// function get_archives_by_fiscal_year( $args = '' ) {
//         global $wpdb, $wp_locale;
//         $defaults = array (
//                 'limit' => '',
//                 'format' => 'html',
//                 'before' => '',
//                 'after' => '',
//                 'show_post_count' => false,
//                 'echo' => 1
//         );
//         $r = wp_parse_args( $args, $defaults );
//         extract ( $r, EXTR_SKIP );
//         if ( '' != $limit ) {
//                 $limit = absint( $limit );
//                 $limit = ' LIMIT ' . $limit;
//         }
//         //これは複数の投稿タイプをまとめて出力するため
//         if (is_array($post_type)){
//                 $post_type_sql = " in ('".implode("','",$post_type)."')";
//         }else{
//                 $post_type = get_post_type();
//                 $post_type_sql = " = '$post_type'";
//         }
//         $arcresults = (array) $wpdb->get_results(
//                 "SELECT YEAR(ADDDATE(post_date, INTERVAL -3 MONTH)) AS `year`, COUNT(ID) AS `posts`
//                 FROM $wpdb->posts
//                 WHERE post_type $post_type_sql AND post_status = 'publish'
//                 GROUP BY YEAR(ADDDATE(post_date, INTERVAL -3 MONTH))
//                 ORDER BY post_date DESC
//                 $limit"
//         );
//         return $arcresults;
// }

// works投稿一覧の表示順をworks_orderでソート
add_action( 'pre_get_posts', 'custom_works_order_sort' );
function custom_works_order_sort( $query ) {
  if ( ! is_admin() || ! $query->is_main_query() ) {
    return;
  }

  $post_type = $query->get( 'post_type' );

  if ( 'works' === $post_type && isset( $_GET['orderby'] ) && 'works_order' === $_GET['orderby'] ) {

    $orderby = 'meta_value_num';
    $order = isset( $_GET['order'] ) && strtoupper( $_GET['order'] ) === 'DESC' ? 'DESC' : 'ASC';

    // 'works_order' が存在しない投稿を、指定された投稿の後に表示するための処理
    $query->set( 'orderby', array(
      'meta_value_num' => $order,
      'ID' => 'ASC' // IDで昇順にソートして、投稿日時の古い順にする (任意)
    ));

    $query->set( 'meta_key', 'works_order' );

    $query->set( 'meta_query', array(
      'relation' => 'OR',
      array(
        'key'     => 'works_order',
        'compare' => 'EXISTS',
      ),
      array(
        'key'     => 'works_order',
        'compare' => 'NOT EXISTS',
      )
    ));
  }
}