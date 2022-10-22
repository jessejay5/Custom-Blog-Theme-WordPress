<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_starter_kit
 */

get_header();
?>
    <div id="primary" class="content-area">
		<main id="main" class="site-main">
		    <div class="banner">
		      <div class="banner-content">
		        <img src="<?php echo(get_template_directory_uri()); ?>/images/arcadia.jpg" alt="Arcadia Image" style="width:100%;">
		      </div>
		    </div>   

		    <div class="signup-sec-container wrapper clearfix">
		    	<div class="signup-sec-row">
		    		<div class="signup-sec-column">
		    			<h2>Welcome to the worlds of Mary Brock Jones,
		    				science fiction author and writer  of historical
		    				romance.
		    			</h2>
		    			<p>
		    				For lovers of adventure in long ago in wilder times, try my New 
		    				Zealand set historical romance novels, set in the heady days of the
		    				Otago gold rushes. A time when dreams reigned supreme. and the only
		    				costs of victory were hardship and hope. My romances always end happily,
		    				even if the journey can get quite bumpy.
		    			</p>
		    			<p>
		    				As for my science fiction books, they may have a romantic element but they
		    				are also filled with suspense, mayhem and convoluted politics and peril. Something dark, something light, and a lot of bumps along the way. For future 
		    				is another world, infinitely variable, and so is the imagination. When anything is possible, darkness or light comes as it may. 
		    			</p>
		    		</div>

		    		<div class="signup-sec-column">
		    			<div class="signup-sec-form-group clearfix">
		    				<div class="text-center result-message"></div>
			                <div class="text-center alert-success indicator"></div>
		    				<p>Sign up to my news letter for new releases and sales news</p>
		    				<form id="signup_sec_form" method="post">
							    <div class="signup-sec-details">
						       	    <input class="required form-control" id="signup_sec_email" type="text" name="signup_sec_email" placeholder="Email*">
						       	</div>
						       	<div class="signup-sec-details">
						       	    <input class="required form-control" id="signup_sec_first_name" type="text" name="signup_sec_first_name" placeholder="First Name*">
						       	</div>
						       	<div class="signup-sec-details">
						       	    <input class="required form-control" id="signup_sec_last_name" type="text" name="signup_sec_last_name" placeholder="Last Name*">
						       	</div>
						        <div class="signup-sec-details">
							       	<input type="submit" id="signup_sec_btn" name="submit" value="SIGN UP">
						        </div>
					        </form>
		    			</div>
		    		</div>
		    	</div>
			</div><br><br>
			<br><br><br><br>

			<?php

            include (TEMPLATEPATH . '/lsm.php'); 

            ?>

            <div class="post-background">
				<div class="wrapper">
					<div class="post-slider clearfix">
                        <div class="post-header">
						  <div class="post-child-header">
				            <h2>Featured Books</h2>
				          </div>
	                      <div class="post-child-header">
				            <a href="#">View all</a> <i class="fa fa-chevron-right post-header-btn"></i>
				          </div>
					    </div>
                        <div class="pp2"><i class="fa fa-chevron-left"></i></div>
				    	<div class="nn2"><i class="fa fa-chevron-right"></i></div>
						<div class="post-wrap clearfix text-center">
						    <?php $myquery = new WP_Query('category_name=books&posts_per_page=100&order=ASC'); ?>
							<?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
								<div class="post">
	                            	<div class="post-content">
		                            	<img src="<?= get_the_post_thumbnail_url(); ?>" alt="Post Image" style="width:90px;">
						    			<p class="post-content-title text-center"><?= get_the_title(); ?></p>
						    		    <p class="post-content-sn text-center" id="post-content-sn">eISBN: 9780857990808</p>
						    			<div class="post-content-button">
						    				<a href="<?= get_the_post_thumbnail_url(); ?>" class="btn btn-default post-content-btn">VIEW BOOK</a>
						    			</div>
					    		    </div>
	                            </div>
							<?php endwhile; ?>
						</div>
					</div>
			    </div>
		    </div>

            <div class="bio-sec-container wrapper clearfix">
		    	<div class="bio-sec-row">
		    		<div class="bio-sec-column">
		    			<h2>Biography</h2>
		    			<p>
		    				Aenean suscipit consequat dui, gravida malesuada mi rhoncus id. Etiam ex sem, mattis sed aliquam quis, sodales id arcu. Quisque consectetur eleifend fermentum. 
		    			</p><br>
		    			<p>
		    				Phasellus fringilla porttitor turpis, in feugiat nunc sagittis sit amet. Vestibulum a mi metus. Fusce a urna sed sapien consequat venenatis. Quisque urna mauris, malesuada sed neque sit amet, rhoncus tempor enim.
		    			</p>
		    			<div class="bio-sec-button">
				           <input class="btn btn-default bio-sec-btn" type="button" value="VIEW FULL BIO">
				        </div>
		    		</div>
		    		<div class="bio-sec-column">
		    			<div>
		    				<img src="<?php echo(get_template_directory_uri()); ?>/images/bio.jpg" alt="Biography Pic">
		    			</div>
		    		</div>
		    	</div>
			</div><br><br>
			<br><br><br><br>

			<div class="blog-post-background">
				<div class="wrapper">
					<div class="blog-post-wrapper clearfix">
						<div class="blog-post-slider clearfix">
					        <h2 class="text-center">News & Appearances</h2>
	                        <div class="bppa"><i class="fa fa-chevron-left"></i></div>
				    	    <div class="bpna"><i class="fa fa-chevron-right"></i></div>
							<div class="blog-post-wrap clearfix text-center">
							    <?php $myquery = new WP_Query('category_name=news&posts_per_page=100&order=ASC'); ?>
								<?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
									<div class="blog-post-details">
		                            	<div class="blog-post-content">
		                            		<div class="blog-post-thumb">
			                            	  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Blog Post"  style="width:105px;"/>
			                                </div>
							    			<p class="blog-post-content-title text-left"><?php echo get_the_content(); ?></p>
							    			<div class="blog-post-content-button">
							    				<a href="<?= get_the_post_thumbnail_url(); ?>" class="blog-post-content-btn">READ MORE</a>
							    			</div>
						    		    </div>
		                            </div>
								<?php endwhile; ?>
							</div>
						</div>
				    </div>
				</div>
		    </div><br>

			<div class="_torn-sec-container wrapper clearfix">
		    	<div class="_torn-sec-row">
		    		<div class="_torn-sec-column">
		    			<h2>NEW RELEASE<br>
		    				"TORN" order now
		    			</h2>
		    			<p>
		    				Aenean suscipit consequat dui, gravida malesuada mi rhoncus id. Etiam ex sem, mattis sed aliquam quis, sodales id arcu. Quisque consectetur eleifend fermentum. Phasellus fringilla porttitor turpis, in feugiat nunc sagittis sit amet. 
		    			</p><br>
		    			<p>
		    				Release date: 3 Sept 2016.
		    			</p><br>
		    			<p>
		    				Fusce a urna sed sapien consequat venenatis. (Quisque urna mauris): 15
		    				Dec 2016
		    			</p>
		    			<div class="_torn-sec-button">
				           <input class="btn btn-default _torn-sec-btn" type="button" value="VIEW BOOK">
				        </div>
		    		</div>
		    		<div class="_torn-sec-column">
		    			<img src="<?php echo(get_template_directory_uri()); ?>/images/torn.jpg" alt="Torn Book">
		    		</div>
		    	</div>
			</div>
            
            <div class="cf7-container clearfix">
	            <div class="wrapper">
	                <div class="cf7-content clearfix">
	              	  <div class="cf7-child">
	                    <p>connect with my newsletter</p>
	                  </div>
		              <div class="cf7-child">
		                <?php echo do_shortcode("[contact-form-7 id='5' title='Contact form 1']"); ?><br>
		              </div>
	                </div>
	            </div>
                <div class="wpcf7-border-btm-container">
	    		   <div class="wpcf7-border-btm"></div>
	    	    </div>
            </div>
            

<?php

get_footer();