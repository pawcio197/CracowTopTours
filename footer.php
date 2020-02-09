<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
    </div><!-- /.container -->
    <div class="blog-footer">
    <div id="footer">
        <div class="footer-1">
            <a href="http://cracov-toptours.pl/#up">Start Page</a>
            <a href="http://cracov-toptours.pl/#AboutUs">About Us</a>
            <a href="http://cracov-toptours.pl/#Tours">Tours</a>
            <a href="http://cracov-toptours.pl/#Reviews">Reviews</a>
            <a href="http://cracov-toptours.pl/Contact">Contact</a>
            <a href="http://cracov-toptours.pl/FAQ">FAQ</a>
        </div>
        <div class="footer-2">
            <span class="footer-2-title"> Contact </span>
            <a href="tel:793391418"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1phone.png"><span>+48 793 391 418</span></a>
            <a href="mailto:cracowtoptours@gmail.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2mail.png"><span>cracowtoptours@gmail.com</span></a>
            <a href="https://www.facebook.com/crtoptours/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/4facebook.png"><span>Cracow Top Tours Fanpage</span></a>
            <a href="https://www.tripadvisor.com/Attraction_Review-g274772-d16733705-Reviews-Cracow_Top_Tours-Krakow_Lesser_Poland_Province_Southern_Poland.html" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/3tripadvisor.png"><span>Cracow Top Tours TripAdvisor</span></a>
        </div>
    </div>
        <div class="footer-down">
            <div class="left-side-fd">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
            <span>All rights reserved© Cracow Top Tours 2020</span>
            </div>
            <a href="#" class="no-effects">
            <div class="right-side-fd">
            <span>↑</span>
            </div>
            </a>
        </div>
      <?php get_sidebar( 'footer' ); ?>
      
	  <?php 
	  $copyright_text = get_theme_mod( 'copyrighttext', '' ); ?>
	  <?php if ( $copyright_text !== '' ) : ?>
      <p class="copyright"><?php echo $copyright_text; ?></p>
      <?php else: ?>

	  <?php endif; ?>
    </div>

    <?php 
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer(); 
	?>

<script>

    (function ($) {
        $(document).ready(function () {
            $("input.wpcf7-form-control, textarea.wpcf7-form-control").attr("autocomplete", "negative");
        });
    })(jQuery);

</script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script type="text/javascript">
    $('.owl-carousel-theme').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
items: 1
    });
</script>
<script>
    (function ($) {
        $('.acc_row').click(function(e) {
            $('.accordion_text_box').slideToggle( "300", function() {
                if ($(this).is(":visible")) $('.text_info').html('Back to the question');
                else $('.text_info').html('Get the answer');
            });
        });
        $('.acc_row2').click(function(e) {
            $('.accordion_text_box2').slideToggle( "300", function() {
                if ($(this).is(":visible")) $('.text_info2').html('Back to the question');
                else $('.text_info2').html('Get the answer');
            });
        });
        $('.acc_row3').click(function(e) {
            $('.accordion_text_box3').slideToggle( "300", function() {
                if ($(this).is(":visible")) $('.text_info3').html('Back to the question');
                else $('.text_info3').html('Get the answer');
            });
        });
        $('.acc_row4').click(function(e) {
            $('.accordion_text_box4').slideToggle( "300", function() {
                if ($(this).is(":visible")) $('.text_info4').html('Back to the question');
                else $('.text_info4').html('Get the answer');
            });
        });
        $('.acc_row5').click(function(e) {
            $('.accordion_text_box5').slideToggle( "300", function() {
                if ($(this).is(":visible")) $('.text_info5').html('Back to the question');
                else $('.text_info5').html('Get the answer');
            });
        });
        $('.acc_row6').click(function(e) {
            $('.accordion_text_box6').slideToggle( "300", function() {
                if ($(this).is(":visible")) $('.text_info6').html('Back to the question');
                else $('.text_info6').html('Get the answer');
            });
        });
        $('.acc_row7').click(function(e) {
            $('.accordion_text_box7').slideToggle( "300", function() {
                if ($(this).is(":visible")) $('.text_info7').html('Back to the question');
                else $('.text_info7').html('Get the answer');
            });
        });
        $('.acc_row8').click(function(e) {
            $('.accordion_text_box8').slideToggle( "300", function() {
                if ($(this).is(":visible")) $('.text_info8').html('Back to the question');
                else $('.text_info8').html('Get the answer');
            });
        });
    }) (jQuery);
</script>

</body>


</html>