<?php
/**
 * The search template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Newsroom
 * @since Newsroom 1.0
 * @license GPL 3.0
 */

get_header(); ?>

<div id="primary" class="content-area">

	<div id="content" class="site-content" role="main">

		<h1 class="search-title"><?php _e('Search results for:', 'jeo'); ?> <?php echo $_GET['s']; ?></h1>

    <div class="row">
      <?php jeo_featured(); ?>
    </div>
    <ul class="search-sidebar">
      <?php dynamic_sidebar('search'); ?>
    </ul>
		<?php get_template_part( 'loop' ); ?>

	</div><!-- #content .site-content -->

</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
