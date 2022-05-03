<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer class="footer">
                <div class="footer__container">
                    <div class="footer__contact-block">
                        <a href="tel:+12124571910" class="footer__contact-item">+1 212 457 1910</a>
                        <a href="mailto:msignshop@gmail.com" class="footer__contact-item">msignshop@gmail.com</a>
                    </div>
                    <div class="footer__address-block">
                        <a class="footer__address-item" href="https://goo.gl/maps/rWuGxDDrPmYjsKRa9">438 w 37th st </a>
                        <a class="footer__address-item" href="https://goo.gl/maps/rWuGxDDrPmYjsKRa9">New York, NY 10018</a>
                    </div>
                    <div class="footer__mobile-block">
                        <a class="footer__mobile-item" href="https://goo.gl/maps/rWuGxDDrPmYjsKRa9"><img src="<?= get_template_directory_uri() ?>/img/location.png" alt=""></a>
                        <a class="footer__mobile-item" href="mailto:msignshop@gmail.com"><img src="<?= get_template_directory_uri() ?>/img/email.png" alt=""></a>
                        <a class="footer__mobile-item" href="tel:+12124571910"><img src="<?= get_template_directory_uri() ?>/img/call.png" alt=""></a>
                    </div>
                </div>
            </footer>

		<?php wp_footer(); ?>   
	</body>
</html>
