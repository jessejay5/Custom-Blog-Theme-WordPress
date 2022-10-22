<?php 

	/* Template Name: blog */

get_header();
?>

<div class="_blog-background clearfix">
	<div class="wrapper">
		<div class="_blog">
			<div class="_blog-row">
		        <h2 class="text-center">Blog</h2>
				<div class="_blog-wrap">
				    <?php $myquery = new WP_Query('category_name=blog&posts_per_page=2&order=ASC'); ?>
					<?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
						<div class="_blog-col">
                        	<div class="_blog-content">
                        		<div class="_blog-thumb text-center">
                            	  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Blog"  style="width:105px;"/>
                                </div>
				    			<p class="_blog-title"><?php echo get_the_content(); ?></p>
				    			<div class="_blog-btn">
				    				<a href="<?= get_the_post_thumbnail_url(); ?>" class="_blog_btn">READ MORE</a>
				    			</div>
			    		    </div>
                        </div>
					<?php endwhile; ?>
			
					<div class="_blog-signup">
	    				<div class="text-center result-message"></div>
		                <div class="text-center alert-success indicator"></div>
		    				<p>Sign up to my news letter for new releases and sales news</p>
		    				<form id="signup_sec_form" method="post">
							    <div class="_blog-signup-field">
						       	    <input class="required form-control" id="signup_sec_email" type="text" name="signup_sec_email" placeholder="Email*">
						       	</div>
						       	<div class="_blog-signup-field">
						       	    <input class="required form-control" id="signup_sec_first_name" type="text" name="signup_sec_first_name" placeholder="First Name*">
						       	</div>
						       	<div class="_blog-signup-field">
						       	    <input class="required form-control" id="signup_sec_last_name" type="text" name="signup_sec_last_name" placeholder="Last Name*">
						       	</div>
						        <div class="_blog-signup-field">
							       	<input type="submit" id="signup_sec_btn" name="submit" value="SIGN UP">
						        </div>
					        </form>
		    		    </div>
				    </div>
				</div>
                
				<div class="_blog-sub-wrap">
				    <?php $myquery = new WP_Query('category_name=news&posts_per_page=12&order=ASC'); ?>
					<?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
						<div class="_blog-col">
                        	<div class="_blog-content">
                        		<div class="_blog-thumb text-center">
                            	  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Blog"  style="width:105px;"/>
                                </div>
				    			<p class="_blog-title"><?php echo get_the_content(); ?></p>
				    			<div class="_blog-btn">
				    				<a href="<?= get_the_post_thumbnail_url(); ?>" class="_blog_btn">READ MORE</a>
				    			</div>
			    		    </div>
                        </div>
					<?php endwhile; ?>
				</div>
			</div>
	    </div>
	</div>
</div><br>
<div class="lsm-container clearfix">
    <?php
       include (TEMPLATEPATH . '/lsm.php'); 
    ?>
</div>


<?php

get_footer();


