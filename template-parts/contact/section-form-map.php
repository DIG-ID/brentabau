<section class="section section-contact__form">
    <div class="container-fluid p-0">
        <div class="row g-0 section-contact__row">
            <div class="custom-container">
                <div class="row g-0">
                    <div class="col-12 col-lg-6 section-contact__col-left">
                        <div class="column__wrapper">
                            <h2 class="title__black"><?php the_field('section_form_title'); ?></h2>
                            <p class="text__dark"><?php the_field('section_form_text'); ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 section-contact__col-right">
                    <?php $kontakt_form = get_field( 'contact_form' );?>
				    <?php echo do_shortcode( $kontakt_form ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
        <?php 
        $location = get_field('map');
        if( $location ): ?>
            <div class="acf-map map-kontakt" data-zoom="16">
                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
            </div>
        <?php endif; ?>
        </div>
        <div class="row g-0">
            <div class="col section-contact__image">
            <?php 
            $section_uberuns_section_image = get_field('banner_image');
            if( $section_uberuns_section_image ) {
                echo wp_get_attachment_image( $section_uberuns_section_image, 'full' );
            } 
            ?>
            </div>
        </div>
    </div>
</section>