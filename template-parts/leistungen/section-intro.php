<section class="section section-leistungen__intro">
    <div class="container-fluid p-0">
        <div class="row g-0 section-leistungen__row justify-content-center" style="background:url('<?php echo wp_upload_dir()['url'] . '/Abbruch.jpg' ?>') no-repeat;">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12 col-lg-6"></div>
                    <div class="col-12 col-lg-6 section-leistungen__col">
                        <h1 class="title__green"><?php the_field('section_intro_title'); ?></h1>
                        <p class="text__dark"><?php the_field('section_intro_text'); ?></p>
                        <ul>
                            <?php
                            if( have_rows('section_intro_menu_repeater') ):
                            while( have_rows('section_intro_menu_repeater') ) : the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('menu_link'); ?>" class="section_leistungen_menu_list"><?php the_sub_field('menu_item'); ?></a>
                            </li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-leistungen__abbruch">
    <div class="container-fluid p-0">
        <div class="row g-0 section-leistungen__abbruch-row justify-content-center">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1 class="title__black"><?php the_field('section_abbruch_title'); ?></h1>
                        <p class="text__dark"><?php the_field('section_abbruch_text'); ?></p>
                        <a href="<?php the_field('section_abbruch_button_link'); ?>" class="btn btn__white"><?php _e( 'Mehr Erfahren', 'brenta' ); ?></a>
                    </div>
                    <div class="col-12 col-lg-6"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-leistungen__entkernen" style="background:url('<?php echo wp_upload_dir()['url'] . '/bg_Leistungen.jpg' ?>') no-repeat;">
    <div class="container-fluid p-0">
        <div class="row g-0 section-leistungen__entkernen-row justify-content-center">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12 col-lg-6"></div>
                    <div class="col-12 col-lg-6">
                        <h1 class="title__bright"><?php the_field('section_entkernen_title'); ?></h1>
                        <p class="text__bright"><?php the_field('section_entkernen_text'); ?></p>
                        <a href="<?php the_field('section_entkernen_button_link'); ?>" class="btn btn__transparent"><?php _e( 'Mehr Erfahren', 'brenta' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<img class="leistungen__sepimg-margin270" src="<?php echo wp_upload_dir()['url'] . '/Entkernen.jpg' ?>" title="" alt="">

<section class="section section-leistungen__demontage">
    <div class="container-fluid p-0">
        <div class="row g-0 section-leistungen__demontage-row justify-content-center">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1 class="title__black"><?php the_field('section_demontage_title'); ?></h1>
                        <p class="text__dark"><?php the_field('section_demontage_text'); ?></p>
                        <a href="<?php the_field('section_demontage_button_link'); ?>" class="btn btn__white"><?php _e( 'Mehr Erfahren', 'brenta' ); ?></a>
                    </div>
                    <div class="col-12 col-lg-6"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<img class="leistungen__sepimg-margin10" src="<?php echo wp_upload_dir()['url'] . '/Demontage.jpg' ?>" title="" alt="">

<section class="section section-leistungen__entsorgen">
    <div class="container-fluid p-0">
        <div class="row g-0 section-leistungen__entsorgen-row justify-content-center">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12 col-lg-6"></div>
                    <div class="col-12 col-lg-6">
                        <h1 class="title__black"><?php the_field('section_entsorgen_title'); ?></h1>
                        <p class="text__dark"><?php the_field('section_entsorgen_text'); ?></p>
                        <a href="<?php the_field('section_entsorgen_button_link'); ?>" class="btn btn__transparent-green"><?php _e( 'Mehr Erfahren', 'brenta' ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<img class="leistungen__sepimg-margin275" src="<?php echo wp_upload_dir()['url'] . '/Entsorgen.jpg' ?>" title="" alt="">

<section class="section section-leistungen__beton">
    <div class="container-fluid p-0">
        <div class="row g-0 section-leistungen__beton-row justify-content-center">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title__bright"><?php the_field('section_beton_title'); ?></h1>
                        <div class="col-12 col-lg-6">
                            <p class="text__bright"><?php the_field('section_beton_text'); ?></p>
                            <a href="<?php the_field('section_beton_button_link'); ?>" class="btn btn__transparent"><?php _e( 'Mehr Erfahren', 'brenta' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<img class="leistungen__sepimg-margin220" src="<?php echo wp_upload_dir()['url'] . '/Beton.jpg' ?>" title="" alt="">