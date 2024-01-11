<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="slider-home" style="background-image: linear-gradient( rgb(0 0 0 / 20%), rgb(0 0 0 / 20%) ), url(<?php the_field('afbeeldingSlider-home'); ?>)">
    <div class="slider-home-inhoud">
        <?php if ( have_rows( 'titels_slider-home' ) ) : ?>
            <?php while ( have_rows( 'titels_slider-home' ) ) : the_row(); ?>
                <h2 class="titel-slider"><?php the_sub_field( 'titel_slider-home_1' ); ?><br><span class="sliderHome-dikgedrukt"><?php the_sub_field( 'titel_slider-home_2' ); ?></span><span class="en-home"><?php the_sub_field( 'titel_slider-home_3' ); ?></span><span class="sliderHome-dikgedrukt"><?php the_sub_field( 'titel_slider-home_4' ); ?></span></h2>
            <?php endwhile; ?>
            <?php $buttonSlider_home = get_field( 'buttonSlider-home' ); ?>
            <?php if ( $buttonSlider_home ) : ?>
                <a class="buttonSliderHome" href="<?php echo esc_url( $buttonSlider_home['url'] ); ?>" target="<?php echo esc_attr( $buttonSlider_home['target'] ); ?>"><?php echo esc_html( $buttonSlider_home['title'] ); ?></a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>
<div class="informatie-home">
    <div class="informatie-home-inhoud">
        <div class="informatie-home-c1">
            <?php if ( have_rows( 'titels-informatieImg-home' ) ) : ?>
                <?php while ( have_rows( 'titels-informatieImg-home' ) ) : the_row(); ?>
                    <h2 class="titelInfo-home"><span class="oranjeTekst"><?php the_sub_field( 'titel-infoImg-home_1' ); ?></span><?php the_sub_field( 'titel-infoImg-home_2' ); ?></h2>
                <?php endwhile; ?>
            <?php endif; ?>
            <span class="informatie-home-tekst">
                <?php the_field( 'informatie-informatieImg-home' ); ?>
            </span>
        </div>
        <div class="informatie-home-c2">
            <?php if ( get_field( 'afbeelding-infoImg-home' ) ) : ?>
                <img class="afbeeldingInfo-home" src="<?php the_field( 'afbeelding-infoImg-home' ); ?>" />
            <?php endif ?>
        </div>
    </div>
</div>
<div class="machines-home">
    <div class="titel-alleMachines"><h2 class="titelAlleMachines"><?php the_field( 'titelAlleMachines-home' ); ?></h2><hr class="oranjeLijn"></div>
    <div class="machines-home-inhoud">
        <?php if ( have_rows( 'alle_machines-home' ) ) : ?>
            <?php while ( have_rows( 'alle_machines-home' ) ) : the_row(); ?>
            <?php $link_naar_machineMachine_home = get_sub_field( 'link_naar_machineMachine-home' ); ?>
            <a href="<?php echo esc_url( $link_naar_machineMachine_home); ?>">
                <div class="machines-home-kolom">
                    <?php if ( get_sub_field( 'afbeelding_machine-home' ) ) : ?>
                        <img class="afbeelding-machine-rep" src="<?php the_sub_field( 'afbeelding_machine-home' ); ?>" />
                    <?php endif ?>
                    <div class="grijsVlak">
                        <h4 class="naamMachine-rep"><?php the_sub_field( 'naam_machine-home' ); ?></h4>
                        <div class="div-rep"><p>Capaciteit:</p><p class="capMachine-rep"><?php the_sub_field( 'capaciteitMachine-home' ); ?></p><p>kg</p></div>
                        <div class="div-rep"><p>Werkhoogte:</p><p class="hoogteMachine-rep"><?php the_sub_field( 'werkhoogteMachine-home' ); ?></p><p>m</p></div>
                        <div class="div-rep"><p>Max. reikwijdte:</p><p class="wijdteMachine-rep"><?php the_sub_field( 'maxRijkweidteMachine-home' ); ?></p><p>m</p></div>
                        <hr class="lijn-rep">
                        <div class="column-rep">
                            <div class="div-rep"><p>Huurprijs per dag:</p><p class="prijsMachine">€<?php the_sub_field( 'huurprijs_per_dagMachine-home' ); ?></p></div>
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
    <div class="divButton-alleMachines">
        <?php $button_alleMachinesHome = get_field( 'button-alleMachinesHome' ); ?>
        <?php if ( $button_alleMachinesHome ) : ?>
            <a class="button-alleMachines" href="<?php echo esc_url( $button_alleMachinesHome['url'] ); ?>" target="<?php echo esc_attr( $button_alleMachinesHome['target'] ); ?>"><?php echo esc_html( $button_alleMachinesHome['title'] ); ?></a>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

