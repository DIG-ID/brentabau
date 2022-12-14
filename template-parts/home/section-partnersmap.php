<section class="section section-partnersmap">
    <div class="container-fluid p-0">
        <div class="row g-0 section-partnersmap__row">
            <div class="custom-container">
                <div class="row">
                    <h2 class="section-partnersmap__title"><?php the_field('section_partners_title'); ?></h2>
                </div>
                <div class="row">
                <div class="swiper mySwiper_partners">
                <?php 
                    $rows = get_field('section_partners_logos');
                    if( $rows ) {
                        echo '<ul class="swiper-wrapper">';
                        foreach( $rows as $row ) {
                            $image = $row['logo_image']; ?>
                            <li class="swiper-slide"><a href="<?php echo $row['logo_link']; ?>">
                             <?php   
                             echo wp_get_attachment_image( $image, 'full' );
                             echo wpautop( $row['caption'] );
                            ?> </a></li>
                        <?php }
                        echo '</ul>';
                    } 
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
        <?php 
        $location = get_field('map');
        if( $location ): ?>
            <div class="acf-map map-homepage" data-zoom="16">
                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>