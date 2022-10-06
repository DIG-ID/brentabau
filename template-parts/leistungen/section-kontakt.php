<section class="section section-leistungen__kontakt">
    <div class="container-fluid p-0">
        <div class="row g-0 section-leistungen__kontakt-row justify-content-center">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="title__black"><?php the_field('section_kontakt_title'); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="section-leistungen__kontakt-form">
                            <?php $kontakt_form = get_field( 'section_kontakt_form_shortcode' );?>
                            <?php echo do_shortcode( $kontakt_form ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>