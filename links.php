<?php 


	/* Template Name: links */

get_header();
?>

<div class="_links-wrap clearfix">
    <div class="wrapper">
        <h2 class="_links-name text-center">Links</h2>
        <div class="_links-row">
            <div class="_links-column clearfix">
            	<div class="_links-header">
	                <h2>
	                	Blog Posts
	                </h2>
                </div>
                <div class="_links-content">
	                <p>
	                   Lorem ipsum dolor sit amet - consetetur sadipscing elitr, sed diam nonumy eirmod. <a href="#">http://localhost/wordpress/links/</a>
	                </p>
                </div>
                <div class="_links-header">
	                <h2>
	                	Interviews
	                </h2>
                </div>
                <div class="_links-content _links-details">
	                <span>Lorem ipsum dolor sit amet - consetetur sadipscing elitr, sed diam nonumy eirmod. <a href="#">http://localhost/wordpress/links/</a></span>
	              
	                <p>Lorem ipsum dolor sit amet consetetur. <a href="#">http://localhost/wordpress</a></p>

	                <p>
	                   Lorem ipsum dolor sit amet - consetetur sadipscing elitr, sed diam nonumy eirmod. <a href="#">http://localhost/wordpress/links/</a>
	                </p>

	                <p>Lorem ipsum dolor sit amet consetetur. <a href="#">http://localhost/wordpress</a></p>

	                <p>Lorem ipsum dolor sit amet consetetur. <a href="#">http://localhost/wordpress</a></p>

	                <p>
	                   Lorem ipsum dolor sit amet - consetetur sadipscing elitr, sed diam nonumy eirmod.  Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<a href="#">http://localhost/wordpress</a>
	                </p>
                </div>
                <div class="_links-header">
	                <h2>
	                	Review of my Books
	                </h2>
                </div>
                <div class="_links-content _links-details">
	                <span>Lorem ipsum dolor sit amet - consetetur sadipscing elitr, sed diam nonumy eirmod. <a href="#">http://localhost/wordpress/links/</a></span>
	              
	                <p>Lorem ipsum dolor sit amet consetetur. <a href="#">http://localhost/wordpress</a></p>

	                <p>
	                   Lorem ipsum dolor sit amet - consetetur sadipscing elitr, sed diam nonumy eirmod. <a href="#">http://localhost/wordpress/links/</a>
	                </p>

	                <p>Lorem ipsum dolor sit amet consetetur. <a href="#">http://localhost/wordpress</a></p>

	                <p>Lorem ipsum dolor sit amet consetetur. <a href="#">http://localhost/wordpress</a></p>

	                <p>
	                   Lorem ipsum dolor sit amet - consetetur sadipscing elitr, sed diam nonumy eirmod.  Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<a href="#">http://localhost/wordpress</a>
	                </p>
                </div>
	        </div>
	        <div class="_links-column">
                <div class="_links-form-group">
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
    </div>
</div>
<div class="lsm-container clearfix">
    <?php
       include (TEMPLATEPATH . '/lsm.php'); 
    ?>
</div>

<?php

get_footer();

