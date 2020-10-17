<?php get_header(); ?>
<!-- Start Bootstrap Slider -->
<div id="carousel-example-generic" class="carousel slide" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 5)); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>
      <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>')">
		<div class="center-slide-text">
			<div class="slide-content col-sm-12 text-center">
				<div class="slide-title">
					<?php echo get_the_title($slide->ID); ?>
				</div>
				<div class="slide-text">
					<?php echo apply_filters('the_content', get_post_field('post_content', $slide->ID)); ?>
				</div>
			</div>
		</div>
	  </div>
      <?php $count++; ?>
    <?php endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End Bootstrap Slider -->
<div id="about-us">
<div class="container text-center">
    <?php if ( is_active_sidebar( 'homepage-about' ) ) { dynamic_sidebar( 'homepage-about' ); } ?>
</div>
<div class="container">
<div class="row row-eq-height justify-content-center col-md-offset-2 services-row">
    <div class="col-lg-4 col-sm-6 col-xs-6 box text-center">
	<?php if ( is_active_sidebar( 'homepage-about-box-1' ) ) { dynamic_sidebar( 'homepage-about-box-1' ); } ?>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-6 box text-center">
    	<?php if ( is_active_sidebar( 'homepage-about-box-2' ) ) { dynamic_sidebar( 'homepage-about-box-2' ); } ?>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-6 box text-center">
    	<?php if ( is_active_sidebar( 'homepage-about-box-3' ) ) { dynamic_sidebar( 'homepage-about-box-3' ); } ?>
    </div>
</div>
</div>
</div>

<div class="full-width  projects-homepage">
	<div class="row">
		<div class="text-center projects-heading">
			<?php if ( is_active_sidebar( 'homepage-project-text' ) ) { dynamic_sidebar( 'homepage-project-text' ); } ?>
		</div>
				<?php
					$query = new WP_Query( array('post_type' => 'portfolio','posts_per_page' => 4 ) );
					while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-md-3">
				<div class="project-box animated fadeInUp">
					<?php if ( has_post_thumbnail()) : ?>
						<a href=<?php the_permalink(); ?> title=<?php the_title(); ?> >
							<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
				<?php endwhile; ?>
	</div>
</div>
    <?php if ( is_active_sidebar( 'homepage-full-width-cta-1' ) ) : ?>
		<div id="page-full-width">
			<div class="container">
				<?php dynamic_sidebar( 'homepage-full-width-cta-1' ); ?>
			</div>
		</div>
	<?php endif; ?>
 
<div class="container main-content">
    <div class="row justify-content-center">
		<div class="blog-main">
 
 <?php 
  global $wp_query;
 $args = array_merge( $wp_query->query_vars, ['posts_per_page' => 4 ] );
 query_posts( $args );
 
	if ( have_posts() ) { 
		while ( have_posts() ) : the_post(); ?>
			<div class="blog-post-homepage col-md-6 col-sm-12 col-xs-12 text-center">
				<div class="blog-featured-image-homepage"><?php the_post_thumbnail(); ?></div>
					<div class="blog-description-homepage">
						<h2 class="blog-post-title-homepage">
							<a href="<?php the_permalink();?>">
								<?php the_title(); ?>
							</a>
						</h2>
							<div class="blog-title-underline">
							</div>
							<div class="blog-post-meta-homepage">
								<ul class="post-meta">
									<li class="post-meta-li">
										<div class="post-date">
											<i class="far fa-calendar-check"></i> <?php the_date(); ?> 
										</div>
									</li>
									<li class="post-meta-li">
										<div class="post-author">
											<i class="fas fa-user"></i> <?php the_author(); ?>
										</div>
									</li>
								</ul>
							</div>
								<?php the_excerpt(); ?>
					</div>
			</div><!-- /.blog-post -->
		<?php
		endwhile;
		} 
	
 ?>
 
</div><!-- /.blog main -->
 
</div><!-- /.row -->

</div><!-- /.container -->



<div class="full-width text-center homepage-cta">
    <?php if ( is_active_sidebar( 'homepage-full-width-cta-2' ) ) { dynamic_sidebar( 'homepage-full-width-cta-2' ); } ?>
</div>

<div id="contact-us">
	<div class="contact-row">
		<div class="container">
			<?php if ( is_active_sidebar( 'homepage-contact' ) ) { dynamic_sidebar( 'homepage-contact' ); } ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>