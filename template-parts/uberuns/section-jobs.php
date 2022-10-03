<section class="section section-uberunspage__jobs">
    <div class="container-fluid p-0">
        <div class="row g-0 section-uberunspage__jobs__row justify-content-center">
            <div class="custom-container">
                <img class="brenta__symbol" src="<?php echo wp_upload_dir()['url'] . '/symbol.svg' ?>" title="" alt="">
                <h1 class="title__dark"><?php the_field('section_jobs_title'); ?></h1>
            </div>
        </div>
        <div class="row g-0 section-uberunspage__row">
            <div class="custom-container">
                <div class="row g-0 align-items-center">
                    <div class="col-12 col-lg-6 section-uberunspage__col-left">
                        <div class="column__wrapper">
                            <p class="text__dark"><?php the_field('section_jobs_text_content'); ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 section-uberunspage__col-right">
                    <?php 
                        $section_uberuns_profile_picture = get_field('section_jobs_profile_picture');
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