<?php get_header(); ?>

<?php if( have_rows('flexible_content') ):
	while ( have_rows('flexible_content') ) : the_row(); ?>
		<?php include 'partials/hero-banner.php'; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php include 'partials/block-links-large.php'; ?>
<?php endwhile; ?>

<?php if( have_rows('flexible_content') ):
	while ( have_rows('flexible_content') ) : the_row(); ?>
		<?php include 'partials/content-block.php'; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php include 'partials/content-block.php'; ?>
	<?php include 'partials/squares.php'; ?>
	<?php include 'partials/clients.php'; ?>
	<?php include 'partials/footer-cta.php'; ?>
<?php endwhile; ?>

<?php get_footer(); ?>