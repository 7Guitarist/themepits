<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
<div class="clearfix"></div>
</div><!-- end of #inner-page-wrapper .inner -->
</div><!-- end of #inner-page-wrapper -->
<?php endif ?>
</main>

<footer class="footer">
	<div class="footer-top">
		<!-- Footer Contact -->
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Footer Contact") ) : ?>
		<?php endif ?>

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Footer Group") ) : ?>
		<?php endif ?>

		<div class="footer-nav">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'secondary-menu','depth'=>1 ) ); ?>
		</div>
	</div>
	<!-- Footer Bottom -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Footer Outro") ) : ?>
	<?php endif ?>



	<p class="copyright">Copyright ©
		<?php echo do_shortcode('[currentYear]')?> <span class="sitename">Amie Ceder-Bracey.</span> All rights
		reserved. <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap</a>.
		<?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]'); ?>
	</p>
	<div class="mls">
		<em class="ai-font-eho" title="MLS"></em>
		<em class="ai-font-realtor-mls" title="MLS"></em>
	</div>
</footer>

<?php do_action('aios_neighborhoods_footer')?>
<?php do_action('aios_landing_page_footer')?>

</div><!-- end of #main-wrapper -->


<?php wp_footer(); ?>
</body>

</html>