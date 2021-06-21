<!-- Template for our primary sidebar widget. Note we need to instantiate the sidebar in our functions.php file -->
<?php
if (!is_active_sidebar( 'main-sidebar' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <!-- Adds admin log in/out link-->
    <?php wp_loginout( get_permalink() ); ?>

    <!-- show form if user is not logged in -->
    <?php if( !is_user_logged_in() ): ?>
        <!-- adds log in form directly to page -->
        <?php $args = [
            'label_username' => 'Enter your username',
            'label_password' => 'Enter your password'
            ]; ?>
        <?php wp_login_form($args); ?>
    <?php endif; ?>

    <?php dynamic_sidebar( 'main-sidebar' ); ?>

</aside>