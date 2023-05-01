<?php
/**
 * The template for displaying the footer.
 */

?>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col col-3">
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <div id="sidebar">
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col col-3">
                <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                    <div id="sidebar">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col col-3">
                <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                    <div id="sidebar">
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col col-3">
                <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                    <div id="sidebar">
                        <?php dynamic_sidebar( 'sidebar-4' ); ?>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</footer>
<?php
wp_footer(); ?>

</body>
</html>
