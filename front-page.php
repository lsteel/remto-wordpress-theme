<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package remto
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="section hero-section">
        <div class="container">
          <div class="row">
            <div class="one-half column">
              <h1>Remember to Remember.</h1>
							<p>Lists don't work. You never remember what you wrote down, where you wrote it, or when you need to do it.</p>
							<p>Organize the things you want to remember into easily memorable <i><b>timeframes</b></i></p>
							<a href="#" class="button hero-button">sign up / sign in</a>
            </div>
            <div class="one-half column">
							<img src="<?php echo get_template_directory_uri() . '/images/tasks-mini.png'; ?>" alt="Tasks view on iPad Mini" class="ipad" />
              <img src="<?php echo get_template_directory_uri() . '/images/lists-6plus.png'; ?>" alt="Timeframes view on iPhone 6 Plus" class="iphone" />
            </div>
          </div>
        </div>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
