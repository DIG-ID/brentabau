<?php
$team_group   = get_field( 'section_team' );
$team_title   = ( $team_group && ! empty( $team_group['title'] ) ) ? $team_group['title'] : '';
$team_members = ( $team_group && ! empty( $team_group['members_reapeater'] ) ) ? $team_group['members_reapeater'] : array();
?>
<section class="section section-uberunspage__team">
    <div class="container-fluid p-0">
        <div class="row g-0 section-uberunspage__team__row justify-content-center">
            <div class="custom-container">
                <div class="section-uberunspage__team__header">
                    <span class="section-uberunspage__team__square" aria-hidden="true"></span>
                    <h2 class="title__black"><?php echo esc_html( $team_title ); ?></h2>
                </div>
                <?php if ( $team_members ) : ?>
                <div class="row g-0 section-uberunspage__team__grid">
                    <?php
                    foreach ( $team_members as $team_member ) :
                        $team_image       = ! empty( $team_member['image'] ) ? $team_member['image'] : null;
                        $team_name        = ! empty( $team_member['name'] ) ? $team_member['name'] : '';
                        $team_position    = ! empty( $team_member['position'] ) ? $team_member['position'] : '';
                        $team_email       = ! empty( $team_member['email'] ) ? $team_member['email'] : '';
                        $team_description = ! empty( $team_member['description'] ) ? $team_member['description'] : '';
                        ?>
                    <div class="col-12 col-sm-6 section-uberunspage__team__col">
                        <div class="team-card">
                            <?php if ( $team_image ) : ?>
                            <div class="team-card__image">
                                <?php echo wp_get_attachment_image( $team_image, 'large', false, array( 'alt' => esc_attr( $team_name ) ) ); ?>
                            </div>
                            <?php endif; ?>
                            <div class="team-card__info">
                                <?php if ( $team_name ) : ?>
                                <p class="team-card__name"><?php echo esc_html( $team_name ); ?></p>
                                <?php endif; ?>
                                <?php if ( $team_position ) : ?>
                                <p class="team-card__position"><?php echo esc_html( $team_position ); ?></p>
                                <?php endif; ?>
                                <?php if ( $team_email ) : ?>
                                <a class="team-card__email" href="mailto:<?php echo esc_attr( antispambot( $team_email ) ); ?>"><?php echo esc_html( antispambot( $team_email ) ); ?></a>
                                <?php endif; ?>
                            </div>
                            <?php if ( $team_description ) : ?>
                            <div class="team-card__description text__dark"><?php echo wp_kses_post( $team_description ); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
