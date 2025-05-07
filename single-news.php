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



			<div class="main">
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
								<li><a href="<?php echo get_post_type_archive_link($post_type); ?>"><?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name ); ?></a></li>
								<?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parentid ) { ?>
								<li><a href="<?php echo bloginfo('url'); ?>?p=<?php echo $parentid;?>"><?php echo get_page($parentid)->post_title; ?></a></li>
								<li><?php }  the_title(''); ?></li>
							</ul>
						</div>
					</nav>
				</div>







				<div class="section_block section_block_news02">
					<div class="wrapper">

						<div class="contents_list contents_list_type_03 mb_30">
							<div class="section_box section_box_type2">
								<div class="section_body section_indent">
									<p class="section_date pb_20">
										<?php echo get_post_time('Y.m.d D'); ?>
									</p>
									<h2 class="heading mb_20"><?php the_title();?></h2>
									<div class="section_category"><?php echo get_post_type(); ?></div>
								</div>
							</div>
							<!-- /.section_box -->
						</div>
						<!-- /.news_list -->

						<?php if ( have_posts() ) : ?>
						  <?php while( have_posts() ) : the_post(); ?>
						      <?php the_content(); ?>
						  <?php endwhile;?>
						<?php endif; ?>

						<div class="hover_btn_wrap">
							<div class="hover_btn">
								<a href="<?php bloginfo('url');?>/news" class="btn_gradation arrow">お知らせ一覧に戻る</a>
							</div>
						</div>
					</div>
					<!-- /.wrapper -->
				</div>
				<!-- /.section_block_news02 -->




		<div class="section_block section_block_news_list bg_daiya">
			<div class="wrapper">
				<h3 class="heading03">最新のお知らせ</h3>
				<ul class="contents_list contents_list_type_03 mb_30">




					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						?>



						<?php
							 global $post;
							 $args = array(
							  'numberposts' => 4, //８件表示(デフォルトは５件)
							  'post_type' => 'news', //カスタム投稿タイプ名
							  'orderby' => 'DESC', //最新から表示
							  'post__not_in' => array($post->ID) //表示中の記事を除外
							 );
							?>
							<?php $myPosts = get_posts($args); if($myPosts) : ?>
							<?php foreach($myPosts as $post) : setup_postdata($post); ?>
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
							<?php endforeach; ?>
							<?php else : ?>
							 <p>関連アイテムはまだありません。</p>
							<?php endif; wp_reset_postdata(); ?>


					<?php
					endwhile; // End of the loop.
					?>



				</ul>
			</div>
			<!-- /.wrapper -->
		</div>
		<!-- /.section_block_news_list -->

	</div>
	<!-- /.main -->
<?php
get_footer();
