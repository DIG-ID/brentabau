<section class="section section-services__related">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="services-single__section-title"><?php _e('Ähnliche Projekte', 'brenta'); ?></p>
            </div>
        </div>
        <div class="row">
        <?php
        $featured_posts = get_field('projekte_preview');
        if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ): 

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <div class="col-12 col-lg-6">
                        <div class="projekte-thumb__head">
                            <div class="container"><div class="row projekte-thumb__row">
                                <div class="col-8 projekte-thumb__col1"><p class="projekte-thumb__title"><?php the_title(); ?></p></div>
                                <div class="col-4 projekte-thumb__col2"><p class="projekte-thumb__category"><?php the_field('category') ?></p></div>
                            </div></div>
                        </div>
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" class="projekte-thumb__image">
                        <?php endif; ?>
                        <div class="projekte-thumb__wrapper">
                            <p class="text__dark"><?php the_field('description'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn__white"><?php esc_html_e( 'Mehr Erfahren', 'brenta' ); ?></a>
                        </div>
                    </div>
            <?php endforeach; ?>
            <?php 
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
    </div>
</section>