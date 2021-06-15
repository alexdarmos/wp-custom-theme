
    
    </div> <!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    
    <?php get_sidebar( 'footer' ); ?>

    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpcustomtheme' ) ); ?>">
        <?php printf( esc_html__( 'Proudly powered by %s', 'wpcustomtheme' ), 'Wordpress' ); ?>
    </a>

</footer>

</div> <!-- #page -->

<?php wp_footer(); ?>

</body>
</html>