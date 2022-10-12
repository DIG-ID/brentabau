<section class="section section-uberuns">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col section-uberuns__image">
            <?php 
            $section_uberuns_section_image = get_field('section_uberuns_section_image');
            if( $section_uberuns_section_image ) {
                echo wp_get_attachment_image( $section_uberuns_section_image, 'full' );
            } 
            ?>
            </div>
        </div>
        <div class="row g-0 section-uberuns__row">
            <div class="custom-container">
                <div class="row g-0">
                    <div class="col-12 col-lg-6 section-uberuns__col-left">
                        <div class="column__wrapper">
                            <h2 class="title__black"><?php the_field('section_uberuns_title'); ?></h2>
                            <p class="text__dark"><?php the_field('section_uberuns_text'); ?></p>
                            <a href="<?php the_field('section_uberuns_button_link'); ?>" class="btn btn__white"><?php the_field('section_uberuns_button_label'); ?></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 section-uberuns__col-right">
                    <?php 
                        $section_uberuns_profile_picture = get_field('section_uberuns_profile_picture');
                        if( $section_uberuns_profile_picture ) {
                            echo wp_get_attachment_image( $section_uberuns_profile_picture, 'full' );
                        } 
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>