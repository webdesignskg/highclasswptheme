<?php /* Template Name: About Page One */ ?>

<?php get_header(); ?>
<div class="full-width text-center featured-image-banner" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>')">
 <h1 class="blog-post-title"><?php the_title(); ?></h1>
</div>

<div class="about-us-content row">
	<div class="container">
		<div class = "col-sm-12 col-md-6">
			<?php if ( is_active_sidebar( 'about-us-top-left' ) ) { dynamic_sidebar( 'about-us-top-left' ); } ?>
		</div>
		<div class = "col-sm-12 col-md-6">
			<?php if ( is_active_sidebar( 'about-us-top-right' ) ) { dynamic_sidebar( 'about-us-top-right' ); } ?>
		</div>
	</div>
</div>

<div class="about-us-stats row">
	<div class="container">
		<h2 class="stat-title">
			Fun Facts About Us
		</h2>
			<?php if ( is_active_sidebar( 'about-us-stats' ) ) { dynamic_sidebar( 'about-us-stats' ); } ?>
	</div>
</div>

<div class="services-container row"><div class="container">
  <div class="about-one-heading">
	<h2>What We Do</h2>

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
	    </div>
<span class="hide-tablet">
<?php
 $query = new WP_Query( array('post_type' => 'services','posts_per_page' => 3 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="services-box col-sm-12 col-md-6 col-lg-6 animated fadeInUp">
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
</span>

<span class="hide-mobile hide-desktop">
<?php
 $query = new WP_Query( array('post_type' => 'services','posts_per_page' => 2 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="services-box col-sm-12 col-md-6 col-lg-6 animated fadeInUp">
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
	</span>
</div>
</div>

<div class="team-members-container row">
	<div class="container">
   			<div class="about-one-heading">
  				<h2>Our Team of Experts</h2>
				<p>
					Our experts have more than 10 years of combined experience in web design.
				</p>
			</div>
		<div class="row">
<?php
 $query = new WP_Query( array('post_type' => 'team','posts_per_page' => 3 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="team-member-box col-sm-12 col-md-4 col-lg-4 animated fadeInUp">
		
		<div class="team-member-image">
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(); ?>
			   </a>
		</div>
		<div class="team-info-container">
			<div class="team-member-title">
				<a href="<?php the_permalink();?>">
				<?php the_title(); ?>
				</a>
			</div>
			<div class="team-member-content">
				<div class="team-excerpt">
				<?php the_excerpt(); ?>
				</div>
				<hr>
				<a href=<?php the_permalink(); ?> class=teambiobtn >Read Bio +</a>
			</div>	
		</div>
	</div>
<?php endwhile; ?>
		</div>
	</div>
</div>
		
<div class="portfolio-container row">
	<div class="container">
 	 <div class="about-one-heading">
		<h2>Our Work</h2>
		<p>
			 Consectetur adipisicing elit, ut labo reet dolore magna aliqua.
Praesent dapibus distigular paterns.
		</p>
	  </div>
<?php
 $query = new WP_Query( array('post_type' => 'portfolio','posts_per_page' => 6 ) );
 while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="portfolio-box col-sm-12 col-md-6 col-lg-6 animated fadeInUp">
		<div class="portfolio-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="portfolio-info-container">
			<div class="portfolio-title">
				<?php the_title(); ?>
			</div>
			<div class="portfolio-content">
				<?php the_excerpt(); ?>
			</div>
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