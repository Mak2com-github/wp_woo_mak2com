<?php
// Obtenir l'ID de la page actuelle
$current_page_id = get_the_ID();
// Obtenir l'ID de la page parente
$parent_id = wp_get_post_parent_id($current_page_id);
?>
<div>
	<?php if ( has_nav_menu( 'primary' ) ) : ?>
        <nav id="site-navigation" aria-label="primary-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav><!-- #site-navigation -->
	<?php endif; ?>
</div>