<!-- Template for our 404 page -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header class="entry-header">
        <h1><?php esc_html_e( '404 - Page Not Found!', 'wphierarchy' ) ?></h1>
    </header>

    <div class="entry-content">
        <p><?php esc_html_e( 'Sorry! No content found.', 'wpheirarchy' ); ?></p>
    </div>

    <!-- This will add a search for the user to find what they are looking for -->
    <p><?php echo get_search_form(); ?></p>

</article>