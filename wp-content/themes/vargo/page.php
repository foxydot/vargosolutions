<?php
/**
 * Template Name: Sidebar Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				
				<div id="subnav">
<?php
if($post->post_parent)  
	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
else  
	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");  
if ($children) { ?> 
					<h2><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?></h2>
					<ul>  
						<?php echo $children; ?>
					</ul>
<?php } ?>
				</div>

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>