<!-- Main Index and Primary Fallback -->
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="main-site" role="main">
        <!-- WordPress Loop: If we have posts, this will look and display them-->
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <!-- Retrieves our content template in the template-parts folder -->
        <?php get_template_part('template-parts/content')?>
        <!-- end looping through posts -->
        <?php endwhile; else : ?>
        <!-- get 404 content -->
        <?php get_template_part( 'template-parts/content', 'none'); ?>
        <!-- end if statement -->
        <?php endif; ?>
    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>