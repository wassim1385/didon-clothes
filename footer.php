<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Juliane Felken
 */

?>
        <footer>
            <section class="footer-widgets">
                <div class="container">
                    <div class="row">Footer widgets</div>
                </div>
            </section>
            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text col-12 col-md-6">
                            <p><?php echo get_theme_mod( 'set_copyright', 'Copyright X - All rights reserved' ); ?></p>
                        </div>
                        <div class="footer-menu col-12 col-md-6 text-left text-md-right">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'juliane_footer_menu'
                                ));
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>