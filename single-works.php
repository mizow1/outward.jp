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
				//カスタム投稿タイプ呼び出し
				$post_type = get_post_type();
				// ターム名の取得
				$terms = get_the_terms($post->ID,'works_cat');
				foreach( $terms as $term ) {
				$term->name;
				}
			 	// タクソノミーのタームスラッグ取得
				$terms = get_the_terms($post ->ID, 'works_cat');
				foreach($terms as $term){
				$term_slug = $term ->slug;
				}
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
								<li><a href="<?php echo bloginfo('url'); ?>/works"><?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name ); ?></a></li>
								<li><a href="<?php echo bloginfo('url'); ?>/works_cat/<?php echo $term_slug ?>"><?php echo $term->name; ?></a></li>
								<li><?php the_title(); ?></li>
							</ul>
						</div>
					</nav>
				</div>



				<div class="wrapper">
					<h2 class="heading section_indent mt_30"><?php the_title();?></h2>
					<div class="section_block section_block_works_detail_01 pt_00">
						<div class="section_inr">
							<div class="works_detail_main">
								<div class="works_detail_abs">
									<img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>



						<?php if ( have_posts() ) : ?>
						  <?php while( have_posts() ) : the_post(); ?>
						      <?php the_content(); ?>
						  <?php endwhile;?>
						<?php endif; ?>

					<div class="wrapper">
						<div class="hover_btn_wrap pb_30">
							<div class="hover_btn_wrap">
								<div class="hover_btn"><a href="<?php bloginfo('url');?>/works" class="btn_gradation arrow">制作実績一覧に戻る</a></div>
							</div>
						</div>
					</div>



					<!-- ターム名の取得 -->
					<?php
					$terms = get_the_terms($post->ID,'works_cat');
					foreach( $terms as $term ) {
				 	$term->name;
					}
					?>

		      <div class="section_block section_block_works_detail_05 bg_daiya">
		        <div class="wrapper">
		          <h3 class="heading03">最新の制作実績（<?php echo $term->name;  ?>）</h3>
							<ul class="contents_list contents_list_type_01">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						?>



							<?php
							 global $post;
							 $term = array_shift(get_the_terms($post->ID, 'works_cat'));
							 foreach($terms as $term){
							 $term_slug = $term ->slug;
							 }
							 $args = array(
							  'numberposts' => 4, //(4件表示の場合)
							  'post_type' => 'works', //カスタム投稿タイプ名
							  'taxonomy' => 'works_cat', //タクソノミー名
							  'term' => $term->slug, //ターム名 ←ここが追加
							  'orderby' => 'DESC', //最新から
							  'post__not_in' => array($post->ID) //表示中の記事を除外
							 );

							?>
							<?php $myPosts = get_posts($args); if($myPosts) : ?>
							<?php foreach($myPosts as $post) : setup_postdata($post); ?>
								<li class="contents_item">
									<a class="contents_item_link" href="<?php echo get_permalink();?>">
										<div class="contents_item_img"><?php the_post_thumbnail('medium'); ?></div>
										<p class="contents_title"><?php the_title();?></p>
									</a>
								</li>
							<?php endforeach; ?>
							<?php else : ?>
							 <p>関連アイテムはまだありません。</p>
							<?php endif; wp_reset_postdata(); ?>




					<?php
					endwhile; // End of the loop.
					?>






				</ul>


				<div class="hover_btn_wrap">
					<div class="hover_btn"><a href="<?php bloginfo('url');?>/works_cat/<?php echo $term_slug; ?>" class="btn_gradation arrow">カテゴリー一覧に戻る</a></div>
				</div>
			</div>
			<!-- /.wrapper -->
		</div>
		<!-- /.section_block_news_list -->

	</div>
	<!-- /.main -->
<?php
get_footer();
