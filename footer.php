<?php
/*
 * The main footer
 */

// Obtenir l'ID de la page actuelle
$current_page_id = get_the_ID();
// Obtenir l'ID de la page parente
$parent_id = wp_get_post_parent_id($current_page_id);
?>
            </div><!-- #content -->
        <footer id="footer" class="footer block overflow-x-clip relative z-[50]">
            <?= get_template_part('template-parts/footer/footer-before'); ?>
	        <?= get_template_part('template-parts/footer/footer-reassurance') ?>
            <div class="">
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>