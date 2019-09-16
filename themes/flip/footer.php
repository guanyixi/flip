<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package glaunch
 */

?>

	</div><!-- #content -->

	<?php if(get_field('show_default_cta')): ?>
	<div class="default-cta">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php the_field('cta_content', 'option'); ?>
				</div>
				<div class="col-md-4">
					<div class="button-box">
						<?php if(get_field('cta_button_text_1', 'option')):?>
							<a class="<?php the_field('cta_button_style_1', 'option'); ?>" target="<?php the_field('cta_open_new_tab_1', 'option'); ?>" href="<?php the_field('cta_button_url_1', 'option'); ?>"><?php the_field('cta_button_text_1', 'option'); ?></a>
						<?php endif; ?>

						<?php if(get_field('cta_button_text_2', 'option')):?>
							<a class="<?php the_field('cta_button_style_2', 'option'); ?>" target="<?php the_field('cta_open_new_tab_2', 'option'); ?>" href="<?php the_field('cta_button_url_2', 'option'); ?>"><?php the_field('cta_button_text_2', 'option'); ?></a>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					Footer col 1
				</div>
				<div class="col-md-3 col-xs-6">
			    	Footer col 2
				</div>
				<div class="col-md-3 col-xs-6">
				    Footer col 3
				</div>
				<div class="col-md-3">
			    	Footer col 4
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

	<footer class="site-info">
		<div class="container">
			&copy;<?php echo date('Y') ?> - Company Name | All right reserved | Site by <a href="https://glantz.net" target="_blank">Glantz</a>
		</div>
	</footer><!-- #colophon -->



</div><!-- #page -->

<?php wp_footer(); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:8080/browser-sync/browser-sync-client.js?v=2.26.3'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
