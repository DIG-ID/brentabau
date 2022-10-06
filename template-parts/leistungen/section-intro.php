<section class="section section-leistungen__intro">
    <div class="container-fluid p-0">
        <div class="row g-0 section-leistungen__row justify-content-center" style="background:url('<?php echo wp_upload_dir()['url'] . '/bg_project.jpg' ?>') no-repeat;">
            <div class="custom-container">
                <img class="brenta__symbol" src="<?php echo wp_upload_dir()['url'] . '/symbol.svg' ?>" title="" alt="">
                <h1 class="title__bright"><?php the_field('section_intro_title'); ?></h1>
                <p class="text__bright"><?php the_field('section_intro_introduction_text'); ?></p>
            </div>
        </div>
    </div>
</section>