<?php if( get_row_layout() == 'content_block' ):
    $title = get_sub_field('content_title');
    $content = get_sub_field('content_content');
    $buttontext = get_sub_field('content_button_text');
	$buttonlink = get_sub_field('content_button_link');
	$background = get_sub_field('content_background');
?>
<div class="section-<?php echo $background; ?>">
	<div class="content-block">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="offset-md-3 col-md-6 col-12 u-center">
					<?php if( $title ): ?>
						<h2><?php echo $title; ?></h2>
						<hr />
					<?php endif; ?>
					<?php if( $content ): ?>
						<?php echo $content; ?>
					<?php endif; ?>
					<?php if( $buttontext ): ?>
						<a class="btn btn--border" href="<?php echo $buttonlink; ?>"><?php echo $buttontext; ?></a>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>