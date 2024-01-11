<?php
/*
Template Name: Aanbod
*/

get_header(); ?>

<div class="slider-aanbod" style="background-image: linear-gradient( rgb(0 0 0 / 20%), rgb(0 0 0 / 20%) ), url(<?php the_field('afbeeldingSlider-aanbod'); ?>)">
    <div class="slider-aanbod-inhoud">
        <h2 class="titel-aanbod"><?php the_field( 'titelSlider-aanbod' ); ?></h2>
    </div>
</div>

<div class="aanbod">
    <div class="titel-alleMachines"><h2 class="titelAlleMachines"><?php the_field( 'titelAanbod' ); ?></h2><hr class="oranjeLijn"></div>
    <div class="machines-home-inhoud">
        <?php if ( have_rows( 'alle_machines-aanbod' ) ) : ?>
            <?php while ( have_rows( 'alle_machines-aanbod' ) ) : the_row(); ?>
            <?php $link_naar_machineMachine_aanbod = get_sub_field( 'link_naar_machineMachine-aanbod' ); ?>
            <a href="<?php echo esc_url( $link_naar_machineMachine_aanbod); ?>">
                <div class="machines-home-kolom">
                    <?php if ( get_sub_field( 'afbeelding_machine-aanbod' ) ) : ?>
                        <img class="afbeelding-machine-rep" src="<?php the_sub_field( 'afbeelding_machine-aanbod' ); ?>" />
                    <?php endif ?>
                    <div class="grijsVlak">
                        <h4 class="naamMachine-rep"><?php the_sub_field( 'naam_machine-aanbod' ); ?></h4>
                        <div class="div-rep"><p>Capaciteit:</p><p class="capMachine-rep"><?php the_sub_field( 'capaciteitMachine-aanbod' ); ?></p><p>kg</p></div>
                        <div class="div-rep"><p>Werkhoogte:</p><p class="hoogteMachine-rep"><?php the_sub_field( 'werkhoogteMachine-aanbod' ); ?></p><p>m</p></div>
                        <div class="div-rep"><p>Max. reikwijdte:</p><p class="wijdteMachine-rep"><?php the_sub_field( 'maxRijkweidteMachine-aanbod' ); ?></p><p>m</p></div>
                        <hr class="lijn-rep">
                        <div class="column-rep">
                            <div class="div-rep"><p>Huurprijs per dag:</p><p class="prijsMachine">€<?php the_sub_field( 'huurprijs_per_dagMachine-aanbod' ); ?></p></div>
                            <i class="fa fa-long-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </a>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

