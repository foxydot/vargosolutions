<?php
/*
Template Name: Blank Page Template
*/
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="norton-safeweb-site-verification" content="35a9fhq9dqef626kbgme8dslj86u8puwn4722lyow4vrnmicuas02vrzrgcll35ktrhf4f-uashal2539j3edevkax9yu6bsd2bva8xpqc0i4jr5z1lca89mck5-65m1" />
<title><?php wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	wp_head();
?>
<style type="text/css">
p
{
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
table {margin: 0 auto;}
table table p {margin: 1em 0;}
</style>
</head>
<body>
<div id="blank-content">
<?php 
if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); 
?>
		<div><?php the_content(); ?></div>
<?php 
	endwhile;
endif; 
?>
</div>
</body>
<?php 
wp_footer();
?>