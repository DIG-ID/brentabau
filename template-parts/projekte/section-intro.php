<section class="section section-projekte__intro">
    <div class="container">
        <div class="row section-projekte__row">
            <div class="custom-container">
                <h1 class="page__title"><span class="projekte__slash">/</span><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="section section-projekte__list">
    <div class="container">
        <div class="row">
            <?php
                $projekte_query_args = array(
                    'post_type' => 'projekte',
                    'nopaging'  => true,
                );
                $projekte_query = new WP_Query( $projekte_query_args );
                if ( $projekte_query->have_posts() ) :
                while ( $projekte_query->have_posts() ) :
                    $projekte_query->the_post();
                    ?>
                    <div class="col-12 col-lg-6">
                        <div class="projekte-thumb__head">
                            <?php the_title(); ?>,<?php the_field('category') ?>
                        </div>
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" class="projekte-thumb__image">
                        <?php endif; ?>
                        <div class="projekte-thumb__wrapper">
                            <p class="text__dark"><?php the_field('description'); ?></p>
                            <a href="<?php the_field('section_leistungen_button_link'); ?>" class="btn btn__white"><?php esc_html_e( 'Mehr Erfahren', 'brenta' ); ?></a>
                        </div>
                    </div>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>