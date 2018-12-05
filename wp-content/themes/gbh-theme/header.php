<?php
	// Doctype and <head>
	get_template_part( 'partials/head' );
?>

<header role="banner">
	<div class="container u-flex u-flex-space">
		<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="GBH Logo"></a>
		<nav>
		<a href="#" class="menu-button">Menu
			<svg class="svg-open" width="21px" height="15px" viewBox="0 0 21 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<g class="svg-fill" transform="translate(-269.000000, -22.000000)">
						<g>
							<g  transform="translate(269.000000, 22.000000)">
								<rect x="0" y="0" width="21" height="3" rx="1.5"></rect>
								<rect x="0" y="6" width="21" height="3" rx="1.5"></rect>
								<rect x="0" y="12" width="21" height="3" rx="1.5"></rect>
							</g>
						</g>
					</g>
				</g>
			</svg>
			<svg class="svg-close" width="21px" height="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.042 24.042">
				<g data-name="Group 242" transform="translate(-296.979 -72.979)">
					<rect data-name="Rectangle 88" class="cls-1" width="30" height="4" rx="2" transform="translate(299.808 72.979) rotate(45)"/>
					<rect data-name="Rectangle 89" class="cls-1" width="30" height="4" rx="2" transform="translate(296.979 94.192) rotate(-45)"/>
				</g>
			</svg>
		</a>
		<?php wp_nav_menu( array('theme_location' => 'primary','container_class' => 'menu',) ); ?>
		</nav>
	</div>
</header><!-- /page-masthead -->