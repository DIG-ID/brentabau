<?php
$section_jobs_bg_id  = get_field( 'section_jobs_background_image' );
$section_jobs_bg_url = $section_jobs_bg_id ? wp_get_attachment_image_url( $section_jobs_bg_id, 'full' ) : '';
$section_jobs_text   = get_field( 'section_jobs_text_content' );
$section_jobs_image  = get_field( 'section_jobs_profile_picture' );
?>
<section class="section section-uberunspage__jobs<?php echo $section_jobs_bg_url ? ' has-bg-image' : ''; ?>"<?php echo $section_jobs_bg_url ? ' style="background-image: url(\'' . esc_url( $section_jobs_bg_url ) . '\');"' : ''; ?>>
    <div class="custom-container section-uberunspage__jobs__container">
        <div class="section-uberunspage__jobs__header">
            <span class="section-uberunspage__jobs__square" aria-hidden="true"></span>
            <h2 class="title__black"><?php echo esc_html( get_field( 'section_jobs_title' ) ); ?></h2>
        </div>
        <div class="row g-0 section-uberunspage__jobs__content">
            <div class="col-12 col-lg-6">
                <?php if ( $section_jobs_text ) : ?>
                <div class="section-uberunspage__jobs__text text__dark"><?php echo wp_kses_post( $section_jobs_text ); ?></div>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-6">
                <?php if ( $section_jobs_image ) : ?>
                <div class="section-uberunspage__jobs__image">
                    <?php echo wp_get_attachment_image( $section_jobs_image, 'large' ); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
