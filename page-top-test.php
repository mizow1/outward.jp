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

get_header('test');
?>



	<div class="main">
		<!-- ▼▼▼mainビジュアル▼▼▼ -->
		<div class="mv">

      <ul id="mv_slide" class="mv_slide">
        <li class="mv_slide_item">
          <a href="<?php bloginfo( 'url' ); ?>/works_cat/website">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/mv/01.jpg" alt="伝わる想い、繋がる未来を目指す「アウトワードのWEB制作」" />
          </a>
        </li>
        <li class="mv_slide_item">
          <a href="<?php bloginfo( 'url' ); ?>/recruit">
            <img src="<?php bloginfo( 'template_url' ); ?>/img/mv/03.jpg" alt="新戦力、求む！求人・採用情報">
          </a>
        </li>
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

				<div class="hover_btn">
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
								効果を見定め費用対効果に優れた<br class="pc_block">ホームページの構築
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
      <div class="service_main">
        <div class="service_main_phone"><img src="<?php bloginfo( 'template_url' ); ?>/img/service_main_phone.png" alt=""></div>
        <div class="service_main_item service_main_title">「こんなことに<strong class="f_color_red">お困り</strong>ではないですか？」</div>
        <div class="service_main_item service_main_01">
          <div class="service_box">
            <div class="service_box_text">
              ●ホームページを作りたいけど、どうしたらいいか分からない<br>
              ●時代にあったホームページに作り変えたい！<br>
              ●自社のドメインで買い物ができるホームページを作りたい
            </div>
            <div class="service_box_thm"><img src="<?php bloginfo( 'template_url' ); ?>/img/service_main_01.png" alt=""></div>
            <div class="service_box_title">
              デザインからホームページ運用まで<br>
              すべてアウトワードにお任せください！
            </div>
          </div>
        </div>
        <div class="service_main_item service_main_02">
          <div class="service_box">
            <div class="service_box_text">
              ●お客様と双方向でコミュニケーションがとれるホームページを作りたい<br>
              ●会員しか利用できないサービスを運用したい<br>
              ●より機能的なホームページや業務システムを構築したい
            </div>
            <div class="service_box_thm"><img src="<?php bloginfo( 'template_url' ); ?>/img/service_main_02.png" alt=""></div>
            <div class="service_box_title">
              より快適・実用的なシステムを<br>
              提供いたします
            </div>
          </div>
        </div>
        <div class="service_main_item service_main_03">
          <div class="service_box">
            <div class="service_box_text">
              ●ホームページのアクセス、利用者を増やしたい<br>
              ●現状のシステムやホームページの固定経費を削減したい
            </div>
            <div class="service_box_thm"><img src="<?php bloginfo( 'template_url' ); ?>/img/service_main_03.png" alt=""></div>
            <div class="service_box_title">
              SEO対策もお任せを!!<br>
              低コストでの目標達成を目指します
            </div>
          </div>
        </div>
      </div>
			<div class="service_contents bg_03">
				<div class="wrapper">
					<?php get_template_part( 'template-parts/content/content', 'service' );?>
          <div class="hover_btn_wrap">
            <div class="hover_btn"><a href="<?php bloginfo( 'url' ); ?>/service" class="btn_gradation arrow">事業内容</a></div>
          </div>
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
	        'post_type' => 'works'    //投稿タイプの指定
			    );
			    $posts = get_posts( $args );
			    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>

					<div class="contents_slider_item">
						<a href="<?php echo get_permalink();?>">
							<img src="<?php the_post_thumbnail_url('custom-image'); ?>" alt="sumple"/>
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
					お問い合わせああああ<br>
					<span>CONTACT OUTWARD</span>
				</h2>
			</div>
			<div class="access_map">
					<?php get_template_part( 'template-parts/content/content', 'map' );?>
				<!-- <div class="googl_btn">
					<a href="https://www.google.com/maps/" target="_blank" class="btn_gradation arrow">Google map</a>
				</div> -->

			</div>
			<!-- /.access_map -->




			<div class="wrapper">
				<ul class="contact_list">
					<li class="contact_item contact_item_dp contact_item_title">株式会社アウトワード</li>
					<li class="contact_item contact_item_dp">〒819-0022 福岡県福岡市西区福重3-36-6 【<a href="https://www.google.com/maps/place/%E3%80%92819-0022+%E7%A6%8F%E5%B2%A1%E7%9C%8C%E7%A6%8F%E5%B2%A1%E5%B8%82%E8%A5%BF%E5%8C%BA%E7%A6%8F%E9%87%8D%EF%BC%93%E4%B8%81%E7%9B%AE%EF%BC%93%EF%BC%96%E2%88%92%EF%BC%96/@33.5703979,130.3158863,17z/data=!3m1!4b1!4m5!3m4!1s0x354194a88c33d149:0xf0dfdb4f61dd06f!8m2!3d33.5703979!4d130.318075" target="_blank">Google Map</a>】</li>
					<li class="contact_item contact_item_dp sp_block">FAX 092-885-1459</li>
					<li class="contact_item contact_item_dp">MAIL <a href="mailto:info@outward.jp">info@outward.jp</a></li>
				</ul>
				<div class="hover_btn"><a href="<?php bloginfo( 'url' ); ?>/contact" class="btn_gradation arrow">お問い合わせ</a></div>
			</div>
		</div>

		<div id="site" class="section_block section_block_site bg_daiya">
			<div class="wrapper">
				<h2 class="heading01 border_color03">
					運営サイト<br>
					<span>SITE</span>
				</h2>
				<ul class="contents_list contents_list_type_05">
					<li class="section_box coloring_box coloring_box03">
						<a class="section_link cf" target="_blank" href="https://www.goodfortune.jp/">
							<div class="section_thm section_thm_left">
								<img src="<?php bloginfo( 'template_url' ); ?>/img/sachikoi-150x150.jpg" alt="">
							</div>
							<div class="section_body">
								<h4 class="section_title">
									さちこい
								</h4>
								<p class="section_text pc_block">
									さちこい＜sachikoi＞は「あなたに幸が来る」「幸ある恋愛ができる」をコンセプトにしています。辛い片想いに苦しんでいる、独身で結婚ができるのか心配、恋愛が苦手……恋愛の悩みを抱える女性に向けたコラム・無料占いサイトです。<br>
									恋愛・出会い・結婚・恋愛テクなどさまざまな悩みに多種多様の占い師がお答えします。あなたにしかできない幸せの叶え方を、ぜひ「さちこい」で体感しませんか？
								</p>
								<p class="section_text sp_block">
									当たると噂の無料占い-恋愛・相性・出会い・結婚に悩む女性の無料占い-
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
