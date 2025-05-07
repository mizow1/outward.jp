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

		<?php if ( have_posts() ) : ?>

			<?php
					//カスタム投稿タイプ呼び出し
					$post_type = get_post_type();


					$parent_id = $post->post_parent; // 親ページのIDを取得
					$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
					$parent_title = get_post($parent_id)->post_title; // 親ページのタイトルを取得

						// 現在のページの親ページのidを遡って先祖まで取得
						// 親 → 先祖の順で並んでいるため 先祖 → 親の順に並べ替え
						$ancestors_ids = array_reverse(get_post_ancestors( $post ));
					?>



					<div class="main_screen">
			      <div class="main_screen_wrapper">
			        <h2 class="main_img">
								<img class="pc_inline" src="<?php bloginfo( 'template_url' ); ?>/img/main_screen_<?php echo $post_type; ?>.png" alt="<?php echo esc_html(get_post_type_object(get_post_type())->label); ?>">
								<img class="sp_inline" src="<?php bloginfo( 'template_url' ); ?>/img/main_screen_<?php echo $post_type; ?>_sp.png" alt="<?php echo esc_html(get_post_type_object(get_post_type())->label); ?>">
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
									<li><?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name ); ?></li>
								</ul>
			        </div>
			      </nav>
			    </div>






		<?php

		$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		$args = array(
		'post_type' => $post_type,
		'paged' => $paged,
		'posts_per_page' => '12',
		'orderby' => 'post_date',
		);
		$custom_query = new WP_Query( $args );
		?>


		<div class="section_block section_block_news_list bg_daiya">
      <div class="wrapper">
        <h3 class="heading03">お知らせ一覧</h3>

				  <ul class="contents_list contents_list_type_03 mb_30">
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				?>




				<li class="section_box coloring_box coloring_box02">
					<a class="section_link" href="<?php echo get_permalink();?>">
						<div class="section_body">
							<p class="section_date">
							 <?php echo get_post_time('Y.m.d D'); ?>
							</p>
							<div class="section_category"><?php echo get_post_type(); ?></div>
							<p class="section_text">
								<?php the_title();?>
							</p>
							<div class="arrow_01"><img src="<?php bloginfo('template_url');?>/img/arrow01.png" alt=""></div>
						</div>
					</a>
				</li>
				<!-- /.section_box -->








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


		<?php

		endif;
		?>
	</div><!-- #main -->

<?php
get_footer();
