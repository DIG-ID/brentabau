<section class="section section-leistungen">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col section-leistungen__image">
            <?php 
            $section_leistungen_section_image = get_field('section_leistungen_section_image');
            if( $section_leistungen_section_image ) {
                echo wp_get_attachment_image( $section_leistungen_section_image, 'full' );
            } 
            ?>
            </div>
        </div>
        <div class="row g-0 section-leistungen__row">
            <div class="row g-0">
                <div class="col-12 col-lg-6 section-leistungen__col-left">
                    <div class="column__wrapper">
                        <h1 class="title__black"><?php the_field('section_leistungen_title'); ?></h1>
                        <p class="text__dark"><?php the_field('section_leistungen_text'); ?></p>
                        <a href="<?php the_field('section_leistungen_button_link'); ?>" class="btn btn__white"><?php the_field('section_leistungen_button_label'); ?></a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 section-leistungen__col-right" style="background:url('<?php echo wp_upload_dir()['url'] . '/bg_Leistungen.jpg' ?>') no-repeat;">
                <ul>
                    <?php
                    if( have_rows('section_leistungen_menu_repeater') ):
                    while( have_rows('section_leistungen_menu_repeater') ) : the_row(); ?>
                    <li>
                        <a href="<?php the_sub_field('menu_item'); ?>" class="section_leistungen_menu_list"><?php the_sub_field('menu_item'); ?></a>
                    </li>
                    <?php endwhile; endif; ?>
                </ul>
                </div>
            </div>
        </div>
    </div>
</section>