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

get_header('sachikoi');
?>

<?php
	// スラッグを取得
		$page = get_post( get_the_ID() );
		$slug = $page->post_name;

		$parent_id = $post->post_parent; // 親ページのIDを取得
		$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
		$parent_title = get_post($parent_id)->post_title; // 親ページのタイトルを取得


			// 現在のページの親ページのidを遡って先祖まで取得
			// 親 → 先祖の順で並んでいるため 先祖 → 親の順に並べ替え
			$ancestors_ids = array_reverse(get_post_ancestors( $post ));
		?>

			<?php
			/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content/content', 'page' );

				endwhile; // End of the loop.
				?>


			<?php if(is_page(array('system', 'digitalcontents', 'website', 'webmedia', 'app'))) : ?>
			<div class="section_block bg_05">
       <div class="wrapper">
				 <?php get_template_part( 'template-parts/content/content', 'service' );?>
       </div>
     </div>
       <!-- //.section_block -->



			 <div class="section_block bg_daiya">
		     <div class="wrapper">
		       <h3 class="heading03">最新の制作実績（<?php echo the_title(); ?>）</h3>
		       <ul class="contents_list contents_list_type_01">
						 <?php
				 			/* Start the Loop */
				 			while ( have_posts() ) :
				 				the_post();
							?>


								<?php
								 global $post;
								 foreach((array) $terms as $term){
								 $term_slug = $term ->slug;
								 }
								 $args = array(
								  'numberposts' => 4, //(4件表示の場合)
								  'post_type' => 'works', //カスタム投稿タイプ名
								  'taxonomy' => 'works_cat', //タクソノミー名
								  'term' => $slug, //スラッグ名
								  'orderby' => 'DESC', //ランダム表示
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
               <div class="hover_btn"><a href="<?php bloginfo( 'url' ); ?>/works" class="btn_gradation arrow">制作実績一覧</a></div>
             </div>
           </div>
         </div>
         <!-- //.section_block -->

			 <?php endif; ?>


		</div>
		<!-- /.main -->



<?php
get_footer('sachikoi');
