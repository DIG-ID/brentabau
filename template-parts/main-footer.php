<footer class="main-footer">
	<div class="footer-content">
		<div class="container">
			<div class="row justify-content-between">
                <div class="col col-12 col-lg-3 footer__col">
                    <img class="logo__footer-img" src="<?php echo wp_upload_dir()['url'] . '/Logo_Footer.svg' ?>" title="footer logo" alt="footer logo">
                </div>
                <div class="col col-12 col-lg-3 footer__col">
                    <div class="footer__text">
                        <p>
                        Brenta GmbH<br>
                        Grellingerstrasse 35<br>
                        4052 Basel
                        </p>
                    </div>
                </div>
                <div class="col col-12 col-lg-3 footer__col">
                    <div class="footer__text">
                        <p>Tel: <a href="tel://0041 79 629 26 13">+41 79 629 26 13</a></p>
                        <p>Mail: <a href="">info[at]brentabau.ch</a></p>
                    </div>
                </div>
                <div class="col col-12 col-lg-3 footer__col">
                    <div class="footer__text">
                    <p>
                        <a id="footer-impressum" href="https://brentabau.ch/impressum/"><?php _e('Impressum','brenta'); ?></a>
                        <?php do_action( 'socials' ); ?>
                    </p>
                    </div>
                </div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .footer-content -->
	<div class="footer-copyright">
		<div class="container">
			
		</div><!-- .container -->
	</div><!-- .footer-bar -->
</footer><!-- #colophon -->