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
            <div class="left-half one-half column">
              <h1>Remember to Remember.</h1>
							<p>Lists don't work. You never remember what you wrote down, where you wrote it, or when you need to do it.</p>
							<p>Organize the things you want to remember into easily memorable <i><b>timeframes</b></i></p>
							<a href="http://app.remto.xyz/" target="_blank" class="button hero-button">sign up / sign in</a>
            </div>
            <div class="right-half one-half column text-left">
							<img src="<?php echo get_template_directory_uri() . '/images/tasks-mini.png'; ?>" alt="Tasks view on iPad Mini" class="ipad" />
              <img src="<?php echo get_template_directory_uri() . '/images/lists-6plus.png'; ?>" alt="Timeframes view on iPhone 6 Plus" class="iphone" />
            </div>
          </div>
        </div>
      </div>
			<div class="section section-two">
				<div class="container">
					<div class="row">
						<div class="right-half one-half column">
							<h2>Timeframes</h2>
							<p class="large-icons"><span class="orange flaticon-business"></span> <span class="green flaticon-commerce"></span> <span class="violet flaticon-school-1"></span> <span class="blue flaticon-night-1"></span></p>
							<p>Organize everything you'd like to remember into <i><b>timeframes</b></i>. It's easy to remember that you've made a list for a specific timeframe. This makes it also easy to remember that you have items that you need to look at during those timeframes.</p>
							<ul class="text-left">
								<li>Create <i><b>timeframes</b></i>.</li>
								<li>Put items in those <i><b>timeframes</b></i>.</li>
								<li>Never forget anything ever again.</li>
								<li>...Hopefully :)</li>
							</ul>
						</div>
						<div class="left-half one-half column">
							<img src="<?php echo get_template_directory_uri() . '/images/timeframes.jpg'; ?>" alt="Screenshot of timeframes view" class="timeframes-image" />
						</div>
					</div>
				</div>
			</div>
			<div class="section section-three">
				<div class="container">
					<div class="row">
						<div class="twelve columns text-center">
							<h2>Available On All Web Capable Devices</h2>
							<a href="http://app.remto.xyz/" target="_blank" class="button">sign up / sign in</a>
							<img src="<?php echo get_template_directory_uri() . '/images/devices.png'; ?>" alt="Internet ready devices." class="devices-image" />
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
