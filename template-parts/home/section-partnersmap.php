<section class="section section-partnersmap">
    <div class="container-fluid p-0">
        <div class="row g-0 section-partnersmap__row">
            <div class="custom-container">
                <div class="row">
                    <h2 class="section-partnersmap__title"><?php the_field('section_partners_title'); ?></h2>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
        <div class="row g-0">
        <?php 
        $location = get_field('map');
        if( $location ): ?>
            <div class="acf-map" data-zoom="16">
                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>