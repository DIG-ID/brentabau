<section class="section section-projekte">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col section-projekte__image">
            <?php 
            $section_projekte_section_image = get_field('section_projekte_section_image');
            if( $section_projekte_section_image ) {
                echo wp_get_attachment_image( $section_projekte_section_image, 'full' );
            } 
            ?>
            <img class="section-projekte__logo" src="<?php echo wp_upload_dir()['url'] . '/symbol_banner.svg' ?>" title="Brenta logo" alt="Brenta logo">
            </div>
        </div>
        <div class="row g-0 section-projekte__row" style="background:url('<?php echo wp_upload_dir()['url'] . '/bg_project.jpg' ?>') no-repeat;">
            <div class="custom-container">
                <div class="row g-0">
                    <div class="col-12">
                        <h1 class="title__bright"><?php the_field('section_projekte_title'); ?></h1>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-12 col-lg-6 section-projekte__col-left">
                        <div class="column__wrapper">
                            <a href="<?php the_field('section_projekte_button_link'); ?>" class="btn btn__transparent"><?php the_field('section_projekte_button_label'); ?></a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 section-projekte__col-right">
                        <p class="text__bright"><?php the_field('section_projekte_text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>