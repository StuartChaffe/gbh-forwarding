<?php if( get_row_layout() == 'article_content' ):
    $content = get_sub_field('article_content');
?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <article>
                <div class="offset-md-2 col-md-8 col-12">
                    <?php echo $content; ?>
                </div>
            </article>
        </div>
    </div>
</div>
<?php endif; ?>