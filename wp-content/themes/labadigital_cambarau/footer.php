<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
$theme_directory = get_stylesheet_directory_uri();
?>




<div class="footer">

  <div class="indirizzo">
    <p>LABA - Libera Accademia di Belle Arti </p>
    <p>Via Don Vender, 66 - 25127 - Brescia Italia</p>

  </div> <!--indirizzo -->
    <div class="recapito">
      <p>tel. +39.030.380894</p>
      <p>fax +39.030.3391503</p>
    </div> <!-- recapito -->

  <div class="mail">
    <p>info@laba.edu</p>
    <p>P.I. IT 03095100982</p>
  </div> <!-- mail -->

  <div class="social">
    <a href="https://www.facebook.com/laba.edu"><img src="<?php echo $theme_directory; ?>/img/icon/fb.png" alt="" class="icon"></a>
    <a href="https://twitter.com/labatwit"><img src="<?php echo $theme_directory; ?>/img/icon/tw.png" alt="" class="icon"></a>
    <a href="http://youtube.com/labaview"><img src="<?php echo $theme_directory; ?>/img/icon/yt.png" alt="" class="icon"></a>
    <a href="http://it.linkedin.com/in/accademialaba"><img src="<?php echo $theme_directory; ?>/img/icon/in.png" alt="" class="icon"></a>

  </div> <!-- social -->

</div> <!-- footer -->

</div> <!-- close contenuto -->

</div> <!--CLOSE CONTAINER -->

<?php wp_footer(); ?>
</body>

</html>
