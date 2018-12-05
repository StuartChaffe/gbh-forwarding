<?php if( get_row_layout() == 'banner' ):
    $image = get_sub_field('banner_image');
    $label = get_sub_field('banner_label');
    $title = get_sub_field('banner_title');
    $mobileimage = get_sub_field('banner_mobile_image');	
    $description = get_sub_field('banner_description');
?>

<div class="hero-banner hero-banner--small u-flex" style="background-image: url(<?php echo $image ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-10 col-12">
            <?php if( $label ): ?>
                    <span class="label"><?php echo $label ?></span>
            <?php endif; ?>
            <?php if( $title ): ?>
                <h1><?php echo $title; ?></h1>
                <hr />
            <?php endif; ?>
            <?php if( $description ): ?>
                <div class="col-lg-9 col-md-8 col-10 u-p0">
                    <?php echo $description ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>