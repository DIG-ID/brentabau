<?php
$faq_items = get_field( 'section_faq_repeater' );
if ( ! $faq_items ) {
	return;
}
$faq_schema = array();
?>
<section class="section section-faq__list">
    <div class="custom-container">
        <div class="faq-accordion">
            <?php
            foreach ( $faq_items as $index => $faq_item ) :
                $faq_question = ! empty( $faq_item['question'] ) ? $faq_item['question'] : '';
                $faq_answer   = ! empty( $faq_item['answer'] ) ? $faq_item['answer'] : '';
                if ( ! $faq_question ) {
                    continue;
                }
                $faq_id = 'faq-answer-' . ( $index + 1 );

                $faq_schema[] = array(
                    '@type'          => 'Question',
                    'name'           => wp_strip_all_tags( $faq_question ),
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => wp_strip_all_tags( $faq_answer ),
                    ),
                );
                ?>
            <div class="faq-item">
                <button class="faq-item__head collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr( $faq_id ); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr( $faq_id ); ?>">
                    <span class="faq-item__question"><?php echo esc_html( $faq_question ); ?></span>
                    <span class="faq-item__toggle" aria-hidden="true">
                        <svg class="faq-item__arrow" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="square"><path d="M5 9l7 7 7-7"/></svg>
                    </span>
                </button>
                <div id="<?php echo esc_attr( $faq_id ); ?>" class="collapse">
                    <div class="faq-item__answer text__dark"><?php echo wp_kses_post( $faq_answer ); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php if ( $faq_schema ) : ?>
<script type="application/ld+json"><?php echo wp_json_encode( array( '@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faq_schema ) ); ?></script>
<?php endif; ?>
