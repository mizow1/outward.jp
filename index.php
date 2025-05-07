<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="main">
		    <!-- ▼▼▼mainビジュアル▼▼▼ -->
		    <div class="mv">
		      <img src="img/mv/01.png" alt="">
		    </div>
		    <!-- ▲▲▲mainビジュアル▲▲▲ -->

		    <!-- ▼▼▼新着▼▼▼ -->
		      <div class="new_arrival bg_grad">
		        <div class="wrapper">
		          <a href="news.html">
		            <div class="section_box">
		              <div class="section_thm section_thm_left">NEWS</div>
		              <div class="section_body">
		                <p class="section_date">2019.06.01(sut)</p>
		                <p class="section_text">アウトワードホームページリニューアルしました</p>
		              </div>
		            </div>
		          </a>
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
		        <div class="hover_btn pc_block"><a class="hover_btn_link hover_btn_link01 hover_btn_link_company" href="company.html#company_outline"><img src="img/btn/company_sp.png" alt="会社概要"></a></div>
		        <div class="campany_contents campany_contents_pc pc_block">
		          <ul class="contents_list">
		            <li class="contents_item">
		              <div class="contents_img"><img src="img/company01.png" alt="アウトワードの強み"></div>
		              <h4 class="contents_title">
		                <span>アウトワードの強み</span><br>
		                STRENGTH-01<br>
		                IT分野における統合的なサポート
		              </h4>
		              <p class="contents_text">
		                各種デザインの作成、必要な機器の導入、システム開発から保守・運用サポート時に求められるセキュリティ対策、アクセス解析、プロモーションやパフォーマンス調査まで一括した体制で行います。
		              </p>
		            </li>
		            <li class="contents_item">
		              <div class="contents_img"><img src="img/company02.png" alt="アウトワードの強み"></div>
		              <h4 class="contents_title">
		                <span>アウトワードの強み</span><br>
		                STRENGTH-02<br>
		                効果を見定め費用対効果に<br>
		                優れたホームページの構築
		              </h4>
		              <p class="contents_text">
		                お客様の初期投資をなるべく抑え、しっかりと効果を見定めた上でホームページによる広告宣伝の方針を決定いたします。ホームページを作成する前に、お客様の業態、サービスをしっかりとヒアリングさせていただきます。
		              </p>
		            </li>
		            <li class="contents_item">
		              <div class="contents_img"><img src="img/company03.png" alt="アウトワードの強み"></div>
		              <h4 class="contents_title">
		                <span>アウトワードの強み</span><br>
		                STRENGTH-03<br>
		                安価に抑えるソリューションの<br>
		                開発
		              </h4>
		              <p class="contents_text">
		                昨今、Webシステムに保存される個人情報等に代表される、プライバシー情報の保存に関してはセキュリティーの保たれるデーターベースの使用が欠かせないものとなっております。 当社は高価になるデーターベースを含むシステム開発を安価に抑えるソリューションの開発に邁進し、これまで多くの実績を上げてまいりました。
		              </p>
		            </li>
		          </ul>
		          <!-- /.contents_list -->
		        </div>
		        <!-- .campany_contents_pc -->
		      </div>
		      <!-- /.wrapper -->

		      <div class="campany_contents campany_contents_sp sp_block">
		        <ul class="contents_list">
		          <li class="contents_item contents_item_type01">
		            <div class="contents_img"><img src="img/company01_sp.png" alt="アウトワードの強み"></div>
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
		          </li>
		          <li class="contents_item contents_item_type02">
		            <div class="contents_img"><img src="img/company02_sp.png" alt="アウトワードの強み"></div>
		            <div class="contents_item_wrap">
		              <h4 class="contents_title">
		                <span>アウトワードの強み</span><br>
		                STRENGTH-02<br>
		                効果を見定め費用対効果に
		                優れたホームページの構築
		              </h4>
		              <p class="contents_text">
		                お客様の初期投資をなるべく抑え、しっかりと効果を見定めた上でホームページによる広告宣伝の方針を決定いたします。ホームページを作成する前に、お客様の業態、サービスをしっかりとヒアリングさせていただきます。
		              </p>
		            </div>
		            <!-- ./contents_item_wrap -->
		          </li>
		          <li class="contents_item contents_item_type01">
		            <div class="contents_img"><img src="img/company03_sp.png" alt="アウトワードの強み"></div>
		            <div class="contents_item_wrap">
		              <h4 class="contents_title">
		                <span>アウトワードの強み</span><br>
		                STRENGTH-03<br>
		                安価に抑えるソリューションの
		                開発
		              </h4>
		              <p class="contents_text">
		                昨今、Webシステムに保存される個人情報等に代表される、プライバシー情報の保存に関してはセキュリティーの保たれるデーターベースの使用が欠かせないものとなっております。 当社は高価になるデーターベースを含むシステム開発を安価に抑えるソリューションの開発に邁進し、これまで多くの実績を上げてまいりました。
		              </p>
		            </div>
		            <!-- ./contents_item_wrap -->
		          </li>
		          <li class="hover_btn sp_block"><a class="hover_btn_link hover_btn_link01 hover_btn_link_company" href="#"><img src="img/btn/company_sp.png" alt="会社概要"></a></li>
		        </ul>
		        <!-- /.contents_list -->
		      </div>
		      <!-- .campany_contents_sp -->
		    </div>

		    <div id="service" class="section_block section_block_service bg_base">
		      <div class="wrapper">
		        <h2 class="heading01 border_color02">
		          事業内容<br>
		          <span>SERVICE</span>
		        </h2>
		      </div>
		      <div class="service_main_img">
		        <img class="pc_inline" src="img/service_main_img.png" alt="サービス内容">
		        <img class="sp_inline" src="img/service_main_img_sp.png" alt="サービス内容">
		      </div>
		      <div class="wrapper">
		        <p class="section_dp section_indent">
		          アウトワードはWEBシステム開発をはじめ、ホームページ制作、SEO/SEM対策、ハードウェア構築、ネットワーク構築など… お客様の「困った」、<br class="pc_block">
		          「こんなことが出来れば」にお応え出来る企業です!
		        </p>
		        <!-- ./wrapper -->
		        <div class="hover_btn"><a class="hover_btn_link hover_btn_link01 hover_btn_link_service" href="service.html"><img src="img/btn/service_sp.png" alt="事業案内"></a></div>
		      </div>
		      <div class="service_contents bg_03">
		        <div class="wrapper">
		          <ul class="contents_list contents_list_type_02">
		            <li class="contents_item service_contents_item01">
		              <a class="contents_item_link coloring_box coloring_box02" href="service-system.html">
		                <h3 class="contents_title">WEBシステム開発<br><span>⇀</span></h3>
		                <p class="contents_text">
		                  業務システムの構築、会員サービス運用、より機能的なホームページを作成。
		                </p>
		              </a>
		            </li>
		            <li class="contents_item service_contents_item02">
		              <a class="contents_item_link coloring_box coloring_box02" href="service-digitalcontents.html">
		                <h3 class="contents_title">デジタルコンテンツ<br><span>⇀</span></h3>
		                <p class="contents_text">PC版・スマホ版・アプリのデジタルコンテンツを開発制作。</p>
		              </a>
		            </li>
		            <li class="contents_item service_contents_item03">
		              <a class="contents_item_link coloring_box coloring_box02" href="service-website.html">
		                <h3 class="contents_title">WEBサイト制作<br><span>⇀</span></h3>
		                <p class="contents_text">業務システムの構築、会員サービス運用、より機能的なホームページを作成。</p>
		              </a>
		            </li>
		            <li class="contents_item service_contents_item04">
		              <a class="contents_item_link coloring_box coloring_box02" href="service-app.html">
		                <h3 class="contents_title">WEBメディア制作<br><span>⇀</span></h3>
		                <p class="contents_text">PC版・スマホ版・アプリのデジタルコンテンツを開発制作。</p>
		              </a>
		            </li>
		            <li class="contents_item service_contents_item05">
		              <a class="contents_item_link coloring_box coloring_box02" href="service-graphicwork.html">
		                <h3 class="contents_title">ネイティブアプリ制作<br><span>⇀</span></h3>
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
		        <div class="hover_btn pc_block"><a class="hover_btn_link hover_btn_link01 hover_btn_link_works" href="works.html"><img src="img/btn/works.png" alt="制作実績"></a></div>
		      </div>




		      <!-- ▼▼▼スライダー実装▼▼▼ -->
		      <div id="slider" class="contents_slider contents_slider_works">
		        <div class="contents_slider_item">
		          <a href="#">
		            <img src="img/slider/works01.png" alt="制作実績1" />
		          </a>
		          <p class="contents_slider_text"><a href="works_detail.html">Good不動産</a></p>
		        </div>
		        <div class="contents_slider_item">
		          <a href="#">
		            <img src="img/slider/works01.png" alt="制作実績2">
		          </a>
		          <p class="contents_slider_text"><a href="works_detail.html">Good不動産</a></p>
		        </div>
		        <div class="contents_slider_item">
		          <a href="#">
		            <img src="img/slider/works01.png" alt="制作実績3">
		          </a>
		          <p class="contents_slider_text"><a href="works_detail.html">Good不動産</a></p>
		        </div>
		      </div>
		      <!-- ▲▲▲スライダー実装▲▲▲ -->





		      <div class="wrapper">
		        <div class="hover_btn sp_block"><a class="hover_btn_link hover_btn_link01 hover_btn_link_works" href="#"><img src="img/btn/works_sp.png" alt="制作実績"></a></div>
		      </div>
		    </div>

		    <div id="news" class="section_block section_block_news bg_daiya">
		      <div class="wrapper">
		        <h2 class="heading01 border_color04">
		          お知らせ<br>
		          <span>NEWS</span>
		        </h2>
		        <ul class="contents_list contents_list_type_03">
		          <li class="section_box coloring_box coloring_box02">
		            <a class="section_link" href="news_detail.html">
		              <div class="section_body">
		                <p class="section_date">
		                  .section_date
		                </p>
		                <div class="section_category">カテゴリ</div>
		                <p class="section_text">
		                  section_text
		                </p>
		                <div class="arrow_01"><img src="img/arrow01.png" alt=""></div>
		              </div>
		            </a>
		          </li>
		          <!-- /.section_box -->
		          <li class="section_box coloring_box coloring_box02">
		            <a class="section_link" href="news_detail.html">
		              <div class="section_body">
		                <p class="section_date">
		                  .section_date
		                </p>
		                <div class="section_category">カテゴリ</div>
		                <p class="section_text">
		                  section_text
		                </p>
		                <div class="arrow_01"><img src="img/arrow01.png" alt=""></div>
		              </div>
		            </a>
		          </li>
		          <!-- /.section_box -->
		          <li class="section_box coloring_box coloring_box02">
		            <a class="section_link" href="news_detail.html">
		              <div class="section_body">
		                <p class="section_date">
		                  .section_date
		                </p>
		                <div class="section_category">カテゴリ</div>
		                <p class="section_text">
		                  section_text
		                </p>
		                <div class="arrow_01"><img src="img/arrow01.png" alt=""></div>
		              </div>
		            </a>
		          </li>
		          <!-- /.section_box -->
		          <li class="section_box coloring_box coloring_box02">
		            <a class="section_link" href="news_detail.html">
		              <div class="section_body">
		                <p class="section_date">
		                 .section_date
		                </p>
		                <div class="section_category">カテゴリ</div>
		                <p class="section_text">
		                  section_text
		                </p>
		                <div class="arrow_01"><img src="img/arrow01.png" alt=""></div>
		              </div>
		            </a>
		          </li>
		          <!-- /.section_box -->
		        </ul>
		        <!-- /.news_list -->
		        <div class="hover_btn"><a class="hover_btn_link hover_btn_link01 hover_btn_link_news" href="news.html"><img src="img/btn/news_sp.png" alt="お知らせ"></a></div>
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
		        <ul class="hover_btn_list">
		          <li class="hover_btn"><a class="hover_btn_link hover_btn_link01 hover_btn_link_recruit" href="recruit.html"><img src="img/btn/recruit_sp.png" alt="求人・採用情報"></a></li>
		          <li class="hover_btn"><a class="hover_btn_link hover_btn_link01 hover_btn_link_recruit_form" href="entry.html"><img src="img/btn/recruit_form_sp.png" alt="求人フォーム"></a></li>
		        </ul>
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
		          <li class="contact_item hover_btn"><a class="hover_btn_link hover_btn_link01 hover_btn_link_contact" href="contact.html"><img src="img/btn/contact_sp.png" alt="お問い合わせ"></a></li>
		        </ul>
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
		            <a class="section_link" href="#">
		              <div class="section_thm section_thm_left">
		                <img src="img/sample.png" alt="">
		              </div>
		              <div class="section_body">
		                <h4 class="section_title">
		                  サイト名サイト名サイト名サイト名サイト名サイト名
		                </h4>
		                <p class="section_text pc_block">
		                  説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文
		                </p>
		                <div class="arrow_01"><img src="img/arrow01.png" alt=""></div>
		              </div>
		            </a>
		          </li>
		          <!-- /.section_box -->
		          <li class="section_box coloring_box coloring_box03">
		            <a class="section_link" href="#">
		              <div class="section_thm section_thm_left">
		                <img src="img/sample.png" alt="">
		              </div>
		              <div class="section_body">
		                <h4 class="section_title">
		                  サイト名サイト名サイト名サイト名サイト名サイト名
		                </h4>
		                <p class="section_text pc_block">
		                  説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文
		                </p>
		                <div class="arrow_01"><img src="img/arrow01.png" alt=""></div>
		              </div>
		            </a>
		          </li>
		        <!-- /.section_box -->
		        </ul>
		      </div>
		    </div>

		    <div class="section_block section_block_address bg_04">
		      <div class="wrapper wrapper02">
		        <p class="address_caption f24">ご相談・ご質問等ございましたら、<br class="sp_block">お気軽にお問い合わせください。</p>
		        <div class="section_wrap">
		          <a href="tel:0928851364">
		            <div class="section_box">
		              <div class="section_thm">
		                <img src="img/tell.png" alt="電話" title="電話">
		              </div>
		              <h3 class="section_body section_body01 f24">
		                <span class="f50">092-885-1364</span><br>
		                <span class="tell_time">受付時間　平日10：00～19：00</span>
		              </h3>
		            </div>
		            <!-- .section_box -->
		          </a>
		          <a href="contact.html">
		            <div class="section_box">
		              <div class="section_thm">
		                <img src="img/mail.png" alt="メールアドレス" title="メールアドレス">
		              </div>
		              <h3 class="section_body section_body02 f40">
		                お問い合わせフォーム
		              </h3>
		            </div>
		            <!-- .section_box -->
		          </a>

		        </div>
		        <!-- .section_wrap -->
		      </div>
		    </div>
		    <!-- ▲▲▲contents▲▲▲ -->
		  </div>
		  <!-- /.main -->

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
