<?php 

	/* Template Name: bio */

get_header();
?>


<div class="_biography-container clearfix">
    <div class="wrapper">
        <h2 class="_biography-title text-center">Biography</h2>
        <div class="_biography-row">
            <div class="_biography-column">
            	<div class="_biography-header">
	                <h2>
	                	Mary Brock Jones Lives in Auckland, New Zealand, but heer childhood
	                	years in the stunning Otago region of the South Island live on on
	                	the romantic adventures of her heroes and heroines.
	                </h2>
                </div>
                <div class="_biography-content">
	                <p>
	                   Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
	                </p>

	                <p>
	                   Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
	                </p>

	                <p>
	                   Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
	                </p>
                </div>
	        </div>
	        <div class="_biography-column">
		        <div class="_biography-pic">
	                <img src="<?php echo(get_template_directory_uri()); ?>/images/bio.jpg" alt="Biography">
                </div>
            </div>
	        <div class="_biography-column">
                <div class="_biography-form-group">
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
<div class="lsm-container lsm-sec">
    <?php
       include (TEMPLATEPATH . '/lsm.php'); 
    ?>
</div>

<?php

get_footer();
