<section class="section section-leistungen__services">
    <div class="container-fluid p-0">
        <div class="row g-0 section-leistungen__services-row justify-content-center">
            <div class="custom-container">
                <div class="row justify-content-center">
                    <img class="brenta__symbol" src="<?php echo wp_upload_dir()['url'] . '/symbol.svg' ?>" title="" alt="">
                    <h2 class="title__bright"><?php the_field('section_services_title'); ?></h2>
                </div>
                <div class="row g-0 d-flex justify-content-around">
                    <?php
                    if( have_rows('section_services_services_repeater') ):
                    while( have_rows('section_services_services_repeater') ) : the_row(); ?>
                    <div class="col-12 col-md-6 col-lg-2">
                        <?php $section_services_icon = get_sub_field('icon');
                        if( $section_services_icon ) {
                            echo wp_get_attachment_image( $section_services_icon, 'full' );
                        } ?>
                        <p class="section-leistungen__services-text"><?php the_sub_field('title'); ?></p>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="row g-0">
                    <p class="text__bright"><?php the_field('section_services_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>