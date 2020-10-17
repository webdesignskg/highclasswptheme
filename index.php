<?php get_header(); ?>
<div class="full-width text-center featured-image-banner" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>')">
 <h1 class="blog-post-title"><?php the_title(); ?></h1>
</div>

    <?php if ( is_active_sidebar( 'full-width-above-content' ) ) : ?>
		<div id="page-full-width">
			<div class="container">
				<?php dynamic_sidebar( 'full-width-above-content' ); ?>
			</div>
		</div>
	<?php endif; ?>

    <?php if ( is_active_sidebar( 'row-box' ) ) : ?>
		<div id="row-boxes">
			<div class="container">
				<?php dynamic_sidebar( 'row-box' ); ?>
			</div>
		</div>
	<?php endif; ?>
 
<div class="container main-content">
    <div class="row">
<div class="col-sm-8 blog-main">
 
 <?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="blog-post">
			<div class="blog-post-meta">
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
					<li class="post-meta-li">
						<div class="post-category">
							<i class="fas fa-book"></i> <?php the_category( ', ' ); ?>
						</div>	
					</li>
				</ul>
			</div>
 <?php the_content(); ?>
 </div><!-- /.blog-post -->
 <?php
 endwhile;
 } 
 ?>
 
</div><!-- /.blog-main -->

<?php get_sidebar(); ?>

</div><!-- /.row -->

</div><!-- /.container -->

    <?php if ( is_active_sidebar( 'below-content-full-width' ) ) : ?>
		<div id="below-content-full-width">
			<div class="full-width">
				<?php dynamic_sidebar( 'below-content-full-width' ); ?>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>