<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<?php
	// 投稿のスラッグを取得
		$page = get_post( get_the_ID() );
		$slug = $page->post_name;

		$parent_id = $post->post_parent; // 親ページのIDを取得
		$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
		$parent_title = get_post($parent_id)->post_title; // 親ページのタイトルを取得


			// 現在のページの親ページのidを遡って先祖まで取得
			// 親 → 先祖の順で並んでいるため 先祖 → 親の順に並べ替え
			$ancestors_ids = array_reverse(get_post_ancestors( $post ));
		?>
		<div class="main">
			<div class="section_block">
				<div class="wrapper">
					<div class="no_page">
						<div class="pb_20 error404"><strong class="f30">お探しのページは見つかりません。（Error 404）</strong></div>
						<div class="pb_10">
							申し訳ございません。<br />アクセスいただいたURLに該当するページが見つかりませんでした。<br />
							該当のページはアドレスが変更されたか、削除された可能性がございます。
						</div>
						<div><a href="<?php bloginfo('url'); ?>"><strong>⇒トップページへ戻る</strong></a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.main -->

<?php
get_footer();
