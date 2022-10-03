<section class="section section-uberunspage__about">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col section-uberuns__image">
            <?php 
            $section_uberuns_section_image = get_field('section_about_banner_image');
            if( $section_uberuns_section_image ) {
                echo wp_get_attachment_image( $section_uberuns_section_image, 'full' );
            } 
            ?>
            </div>
        </div>
        <div class="row g-0 section-uberunspage__about__row">
            <div class="custom-container">
                <div class="row g-0 align-items-center">
                    <div class="col-12 col-lg-6 section-uberunspage__col-left">
                        <div class="column__wrapper">
                            <p class="text__dark"><?php the_field('section_about_text_content'); ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 section-uberunspage__col-right">
                    <?php 
                        $section_uberuns_profile_picture = get_field('section_about_profile_picture');
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