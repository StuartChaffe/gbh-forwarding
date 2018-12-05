<footer role="contentinfo">
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
					<p>&copy; copyright <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
				</div>
				<div class="col-md-6 col-12 u-right-align">
				<?php wp_nav_menu( array('theme_location' => 'footer','menu_class' => 'footer-menu',) ); ?>
				</div>
			</div>
		</div>
	</div>
</footer><!-- footer -->

<?php wp_footer(); ?>

</body>
</html>