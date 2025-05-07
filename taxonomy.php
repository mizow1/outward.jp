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

		<!-- ターム名の取得 -->
		<?php
		$terms = get_the_terms($post->ID, 'works_cat');
		foreach ($terms as $term) {
			$term->name;
		}
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
					<a href="<?php echo bloginfo('url'); ?>">HOME</a>
					>
					<a href="<?php echo bloginfo('url'); ?>/works"><?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name); ?></a>
					>
					<?php echo $term->name;  ?>
				</div>
			</nav>
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



		<div class="section_block section_block_works_list bg_daiya">
			<div class="wrapper">

				<h3 class="heading03"><?php echo $term->name;  ?></h3>
				<ul class="contents_list contents_list_type_01">


					<?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;
					$args = array(
						'post_type' => $post_type,
						'paged' => $paged,
						'posts_per_page' => '20',
						'orderby' => 'DESC', //最新から表示
						'orderby' => 'post_date',
					);
					$custom_query = new WP_Query($args);
					?>

					<?php
					// Start the Loop.
					while (have_posts()) :
						the_post();
					?>




						<li class="contents_item">
							<a class="contents_item_link" href="<?php echo get_permalink(); ?>">
								<div class="contents_item_img"><?php the_post_thumbnail('medium'); ?></div>
								<p class="contents_title"><?php the_title(); ?></p>
							</a>
						</li>





					<?php
					// End the loop.
					endwhile;
					?>



				</ul>
				<!-- /.contents_list -->

				<!-- ▽▽▽ページネーション▽▽▽ -->
				<?php wp_pagenavi(); ?>
				<!-- △△△ページネーション△△△ -->


			</div>
			<!-- /.wrapper -->
		</div>
		<!-- /.section_block_news_list -->


	<?php endif; ?>

</div><!-- #main -->



<?php
get_footer();
