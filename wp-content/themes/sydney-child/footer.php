<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>


	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<?php $container 	= get_theme_mod( 'footer_credits_container', 'container' ); ?>
	<?php $credits 		= sydney_footer_credits(); ?>

	<footer class="costum-footer">
		<div class="costum-footer-inhoud">
			<div class="footer-kolom footer-kolom-1">
				<h2 class="titelFooter"><?php the_field( 'titel-footer-k1', 'option' ); ?></h2>
				<?php if ( have_rows( 'menu_items-footer-k1', 'option' ) ) : ?>
					<?php while ( have_rows( 'menu_items-footer-k1', 'option' ) ) : the_row(); ?>
						<?php $menu_item_footer_k1 = get_sub_field( 'menu_item-footer-k1' ); ?>
						<?php if ( $menu_item_footer_k1 ) : ?>
							<a class="menuItemLinkFooter" href="<?php echo esc_url( $menu_item_footer_k1['url'] ); ?>" target="<?php echo esc_attr( $menu_item_footer_k1['target'] ); ?>"><?php echo esc_html( $menu_item_footer_k1['title'] ); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // No rows found ?>
				<?php endif; ?>
			</div>
			<div class="footer-kolom footer-kolom-2">
				<?php if ( get_field( 'logo-footer-k2', 'option' ) ) : ?>
					<img class="logo-footer" src="<?php the_field( 'logo-footer-k2', 'option' ); ?>" />
				<?php endif ?>
				<?php $link_footer_k2 = get_field( 'link-footer-k2', 'option' ); ?>
				<?php if ( $link_footer_k2 ) : ?>
					<a target="_blank" class="facebookLink" href="<?php echo esc_url( $link_footer_k2); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<?php endif; ?>
			</div>
			<div class="footer-kolom footer-kolom-3">
				<h2 class="titelFooter"><?php the_field( 'titel-footer-k3', 'option' ); ?></h2>
				<span class="info-footer-k3"><?php the_field( 'informatie-footer-k3', 'option' ); ?></span>
				<?php $link_contact_footer_k3_1 = get_field( 'link_contact-footer-k3_1', 'option' ); ?>
				<?php if ( $link_contact_footer_k3_1 ) : ?>
					<a class="linkFooter-k3" href="<?php echo esc_url( $link_contact_footer_k3_1['url'] ); ?>" target="<?php echo esc_attr( $link_contact_footer_k3_1['target'] ); ?>"><?php echo esc_html( $link_contact_footer_k3_1['title'] ); ?></a>
				<?php endif; ?>
				<?php $link_contact_footer_k3_2 = get_field( 'link_contact-footer-k3_2', 'option' ); ?>
				<?php if ( $link_contact_footer_k3_2 ) : ?>
					<a class="linkFooter-k3" href="<?php echo esc_url( $link_contact_footer_k3_2['url'] ); ?>" target="<?php echo esc_attr( $link_contact_footer_k3_2['target'] ); ?>"><?php echo esc_html( $link_contact_footer_k3_2['title'] ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->

	<div class="costumCredit-footer">
		<div class="costumCredit-footer-inhoud">
			<?php echo wp_kses_post( $credits ); ?>
		</div>
	</div>

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
