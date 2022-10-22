<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_starter_kit
 */

?>
<div class="footer-container">
	<div class="footer clearfix wrapper clearfix">
		<div class="footer-content">
			<ul>
				<li>
					<div class="mbjs-logo">
					    <img src="<?php echo(get_template_directory_uri()); ?>/images/mbjs.jpg" alt="MBJS logo">
				    </div><br>

					<div class="mbjs-email">
					    <img src="<?php echo(get_template_directory_uri()); ?>/images/email.jpg" style="width: 21px;" alt="Email">  <span>mary@maryjones.com</span>
				    </div>

				    <div class="rwos">
					    <img src="<?php echo(get_template_directory_uri()); ?>/images/rwoa.jpg" style="width: 90px;" alt="Romance Writers Australia">
				    </div>

				    <div class="sfnz">
					    <img src="<?php echo(get_template_directory_uri()); ?>/images/sfnz.jpg" style="width: 60px;" alt="Email logo">
				    </div>
				</li>

				<li>
					<div class="mbjs-about-me">
    					<h4>about me</h4>
    					<p>Aenean suscipit consequat dui, gravida malesuada mi rhoncus id. Etiam ex sem, mattis sed aliquam quis, sodales id arcu. Quisque consectetur eleifend fermentum.</p>
				    </div>
				</li>

				<li>
					<div class="mbjs-nav">
    					<h4>navigation</h4>
    					<div class="mbjs-nav-link">
	    					<p><a href="#">HOME</a></p>
	    					<p><a href="#">BIO</a></p>
	    					<p><a href="#">BLOG</a></p>
	    					<p><a href="#">BOOKS</a></p>
	    					<p><a href="#">- Historical Romance</a></p>
	    					<p><a href="#">- Science Fiction</a></p>
	    					<p><a href="#">LINKS</a></p>
	    					<p><a href="#">STUFF</a></p>
	    					<p><a href="#">CONTACT</a></p>
    				    </div>
				    </div>
				</li>

				<li>
					<div class="mbjs-social-container">
						<h4>social media</h4>
    					<div class="mbjs-social-logo">
					        <a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/fbw.jpg" style="width:11px;" alt="Facebook"></a>
					        <a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/g+.jpg" style="width:26px; "alt="Google plus"></a>
					        <a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/tw.jpg" style="width:22px; "alt="Twitter"></a>
				        </div>
				        <div class="mbjs-social-logo">
					        <a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/gw.jpg" style="width:15px;" alt="Google"></a>
					        <a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/pw.png" style="width:17px; "alt="Pinterest"></a>
				        </div>
				    </div>
				</li>
			</ul>
		</div>
	</div>
</div>
 <div class="copyright-container">
    	<div class="copyright wrapper clearfix">
    		<div class="copyright-content">
    			<ul>
    				<li>
    					<p>© Aenean suscipit consequat dui, gravida malesuada.</p>
    				</li>
    			
    				<li>
	    				<p>Aenean suscipit consequat dui.</p>
    				</li>
    			</ul>
    		</div>
    	</div>
    </div>
<?php wp_footer(); ?>
</body>
</html>
