<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="slider-aanbod" style="background-image: linear-gradient( rgb(0 0 0 / 20%), rgb(0 0 0 / 20%) ), url(<?php the_field('afbeeldingSliderContact'); ?>)">
    <div class="slider-aanbod-inhoud">
        <h2 class="titel-aanbod"><?php the_field( 'titelSliderContact' ); ?></h2>
    </div>
</div>
<div class="contact">
    <div class="contact-inhoud">
        <div class="contact-c1">
            <h2 class="titel-contact"><?php the_field( 'titelInfoContact' ); ?></h2>
            <span class="informatie-contact"><?php the_field( 'informatieContact_1' ); ?></span>
            <?php $link_contact_1 = get_field( 'link_contact_1' ); ?>
            <?php if ( $link_contact_1 ) : ?>
                <a class="linkContact" href="<?php echo esc_url( $link_contact_1['url'] ); ?>" target="<?php echo esc_attr( $link_contact_1['target'] ); ?>"><?php echo esc_html( $link_contact_1['title'] ); ?></a>
            <?php endif; ?>
            <?php $link_contact_2 = get_field( 'link_contact_2' ); ?>
            <?php if ( $link_contact_2 ) : ?>
                <a class="linkContact" href="<?php echo esc_url( $link_contact_2['url'] ); ?>" target="<?php echo esc_attr( $link_contact_2['target'] ); ?>"><?php echo esc_html( $link_contact_2['title'] ); ?></a>
            <?php endif; ?>
            <span class="meerInfo-contact"><?php the_field( 'meer_informatieContact' ); ?></span>
            <span class="contact-form"><?php the_field( 'contact_formulierContact' ); ?></span>
        </div>
        <div class="contact-c2">
            <span class="googleMaps"><?php the_field( 'google_mapsContact' ); ?></span>
        </div>
    </div>
</div>





<?php get_footer(); ?>

