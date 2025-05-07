<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage outward
 * @since 1.0.0
 */

get_header();
?>



	<div class="main">
		<!-- ▼▼▼mainビジュアル▼▼▼ -->
		<div class="mv">
			<ul id="mv_slide" class="mv_slide">
				<il class="mv_slide_item"><img src="<?php bloginfo( 'template_url' ); ?>/img/mv/01.png" alt=""></il>
				<il class="mv_slide_item"><img src="<?php bloginfo( 'template_url' ); ?>/img/mv/02.png" alt=""></il>
				<il class="mv_slide_item"><img src="<?php bloginfo( 'template_url' ); ?>/img/mv/03.png" alt=""></il>
			</ul>
		</div>
		<!-- ▲▲▲mainビジュアル▲▲▲ -

		<!-- ▼▼▼新着▼▼▼ -->
			<div class="new_arrival bg_grad">
				<div class="wrapper">
					<div id="new_arrival_ticker" class="ticker">

						<ul class="new_arrival_list">
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								?>



								<?php
									 global $post;
									 $args = array(
									  'numberposts' => 5, //表示する記事の数(デフォルトは５件)
									  'post_type' => 'news', //カスタム投稿タイプ名
									  'orderby' => 'DESC', //最新から表示
									  //'post__not_in' => array($post->ID) //表示中の記事を除外
									 );
									?>
									<?php $myPosts = get_posts($args); if($myPosts) : ?>
									<?php foreach($myPosts as $post) : setup_postdata($post); ?>
										<li class="new_arrival_item">
											<a href="<?php echo get_permalink();?>">
												<div class="section_box">
													<div class="section_thm section_thm_left">NEWS</div>
													<div class="section_body">
														<p class="section_date">
															<?php echo get_post_time('Y.m.d D'); ?>
														</p>
														<div class="section_category"><?php echo get_post_type(); ?></div>
														<p class="section_text">
															<?php the_title();?>
														</p>
													</div>
												</div>
											</a>
										</li>
									<?php endforeach; ?>
									<?php else : ?>
									 <li>関連アイテムはまだありません。</li>
									<?php endif; wp_reset_postdata(); ?>


							<?php
							endwhile; // End of the loop.
							?>

						</ul>
					</div>
					<!-- /.new_arrival_ticker -->
				</div>
			</div>
		<!-- ▲▲▲新着▲▲▲ -->

		<!-- ▼▼▼contents▼▼▼ -->
		<div id="about" class="section_block section_block_company bg_base">
			<div class="wrapper">
				<h2 class="heading01 border_color01">
					会社情報<br>
					<span>COMPANY</span>
				</h2>
				<h3 class="heading01_sub section_indent">
					アウトワードはお客様がWEB制作での<br>
					「困った」に答える<br>
					プロフェッショナル集団です。
				</h3>
				<p class="section_dp section_indent">
					アウトワードはWEBシステム開発をはじめ、ホームページ制作、SEO/SEM対策、ハードウェア構築、ネットワーク構築など…<br>
					お客様の「困った」、「こんなことが出来れば」にお応え出来る企業です。<br>
					相談は無料ですので、まずはお気軽にお問い合わせください。
				</p>

				<div class="hover_btn pc_block">
					<a href="<?php bloginfo( 'url' ); ?>/company" class="btn_gradation arrow">会社情報</a>
				</div>
			</div>
			<!-- /.wrapper -->
			<div class="campany_contents campany_contents bg_daiya">
				<ul class="contents_list">
					<li class="contents_item contents_item_type01">
						<div class="contents_img">
							<img class="pc_inline" src="<?php bloginfo( 'template_url' ); ?>/img/company01.png" alt="アウトワードの強み">
							<img class="sp_inline" src="<?php bloginfo( 'template_url' ); ?>/img/company01_sp.png" alt="アウトワードの強み">
						</div>
						<div class="contents_item_wrap">
							<h4 class="contents_title">
								<span>アウトワードの強み</span><br>
								STRENGTH-01<br>
								IT分野における統合的なサポート
							</h4>
							<p class="contents_text">
								各種デザインの作成、必要な機器の導入、システム開発から保守・運用サポート時に求められるセキュリティ対策、アクセス解析、プロモーションやパフォーマンス調査まで一括した体制で行います。
							</p>
						</div>
						<!-- ./contents_item_wrap -->
					</li>
					<li class="contents_item contents_item_type02">
						<div class="contents_img">
							<img class="pc_inline" src="<?php bloginfo( 'template_url' ); ?>/img/company02.png" alt="アウトワードの強み">
							<img class="sp_inline" src="<?php bloginfo( 'template_url' ); ?>/img/company02_sp.png" alt="アウトワードの強み">
						</div>
						<div class="contents_item_wrap">
							<h4 class="contents_title">
								<span>アウトワードの強み</span><br>
								STRENGTH-02<br>
								効果を見定め費用対効果に<br class="pc_block">
								優れたホームページの構築
							</h4>
							<p class="contents_text">
								お客様の初期投資をなるべく抑え、しっかりと効果を見定めた上でホームページによる広告宣伝の方針を決定いたします。ホームページを作成する前に、お客様の業態、サービスをしっかりとヒアリングさせていただきます。
							</p>
						</div>
						<!-- ./contents_item_wrap -->
					</li>
					<li class="contents_item contents_item_type03">
						<div class="contents_img">
							<img class="pc_inline" src="<?php bloginfo( 'template_url' ); ?>/img/company03.png" alt="アウトワードの強み">
							<img class="sp_inline" src="<?php bloginfo( 'template_url' ); ?>/img/company03_sp.png" alt="アウトワードの強み">
						</div>
						<div class="contents_item_wrap">
							<h4 class="contents_title">
								<span>アウトワードの強み</span><br>
								STRENGTH-03<br>
								安価に抑えるソリューションの開発
							</h4>
							<p class="contents_text">
								昨今、Webシステムに保存される個人情報等に代表される、プライバシー情報の保存に関してはセキュリティーの保たれるデーターベースの使用が欠かせないものとなっております。 当社は高価になるデーターベースを含むシステム開発を安価に抑えるソリューションの開発に邁進し、これまで多くの実績を上げてまいりました。
							</p>
						</div>
						<!-- ./contents_item_wrap -->
					</li>
				</ul>
				<!-- /.contents_list -->
			</div>
			<!-- /.campany_contents -->
		</div>
		<!-- /.campany -->

		<div id="service" class="section_block section_block_service bg_base">
			<div class="wrapper">
				<h2 class="heading01 border_color02">
					事業内容<br>
					<span>SERVICE</span>
				</h2>
			</div>
			<div class="service_main_img">
				<img class="pc_inline" src="<?php bloginfo( 'template_url' ); ?>/img/service_main_img.png" alt="サービス内容">
				<img class="sp_inline" src="<?php bloginfo( 'template_url' ); ?>/img/service_main_img_sp.png" alt="サービス内容">
			</div>
			<div class="wrapper">
				<p class="section_dp section_indent">
					アウトワードはWEBシステム開発をはじめ、ホームページ制作、SEO/SEM対策、ハードウェア構築、ネットワーク構築など… お客様の「困った」、<br class="pc_block">
					「こんなことが出来れば」にお応え出来る企業です!
				</p>
				<!-- ./wrapper -->
				<div class="hover_btn"><a href="<?php bloginfo( 'url' ); ?>/service" class="btn_gradation arrow">事業内容</a></div>
			</div>
			<div class="service_contents bg_03">
				<div class="wrapper">
					<ul class="contents_list contents_list_type_02">
						<li class="contents_item service_contents_item01">
							<a class="contents_item_link coloring_box coloring_box02" href="<?php bloginfo( 'url' ); ?>/service/system">
								<h3 class="contents_title">WEBシステム開発<br><span>⇀</span></h3>
								<p class="contents_text">
									業務システムの構築、会員サービス運用、より機能的なホームページを作成。
								</p>
							</a>
						</li>
						<li class="contents_item service_contents_item02">
							<a class="contents_item_link coloring_box coloring_box02" href="<?php bloginfo( 'url' ); ?>/service/digitalcontents">
								<h3 class="contents_title">デジタルコンテンツ<br><span>⇀</span></h3>
								<p class="contents_text">PC版・スマホ版・アプリのデジタルコンテンツを開発制作。</p>
							</a>
						</li>
						<li class="contents_item service_contents_item03">
							<a class="contents_item_link coloring_box coloring_box02" href="<?php bloginfo( 'url' ); ?>/service/website">
								<h3 class="contents_title">WEBサイト制作<br><span>⇀</span></h3>
								<p class="contents_text">業務システムの構築、会員サービス運用、より機能的なホームページを作成。</p>
							</a>
						</li>
						<li class="contents_item service_contents_item04">
							<a class="contents_item_link coloring_box coloring_box02" href="<?php bloginfo( 'url' ); ?>/service/webmedia">
								<h3 class="contents_title">WEBメディア制作<br><span>⇀</span></h3>
								<p class="contents_text">PC版・スマホ版・アプリのデジタルコンテンツを開発制作。</p>
							</a>
						</li>
						<li class="contents_item service_contents_item05">
							<a class="contents_item_link coloring_box coloring_box02" href="<?php bloginfo( 'url' ); ?>/service/app">
								<h3 class="contents_title">ネイティブアプリ開発<br><span>⇀</span></h3>
								<p class="contents_text">業務システムの構築、会員サービス運用、より機能的なホームページを作成。</p>
							</a>
						</li>
					</ul>
					<!-- /.service_contents_list -->
				</div>
				<!-- ./wrapper -->
			</div>
		</div>

		<div id="works" class="section_block section_block_works bg_01">
			<div class="wrapper">
				<h2 class="heading01 border_color03 f_color_white">
					制作実績<br>
					<span>WORKS</span>
				</h2>
				<div class="hover_btn pc_block"><a href="<?php bloginfo( 'url' ); ?>/works" class="btn_gradation_02 arrow">制作実績</a></div>
			</div>












			<!-- ▼▼▼スライダー実装▼▼▼ -->
			<div id="slider" class="contents_slider contents_slider_works">


				<?php
				// Start the Loop.
				while ( have_posts() ) :
					the_post();
					?>

					<?php $args = array(
	        'numberposts' => 10,  //表示（取得）する記事の数
	        'post_type' => 'news'    //投稿タイプの指定
			    );
			    $posts = get_posts( $args );
			    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>

					<div class="contents_slider_item">
						<a href="<?php echo get_permalink();?>">
							<img src="<?php the_post_thumbnail_url('full'); ?>" alt="sumple"/>
						</a>
						<p class="contents_slider_text"><a href="<?php echo get_permalink();?>"><?php the_title();?></a></p>
					</div>
			    <?php endforeach; ?>
			    <?php else : //記事が無い場合 ?>
			        <li><p>記事はまだありません。</p></li>
			    <?php endif;
			    wp_reset_postdata(); //クエリのリセット ?>


				<?php
				// End the loop.
			endwhile;
			?>


			</div>
			<!-- ▲▲▲スライダー実装▲▲▲ -->





			<div class="wrapper">
				<div class="hover_btn sp_block"><a class="btn_gradation_02 arrow" href="<?php bloginfo( 'url' ); ?>/service">制作実績</a></div>
			</div>
		</div>

		<div id="news" class="section_block section_block_news bg_daiya">
			<div class="wrapper">
				<h2 class="heading01 border_color04">
					お知らせ<br>
					<span>NEWS</span>
				</h2>
				<ul class="contents_list contents_list_type_03">

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						?>



						<?php
							 global $post;
							 $args = array(
							  'numberposts' => 4, //表示する記事の数(デフォルトは５件)
							  'post_type' => 'news', //カスタム投稿タイプ名
							  'orderby' => 'DESC', //最新から表示
							  //'post__not_in' => array($post->ID) //表示中の記事を除外
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
							 <li><p class="section_text">関連アイテムはまだありません。</p></li>
							<?php endif; wp_reset_postdata(); ?>


					<?php
					endwhile; // End of the loop.
					?>
				</ul>
				<!-- /.news_list -->
				<div class="hover_btn"><a href="<?php bloginfo( 'url' ); ?>/news" class="btn_gradation arrow">お知らせ</a></div>
			</div>
		</div>

		<div id="recruit" class="section_block section_block_recruit bg_base">
			<div class="wrapper">
				<h2 class="heading01 border_color03">
					求人・採用情報<br>
					<span>RECRUIT</span>
				</h2>
					<h3 class="heading01_sub section_indent">
						ウェブプログラマーとしてのスキルを<br>
						活かして、私たちと働いてみませんか？
					</h3>
					<h4 class="section_dp section_indent">
						現在、弊社では即戦力として働いていただける方の採用を積極的に行っております。<br>
						主に以下人材を募集しております「WEBデザイナー」「WEBプログラマー」「企画・WEBディレクター」を募集しております。
					</h4>
					<div class="hover_btn_twin">
						<div class="hover_btn"><a href="<?php bloginfo( 'url' ); ?>/recruit" class="btn_gradation arrow">求人・採用情報</a></div>
						<div class="hover_btn"><a href="<?php bloginfo( 'url' ); ?>/entry" class="btn_gradation arrow">求人フォーム</a></div>
					</div>
			</div>
		</div>

		<div id="contact" class="section_block section_block_contact bg_base">
			<div class="wrapper">
				<h2 class="heading01 border_color05">
					お問い合わせ<br>
					<span>CONTACT OUTWARD</span>
				</h2>
			</div>
			<div class="access_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.344547647023!2d130.31588631534777!3d33.570402350414675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354194a88c33d149%3A0xf0dfdb4f61dd06f!2z44CSODE5LTAwMjIg56aP5bKh55yM56aP5bKh5biC6KW_5Yy656aP6YeN77yT5LiB55uu77yT77yW4oiS77yW!5e0!3m2!1sja!2sjp!4v1557452356234!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="wrapper">
				<ul class="contact_list">
					<li class="contact_item contact_item_dp contact_item_title">株式会社アウトワード</li>
					<li class="contact_item contact_item_dp">〒819-0022 福岡県福岡市西区福重3-36-6</li>
					<li class="contact_item contact_item_dp">TEL 092-885-1364<span class="pc_inline">　FAX 092-885-1459</span></li>
					<li class="contact_item contact_item_dp sp_block">FAX 092-885-1459</li>
					<li class="contact_item contact_item_dp">MAIL <a href="mailto:info@outward.jp">info@outward.jp</a></li>
				</ul>
				<div class="hover_btn"><a href="<?php bloginfo( 'url' ); ?>/contact" class="btn_gradation arrow">お問い合わせ</a></div>
			</div>
		</div>

		<div id="site" class="section_block section_block_site bg_daiya">
			<div class="wrapper">
				<h2 class="heading01 border_color03">
					おすすめサイト<br>
					<span>SITE</span>
				</h2>
				<ul class="contents_list contents_list_type_05">
					<li class="section_box coloring_box coloring_box03">
						<a class="section_link" href="<?php bloginfo( 'template_url' ); ?>/#">
							<div class="section_thm section_thm_left">
								<img src="<?php bloginfo( 'template_url' ); ?>/img/sample.png" alt="">
							</div>
							<div class="section_body">
								<h4 class="section_title">
									サイト名サイト名サイト名サイト名サイト名サイト名
								</h4>
								<p class="section_text pc_block">
									説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文
								</p>
								<div class="arrow_01"><img src="<?php bloginfo( 'template_url' ); ?>/img/arrow01.png" alt=""></div>
							</div>
						</a>
					</li>
					<!-- /.section_box -->
					<li class="section_box coloring_box coloring_box03">
						<a class="section_link" href="<?php bloginfo( 'template_url' ); ?>/#">
							<div class="section_thm section_thm_left">
								<img src="<?php bloginfo( 'template_url' ); ?>/img/sample.png" alt="">
							</div>
							<div class="section_body">
								<h4 class="section_title">
									サイト名サイト名サイト名サイト名サイト名サイト名
								</h4>
								<p class="section_text pc_block">
									説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文
								</p>
								<div class="arrow_01"><img src="<?php bloginfo( 'template_url' ); ?>/img/arrow01.png" alt=""></div>
							</div>
						</a>
					</li>
				<!-- /.section_box -->
				</ul>
			</div>
		</div>
	</div>
	<!-- /.main -->


	<?php

	/* Start the Loop */
	while ( have_posts() ) :
		the_post();




	endwhile; // End of the loop.
	?>


<?php
get_footer();
