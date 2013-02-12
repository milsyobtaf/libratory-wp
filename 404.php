<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="error404 clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1><?php _e("404 - Information Not Found", "bonestheme"); ?></h1>

							</header> <!-- end article header -->

							<section class="entry-content">

								<p><?php _e("Like Bigfoot, the information you were looking for was not found.", "bonestheme"); ?></p>

								<img src="<?php echo get_template_directory_uri(); ?>/library/images/bigfoot.jpg" />

								<p><?php _e("But like Bigfoot, we believe your information is out there! Continue the search!","bonestheme"); ?></p>

							</section> <!-- end article section -->

							<section class="search">

							    <p><?php get_search_form(); ?></p>

							</section> <!-- end search section -->

							<footer class="article-footer">

							    <p><a href="http://www.cryptozoology.com/cryptids.php"><?php _e("Further information on Cryptids like Bigfoot and Nessie", "bonestheme"); ?></a></p>

							</footer> <!-- end article footer -->

						</article> <!-- end article -->

					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
