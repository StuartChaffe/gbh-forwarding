<?php if( have_rows('flexible_content') ):
	while ( have_rows('flexible_content') ) : the_row(); ?>
		<?php include 'hero-banner-small.php'; ?>
		<?php include 'content-block.php'; ?>
		<?php include 'article-block.php'; ?>
<?php endwhile; ?>
<?php endif; ?>