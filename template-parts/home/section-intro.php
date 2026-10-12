<?php
$section_intro_header_image = get_field( 'section_intro_header_image' );
$section_intro_header_video = get_field( 'section_intro_header_video' );

// ACF file field can return an ID, an array or a URL depending on its settings.
$video_url  = '';
$video_mime = 'video/mp4';
if ( is_array( $section_intro_header_video ) && ! empty( $section_intro_header_video['url'] ) ) {
	$video_url  = $section_intro_header_video['url'];
	$video_mime = ! empty( $section_intro_header_video['mime_type'] ) ? $section_intro_header_video['mime_type'] : $video_mime;
} elseif ( is_numeric( $section_intro_header_video ) ) {
	$video_url  = wp_get_attachment_url( $section_intro_header_video );
	$video_mime = get_post_mime_type( $section_intro_header_video ) ?: $video_mime;
} elseif ( is_string( $section_intro_header_video ) ) {
	$video_url = $section_intro_header_video;
}

$poster_url = $section_intro_header_image ? wp_get_attachment_image_url( $section_intro_header_image, 'full' ) : '';
$image_class = $video_url ? 'section-intro__fallback' : '';
?>
<section class="section section-intro">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col section-intro__image<?php echo $video_url ? ' has-video' : ''; ?>">
            <?php
            // The image stays in the flow: it sets the hero height and acts as fallback when the video can't play.
            if ( $section_intro_header_image ) {
                echo wp_get_attachment_image( $section_intro_header_image, 'full', false, array( 'class' => trim( 'size-full ' . $image_class ) ) );
            }
            if ( $video_url ) :
                ?>
                <video class="section-intro__video" autoplay muted loop playsinline preload="auto" aria-hidden="true"<?php echo $poster_url ? ' poster="' . esc_url( $poster_url ) . '"' : ''; ?>>
                    <source src="<?php echo esc_url( $video_url ); ?>" type="<?php echo esc_attr( $video_mime ); ?>">
                </video>
            <?php endif; ?>
            <?php // Visible over the fallback image; hidden by hero-video.js once the video starts playing. ?>
            <img class="section-intro__header_logo" src="<?php echo esc_url( wp_upload_dir()['url'] . '/brenta_home_logo.png' ); ?>" title="Brenta logo" alt="Brenta logo">
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
