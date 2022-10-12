<?php get_header(); ?>

<section class="section section-error-page-not-found">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-lg-6 text-center">
                    <h1 class="page__title"><?php esc_html_e( '404', 'brenta' ); ?></h1>
                    <p class="text__dark"><?php esc_html_e( 'Leider konnten wir diese Seite nicht finden!', 'brenta' ); ?></p>
                    <a class="btn btn__white" href="<?php echo get_home_url(); ?>"><?php esc_html_e( 'zur Startseite','brenta' ); ?></a>
				</div>
			</div>
		</div>
	</article>
</section>

<?php get_footer(); ?>