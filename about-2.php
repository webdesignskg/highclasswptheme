<?php /* Template Name: About Page Two */ ?>

<?php get_header(); ?>
<div class="full-width text-center featured-image-banner" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>')">
 <h1 class="blog-post-title"><?php the_title(); ?></h1>
</div>
 
<div class="container main-content">
    <div class="row">
<div class="col-12 blog-main">
 
<?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="page-content">
 <?php the_content(); ?>
 </div>
 <?php
 endwhile;
 } 
 ?>
</div><!-- /.blog-main -->
</div><!-- /.row -->
</div><!-- /.container -->


<div class="team-members-container row">
	<div class="container">
   			<div class="about-one-heading">
  				<h2>Who We Are</h2>
				<p>
					Our experts have more than 10 years of combined experience in web design.
				</p>
			</div>
		<div class="row">
<?php
 $query = new WP_Query( array('post_type' => 'team','posts_per_page' => 4 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="team-member-box col-md-6 col-lg-3 animated fadeInUp">
		<div class="team-member-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="team-info-container">
			<div class="team-member-title">
				<?php the_title(); ?>
			</div>
			<div class="team-member-content">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
		</div>
	</div>
</div>

<div class="services-container row"><div class="container">
  <div class="about-one-heading">
	<h2>What We Do</h2>
	<p>
		 Consectetur adipisicing elit, ut labo reet dolore magna aliqua.
Praesent dapibus distigular paterns.
	</p>
  </div>
<?php
 $query = new WP_Query( array('post_type' => 'services','posts_per_page' => 3 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="services-box col-md-4 col-lg-4 animated fadeInUp">
		<div class="services-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="service-info-container">
			<div class="services-box-title">
				<?php the_title(); ?>
			</div>
			<div class="services-content">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
</div>
</div>

    <?php if ( is_active_sidebar( 'about2-clients' ) ) : ?>
		<div id="about-two-clients">
			<div class="container">
				<?php dynamic_sidebar( 'about2-clients' ); ?>
			</div>
		</div>
	<?php endif; ?>

<div class="full-width  projects-homepage">
	<div class="row">
		<div class="text-center projects-heading">
			<h2>Our Latest Projects</h2>
			<p>
				Consectetur adipisicing elit, ut labo reet dolore magna aliqua.
Praesent dapibus distigular paterns.
			</p>
		</div>
				<?php
					$query = new WP_Query( array('post_type' => 'portfolio','posts_per_page' => 4 ) );
					while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-md-3">
				<div class="project-box animated fadeInUp">
					<?php if ( has_post_thumbnail()) : ?>
						<a href=<?php the_permalink(); ?> title=<?php the_title_attribute(); ?> >
							<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
				<?php endwhile; ?>
	</div>
</div>

    <?php if ( is_active_sidebar( 'about-full-width' ) ) : ?>
		<div id="page-full-width">
			<div class="container">
				<?php dynamic_sidebar( 'about-full-width' ); ?>
			</div>
		</div>
	<?php endif; ?>
	

<?php get_footer(); ?>