<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<div class="main">

	<?php if (have_posts()) : ?>

		<?php
		//カスタム投稿タイプ呼び出し
		$post_type = get_post_type();

		$parent_id = $post->post_parent; // 親ページのIDを取得
		$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
		$parent_title = get_post($parent_id)->post_title; // 親ページのタイトルを取得

		// 現在のページの親ページのidを遡って先祖まで取得
		// 親 → 先祖の順で並んでいるため 先祖 → 親の順に並べ替え
		$ancestors_ids = array_reverse(get_post_ancestors($post));
		
		?>



		<div class="main_screen">
			<div class="main_screen_wrapper">
				<h2 class="main_img">
					<img class="pc_inline" src="<?php bloginfo('template_url'); ?>/img/main_screen_<?php echo $post_type; ?>.png" alt="<?php echo esc_html(get_post_type_object(get_post_type())->label); ?>">
					<img class="sp_inline" src="<?php bloginfo('template_url'); ?>/img/main_screen_<?php echo $post_type; ?>_sp.png" alt="<?php echo esc_html(get_post_type_object(get_post_type())->label); ?>">
				</h2>
				<div class="main_text_block">
					<p class="main_text_top"><?php echo $post_type; ?></p>
					<p class="main_text_btm"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></p>
				</div>
			</div>
			<nav class="bread">
				<div class="wrapper">
					<ul>
						<li><a href="<?php echo bloginfo('url'); ?>">HOME</a></li>
						<li><?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name); ?></li>
					</ul>
				</div>
			</nav>
		</div>



		<div class="wrapper" style="display: none;">
			<ul class="works_tag_list">
				<?php
				$tags = get_terms(array(
					'taxonomy' => 'post_tag', // タクソノミー名（タグの場合 'works_tag' に修正）
					'hide_empty' => true, // 投稿が紐付いていないタグは非表示にする場合は true
				));
				if ($tags) :
					foreach ($tags as $tag) :
				?>
						<li class="works_tag_item"><a href="<?php echo esc_url(add_query_arg('works_tag', $tag->slug, get_post_type_archive_link('works'))); ?>"><?php echo esc_html($tag->name); ?></a></li>
				<?php
					endforeach;
				endif;
				?>
			</ul>
		</div>


		<div class="wrapper">
			<form class="category_box">
				<tr>
					<td>
						<div class="form_select_wrap">
							<select class="form_select" id="form_select" name="custompost-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
								<option value="00">カテゴリーを絞り込む</option>
								<?php
								$all_cats = get_terms(array(
									'taxonomy' => 'works_cat',
									'hide_empty' => false,
									'orderby' => 'description',
									'pad_counts' => true,
								));
								foreach ($all_cats as $cat) {
									if ($cat->parent) continue; ?>
									<option value="<?php
													echo esc_html(get_category_link($cat->term_id)); ?>">
										<?php
										echo esc_html($cat->name); ?></option>

									<?php
									$child_cat_num = count(get_term_children($cat->term_id, 'category'));
									if ($child_cat_num > 0) {
										$category_children_args = array(
											'parent' => $cat->term_id,
											'hide_empty' => false,
											'orderby' => 'description',
											'pad_counts' => true,
										);
										$category_children = get_categories($category_children_args);
										foreach ($category_children as $child_val) { ?>
											<option value="<?php
															echo esc_html(get_category_link($child_val->cat_ID)); ?>"><?php echo esc_html('- ' . $child_val->name); ?></option>
								<?php
										}
									}
								}
								?>
							</select>
						</div>
					</td>
				</tr>
			</form>
		</div>



		<?php
		// $paged = get_query_var('paged') ? get_query_var('paged') : 1;
		// $args = array(
		// 'post_type' => $post_type,
		// 'paged' => $paged,
		// 'posts_per_page' => '10',
		// 'orderby' => 'DESC', //最新から表示
		// );
		// $custom_query = new WP_Query( $args );

		$paged = get_query_var('paged') ? get_query_var('paged') : 1;

		// 1. works_order が設定されている投稿を取得
		$args_ordered = array(
			'post_type' => 'works',
			'paged' => $paged,
			'posts_per_page' => 20,
			'meta_key' => 'works_order',
			'orderby' => 'meta_value_num',
			'order' => 'ASC',
			'meta_query' => array(
				array(
					'key'     => 'works_order',
					'compare' => 'EXISTS',
				),
			),
		);
		$ordered_query = new WP_Query($args_ordered);

		// 2. works_order が設定されていない投稿を取得
		$args_unordered = array(
			'post_type' => 'works',
			'paged' => $paged,
			'posts_per_page' => 20 - $ordered_query->post_count, // 残りの表示件数
			'orderby' => 'date',
			'order' => 'DESC',
			'meta_query' => array(
				array(
					'key'     => 'works_order',
					'compare' => 'NOT EXISTS',
				),
			),
		);
		$unordered_query = new WP_Query($args_unordered);

		// 3. 2つのクエリの結果を結合
		$works = array_merge($ordered_query->posts, $unordered_query->posts);

		// 4. ページネーション用に全体の投稿数を設定
		global $wp_query;
		$temp = $wp_query;
		$wp_query = null;
		$wp_query = new WP_Query(array('post_type' => 'works'));
		$total_posts = $wp_query->found_posts;

		$wp_query = $temp;
		unset($temp);

		$max_num_pages = ceil($total_posts / 20);
		?>

		<div class="section_block section_block_works_list bg_daiya">
			<div class="wrapper">
				<h3 class="heading03">制作実績一覧</h3>
				<ul class="contents_list contents_list_type_01">

					<?php
					if (!empty($works)) :
						foreach ($works as $post) :
							setup_postdata($post);
					?>
							<li class="contents_item">
								<a class="contents_item_link" href="<?php echo get_permalink(); ?>">
									<div class="contents_item_img"><?php the_post_thumbnail('medium'); ?></div>
									<p class="contents_title"><?php the_title(); ?></p>
								</a>
							</li>
						<?php
						endforeach;
						wp_reset_postdata();
					else :
						?>
						<p>記事が見つかりませんでした。</p>
					<?php endif; ?>

				</ul>

				<?php
				// ページネーション
				if ($max_num_pages > 1) :
				?>
					<div class="wp-pagenavi" role="navigation">
						<span class="pages"><?php echo $paged . ' / ' . $max_num_pages; ?></span>
						<?php if ($paged > 1) : ?>
							<a class="prevpostslink" rel="prev" href="<?php echo get_pagenum_link($paged - 1); ?>">«</a>
						<?php endif; ?>

						<?php
						// ページ番号の生成
						$range = 2; // 現在のページから前後に表示するページ数
						for ($i = 1; $i <= $max_num_pages; $i++) {
							if (($i <= $range) || ($i > $max_num_pages - $range) || ($i >= $paged - $range && $i <= $paged + $range)) {
								if ($i == $paged) {
									echo '<span aria-current="page" class="current">' . $i . '</span>';
								} else {
									echo '<a class="page larger" title="Page ' . $i . '" href="' . get_pagenum_link($i) . '">' . $i . '</a>';
								}
							} elseif ($i == $range + 1 || $i == $max_num_pages - $range - 1) {
								echo '<span class="extend">...</span>';
							}
						}
						?>

						<?php if ($paged < $max_num_pages) : ?>
							<a class="nextpostslink" rel="next" href="<?php echo get_pagenum_link($paged + 1); ?>">»</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>


	<?php
	endif;
	?>
</div><!-- #main -->

<?php
get_footer();
