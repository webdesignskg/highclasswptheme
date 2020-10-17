


<div class="container-fluid footer-top-row">
<div class="row col-md-offset-2 footer-row">
  <div class="col-md-3 box">
	<?php if ( is_active_sidebar( 'homepage-footer-1' ) ) { dynamic_sidebar( 'homepage-footer-1' ); } ?>
  </div>
  <div class="col-md-3 box">
	<?php if ( is_active_sidebar( 'homepage-footer-2' ) ) { dynamic_sidebar( 'homepage-footer-2' ); } ?>
  </div>
  <div class="col-md-3 box">
	<?php if ( is_active_sidebar( 'homepage-footer-3' ) ) { dynamic_sidebar( 'homepage-footer-3' ); } ?>
  </div>
</div>
</div>
<footer class="blog-footer">
    <?php if ( is_active_sidebar( 'footer-copyright-text' ) ) { dynamic_sidebar( 'footer-copyright-text' ); } ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
