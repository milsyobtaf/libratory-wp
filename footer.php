			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
					<nav class="fourcol" role="navigation">
						<h4 class="footer-nav">Connect with UT Libraries</h4>
						<?php bones_footer_social(); ?>
					</nav>
					<nav class="fourcol last" role="navigation">
						<h4 class="footer-nav">UT Libraries Information</h4>
    						<?php bones_footer_links(); ?>
	                		</nav>

				</div> <!-- end #inner-footer -->
				<div class="utlib-footer twelvecol first last">
					<span class="utlib-footer-tower twelvecol first last">
						<a href="http://www.utexas.edu/">
							<img src="<?php print  get_template_directory_uri() ?>/library/images/utlib-footer-tower.jpg" alt="University of Texas at Austin" width="320" height="36" border="0" />
						</a>
					</span>
					<span class="utlib-footer-bottom twelvecol first last">
						<span class="utlib-footer-flyingbook twocol first" >
							<a href="http://www.lib.utexas.edu">
								<img src="<?php print  get_template_directory_uri() ?>/library/images/utlib-footer-flyingbook.gif" alt="University of Texas Libraries" width="199" height="27"  />
							</a>
						</span>
						<span class="utlib-footer-copyright source-org copyright threecol last">
							<a href="<?php echo home_url(); ?>" rel="nofollow">
								&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
							</a>
						</span>
					</span>
				</div>
			</footer> <!-- end footer -->

		</div> <!-- end #container -->



		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
