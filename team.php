<?php /* Template Name: Team */ ?>

<?php get_header(); ?>
<div class="full-width text-center featured-image-banner" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>')">
 <h1 class="blog-post-title"><?php the_title(); ?></h1>
</div>
 
<div id="team-page">
<div class="container main-content">
    <div class="row">
<div class="col-12 page-main">
 
<?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="page-content mb-5">
 <?php the_content(); ?>
 </div>
 <?php
 endwhile;
 } 
 ?>

<div id="team-members-boxes">
	<div class="row">
		<div class="container">
			<?php
			$query = new WP_Query( array('post_type' => 'team','posts_per_page' => -1 ) );
			while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="team-box animated fadeInUp col-lg-4 col-md-6 col-sm-12">
				<a href="<?php the_permalink();?>">
					<div class="team-page-image">
							<?php the_post_thumbnail(); ?>
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
				</a>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
	
</div><!-- /.blog-main -->
</div><!-- /.row -->
</div><!-- /.container -->

    <?php if ( is_active_sidebar( 'below-content-full-width' ) ) : ?>
		<div id="below-content-full-width">
			<div class="full-width container">
				<?php dynamic_sidebar( 'below-content-full-width' ); ?>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>