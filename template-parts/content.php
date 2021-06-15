<!-- Tempalte for our main content. Note: This will be looped through in the index.php page for each post -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    
    <header class="entry-header">
        <?php the_title('<h1>','</h1>'); ?>
        <div class="byline">
            <?php esc_html_e( 'Author: ' ); the_author();?> 
        </div>
    </header>

    <div class="entry-content">
        <?php the_content('<h1>','</h1>'); ?>
    </div>

    <!-- Check if comments are active, if so, let's include them -->
    <?php if ( comments_open() ) : ?>

        <?php comments_template(); ?>

    <?php endif; ?>

</article>