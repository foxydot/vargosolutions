<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				
				<div id="home_scroll_wrapper">

					<div id="home_scroll">
					
						<div id="scroll2" class="scroll">
							<h2><span>We help <strong>E-commerce, Direct-to-Consumer Companies</strong> <br> streamline and optimize their facilities.</span></h2>
						</div>
					
						<div id="scroll3" class="scroll">
							<h2><span>As a <strong>Systems Integrator</strong>, we design, implement and support solutions that <br> reduce operating costs and increase profitability.</span></h2>
						</div>

						<div id="scroll4" class="scroll">
							<h1><span>We <strong>Design and Build</strong> material handling systems for direct-to-consumer DCs, <br> retail and wholesale distributors, and manufacturers.</span></h1>
						</div>
					
						<div id="scroll5" class="scroll">
							<h1><span>We break down traditional ways of thinking and apply proven <strong>Lean Distribution</strong> principles <br> to minimize costs, and maximize efficiencies.</span></h1>
						</div>
						
						<div id="scroll6" class="scroll"><a href="http://www.vargosolutions.com/capabilities/process-improvement-solutions/cofe/"></a>
						</div>

					</div><!-- #home_scroll -->
				
				</div><!-- #home_scroll_wrapper -->
				
				<div id="home_buckets" class="widget-area" role="complementary">
						
<?php dynamic_sidebar( 'home-first-bucket' ); ?>

<?php dynamic_sidebar( 'home-second-bucket' ); ?>

<?php dynamic_sidebar( 'home-third-bucket' ); ?>

				</div><!-- #secondary .widget-area -->

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>