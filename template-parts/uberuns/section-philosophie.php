<section class="section section-uberunspage__philosophie">
    <div class="container-fluid p-0">
        <div class="row g-0 section-uberunspage__row justify-content-center">
            <div class="custom-container">
                <img class="brenta__symbol" src="<?php echo wp_upload_dir()['url'] . '/symbol.svg' ?>" title="" alt="">
                <h1 class="title__black"><?php the_field('section_filosophie_title'); ?></h1>
                <p class="text__dark"><?php the_field('section_filosophie_text_content'); ?></p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col section-uberuns__image">
            <?php 
            $section_uberuns_section_image = get_field('section_filosophie_banner_image');
            if( $section_uberuns_section_image ) {
                echo wp_get_attachment_image( $section_uberuns_section_image, 'full' );
            } 
            ?>
            </div>
        </div>
    </div>
</section>