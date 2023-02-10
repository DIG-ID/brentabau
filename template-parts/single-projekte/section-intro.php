<section class="section section-projekte__intro">
    <div class="container">
        <div class="row section-projektepage__row">
            <div class="custom-container">
            <?php 
            $post_data = get_page_by_path('archiv-aktuelle-projekte');
            $post_id = $post_data->ID;
            ?>
            <h1 class="page__title page__title-white"><span class="projekte__slash-white">/</span><?php echo get_the_title( $post_id ); ?></h1>
                <h1 class="page__title"><span class="projekte__slash">/</span><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="section section-projekte__content">
    <div class="custom-container">
        <div class="row">
            <div class="col-12">
                <div class="projekte-single__head">
                    <div class="container-fluid"><div class="row projekte-single__row">
                        <div class="col-12 col-sm-8 projekte-single__col1"><p class="projekte-single__title"><?php the_title(); ?></p></div>
                        <div class="col-12 col-sm-4 projekte-single__col2"><p class="projekte-single__category"><?php the_field('category') ?></p></div>
                    </div></div>
                </div>
                <div class="projekte-single__wrapper">
                    <div class="container"><div class="row">
                    <div class="col-12 col-sm-8 projekte-single__data1"><p class="text__dark"><?php the_field('description'); ?></p></div>
                    <div class="col-12 col-sm-4 projekte-single__data2"><p class="text__dark"><b>Dauer: </b><?php the_field('duration'); ?></p><p class="text__dark"><b>Arbeitskräfte: </b><?php the_field('manpower'); ?></p></div>
                    </div></div>
                </div>
                <div class="projekte-single__gallery">
                    <?php 
                    $images = get_field('gallery');
                    $size = 'large';
                    if( $images ): ?>
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <?php foreach( $images as $image_id ): ?>
                            <div class="swiper-slide">
                                <?php $photo_url = wp_get_attachment_image_url( $image_id, $size ); ?>
                                <a href="<?php echo esc_url($photo_url); ?>" style="width: 100%;" data-fancybox="photos">
                                    <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                                </a>
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
<script type="application/javascript">

</script>