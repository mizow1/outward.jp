
<!-- FOOTER -->
<footer class="bg_01">
	<div class="wrapper">
		<h3 class="f_logo">
			<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/f_logo.png" alt="株式会社アウトワード"></a>
		</h3>
		<div id="js_pagetop" class="page_top pc_block"><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/page_top.png" alt="ページトップ"></a></div>
		<nav class="footer_nav">
			<ul class="footer_nav_list">
				<li class="footer_nav_item"><a href="<?php bloginfo( 'url' ); ?>/works"><span>WORKS</span><br>制作実績</a></li>
				<li class="footer_nav_item"><a href="<?php bloginfo( 'url' ); ?>/service"><span>SERVICE</span><br>事業内容</a></li>
				<li class="footer_nav_item"><a href="<?php bloginfo( 'url' ); ?>/company"><span>COMPANY</span><br>会社情報</a></li>
				<li class="footer_nav_item"><a href="<?php bloginfo( 'url' ); ?>/recruit"><span>RECRUIT</span><br>求人・採用情報</a></li>
				<li class="footer_nav_item"><a href="<?php bloginfo( 'url' ); ?>/contact"><span>CONTACT</span><br>お問い合わせ</a></li>
				<li class="footer_nav_item"><a href="<?php bloginfo( 'url' ); ?>/news"><span>NEWS</span><br>お知らせ</a></li>
			</ul>
		</nav>
		<nav class="footer_nav_sub">
			<ul class="footer_nav_sub_list f12">
				<li class="footer_nav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/policy">プライバシーポリシー</a></li>
				<li class="footer_nav_sub_item"><a href="<?php bloginfo( 'url' ); ?>/sitemap">サイトマップ</a></li>
			</ul>
		</nav>
		<div class="copyright"><small>Copyright (C) OUTWARD Co.,LTD. All Rights Reserved.</small></div>
	</div>
</footer>
<?php wp_footer(); ?>

<?php if( is_front_page() || is_page('company') ): ?>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/map.js"></script>
<?php endif; ?>

</body>
</html>
<?php global $template;
	$template_name = basename($template, '.php');
	echo "<!--";var_dump('templatename',$template_name);echo "-->";
?>
