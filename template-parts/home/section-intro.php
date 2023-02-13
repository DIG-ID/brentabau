<section class="section section-intro">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col section-intro__image">
            <?php 
            $section_intro_header_image = get_field('section_intro_header_image');
            if( $section_intro_header_image ) {
                echo wp_get_attachment_image( $section_intro_header_image, 'full' );
            } 
            ?>
            <img class="section-intro__header_logo" src="<?php echo wp_upload_dir()['url'] . '/brenta_home_logo.png' ?>" title="Brenta logo" alt="Brenta logo">
            </div>
        </div>
        <div class="row g-0 section-intro__row">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title__green"><?php the_field('section_intro_title'); ?></h1>
                        <p class="text__bright"><?php the_field('section_intro_text'); ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
