<section class="section section-services__gallery">
    <div class="custom-container">
        <div class="row">
            <div class="col-12">
                <p class="services-single__section-title"><?php _e('Galerie', 'brenta'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="services-single__gallery">
                    <?php 
                    $images = get_field('services_gallery');
                    $size = 'full';
                    if( $images ): ?>
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <?php foreach( $images as $image_id ): ?>
                            <div class="swiper-slide"><?php echo wp_get_attachment_image( $image_id, $size ); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php foreach( $images as $image_id ): ?>
                            <div class="swiper-slide"><?php echo wp_get_attachment_image( $image_id, $size ); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>