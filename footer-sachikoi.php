
<!-- FOOTER -->
<div class="sachikoi_footer">
	Copyright (C) OUTWARD Co.,LTD. All Rights Reserved.
</div>
<?php wp_footer(); ?>

<?php
//global $template;
//$template_name = basename($template, '.php');
//echo $template_name;
?>
<?php if( is_front_page() || is_page('company') ): ?>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/map.js"></script>
<?php endif; ?>
</div><!-- /.page_sachikoi -->
</body>
</html>
