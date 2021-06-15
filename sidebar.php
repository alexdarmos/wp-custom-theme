<!-- Template for our primary sidebar widget. Note we need to instantiate the sidebar in our functions.php file -->
<?php
if (!is_active_sidebar( 'main-sidebar' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'main-sidebar' ); ?>
</aside>