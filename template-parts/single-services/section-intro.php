<section class="section section-services__intro">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col section-intro__image">
            <?php 
            $section_intro_header_image = get_field('header_image');
            if( $section_intro_header_image ) {
                echo wp_get_attachment_image( $section_intro_header_image, 'full' );
            } 
            ?>
            </div>
        </div>
        <div class="row g-0 section-services__row pos-absolute">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h1 class="title__black"><?php the_title(); ?></h1>
                        <p class="text__dark"><?php the_field('description'); ?></p>
                    </div>
                    <div class="col-12 col-lg-7"></div>
                </div>
            </div>
        </div>
    </div>
</section>