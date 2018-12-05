<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php include 'partials/loop.php'; ?>
<?php endwhile; ?>


<?php while ( have_posts() ) : the_post(); ?>

	<?php include 'partials/clients.php'; ?>
	<?php include 'partials/vertical-tabs.php'; ?>
<?php endwhile; ?>

<?php get_footer(); ?>