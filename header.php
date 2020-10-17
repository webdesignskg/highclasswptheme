<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	
	<link crossorigin="anonymous" rel='stylesheet' id='shapely-fonts-css' href='//fonts.googleapis.com/css?family=Raleway%3A100%2C300%2C400%2C500%2C600%2C700&#038;ver=5.2.2' type='text/css' media='all' />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Spectral">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Handlee">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/newcustomtheme/wp-content/themes/newbstheme/style.css">
	<script src="https://kit.fontawesome.com/375b1c6a83.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
    <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
 
<div class="menu-container">
    <div class="container">
  <nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="navbar-brand">
			<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
						echo '<a href="/" class="custom-logo-link" rel="home" itemprop="url"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
				}
					else {
						echo '<div class="logo"><a href="/" class="custom-logo-link" rel="home" itemprop="url">'. get_bloginfo( 'name' ) .'</a></div>';
			} ?>
		</div>
	<div id="toggle">
<img src="/wp-content/themes/newbstheme/images/menu.png" alt="Show" /></div>
<div id="popout">
<?php wp_nav_menu( array( 
	'theme_location' => 'header-menu', 
	'menu_class' => 'blog-nav list-inline nav-menu' 
	) ); ?>
</div>

    </div>
</div>
</div>
