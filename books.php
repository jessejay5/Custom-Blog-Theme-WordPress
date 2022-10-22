<?php 

	/* Template Name: books */

get_header();
?>

<div class="_books-container clearfix">
    <div class="wrapper">
        <h2 class="_books-title text-center">Science Fiction</h2>
        <div class="_books-row">
	        <div class="_books-child-column _books-form-group">
		        <div class="text-center result-message"></div>
                <div class="text-center alert-success indicator"></div>
                <div class="_books-signup-row">
            		<div class="_books-signup-field">
					    <h4>connect with my newsletter</h4>
			        </div>
			        <div class="_books-signup-field">
	    				<form id="_books_signup_form" method="post">
						    <div class="_books-signup-field">
					       	    <input class="required form-control" id="_books_signup_name" type="text" name="_books_signup_name" placeholder="Name">
					       	</div>
					       	<div class="_books-signup-field">
					       	    <input class="required form-control" id="_books_signup_email" type="text" name="_books_signup_email" placeholder="Email">
					       	</div>
					        <div class="_books-signup-field">
						       	<input type="submit" id="_books_signup_btn" name="submit" value="SIGN UP">
					        </div>
				        </form>
			        </div>
		        </div>
            </div>
     

            <div class="_books-child-column">
                <div class="ahbt">
                	<div class="ahbt-header text-center">
                		<h4>Aftermath: Hathe Book Three</h4>
                		<div class="ahbt-header-col">
                		   <p><span>Publisher:</span> Mary Brock Jones</p>
                	    </div>
                		<div class="ahbt-header-col">
                		   <p><span>Publication Detail:</span> B07D36WTWS</p>
                	    </div>
                	</div>

                	<div class="ahbt-img text-center">
                		<div class="ahbt-img-col">
                		   <img src="<?php echo(get_template_directory_uri()); ?>/images/ga1.png" alt="Galaxy Awards 2018" style="width:70px;">
                	    </div>
                        <div class="ahbt-img-col">
                		   <img src="<?php echo(get_template_directory_uri()); ?>/images/aftermath2.jpg" alt="Aftermath 2" style="width:260px;margin-left: 15px;">
                	    </div>
                	</div>

                	<div class="ahbt-content clearfix">
                    	<div class="ahbt-content-row">
                    	  	<div class="ahbt-content-col">
                    	  		<p>
                    	  		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mattis tempor odio, at interdum dolor semper eu?
                    	  		</p>

                    	  		<p>
                    	  		  Quisque venenatis ex lectus, ac ullamcorper tellus suscipit eget. Donec scelerisque sagittis sollicitudin. Morbi auctor et justo sit amet malesuada. Cras id nibh vitae ipsum ultricies fringilla id laoreet urna. Quisque lobortis venenatis orci, vel fermentum sem aliquam fringilla. Vestibulum aliquet lacus libero, nec eleifend ligula facilisis in. Nulla in ipsum vel elit consectetur faucibus eget sit amet ante.  Morbi tempor consequat sem, sed egestas lacus. Vivamus ipsum diam.
                    	  		</p>
                    	  	</div>
                    	  	<div class="ahbt-content-col">
                    	  		<p>
                    	  		  Etiam commodo bibendum laoreet. Morbi tempor consequat sem, sed egestas lacus. Vivamus ipsum diam, pellentesque eget nunc sit amet, pretium feugiat lacus. Cras enim enim, imperdiet id malesuada finibus, mollis non magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    	  		</p>
                    	  		<p>
                    	  		  Donec sapien orci, pharetra at ex vitae, mollis suscipit dui.
                    	  		</p>
                    	  		<p>
                    	  		  Nam aliquet dapibus lacus. Quisque rhoncus, velit id pellentesque vestibulum, tortor quam pulvinar dolor, sed pellentesque augue augue vel turpis.
                    	  		</p>
                    	  	</div>
                		</div>
                	</div>

                	<div class="ahbt-btn-group text-center clearfix">
                        <div class="ahbt-btn-group-row">
                        	<div class="ahbt-btn-group-col">
                        		<div class="ahbt-btn-group-buy">
						    		<a href="<?= get_the_post_thumbnail_url(); ?>" class="btn btn-default ">buy now</a>
						    	</div>
                        	</div>
                        	<div class="ahbt-btn-group-col">
                        		<div class="ahbt-btn-group-img">
                    		        <img src="<?php echo(get_template_directory_uri()); ?>/images/kindle.jpg" alt="Kindle" style="width: 55px;">
                    	        </div>
                        	</div>
                        	<div class="ahbt-btn-group-col">
                        		<div class="ahbt-btn-group-prev">
						    		<a href="<?= get_the_post_thumbnail_url(); ?>" class="btn btn-default ">preview</a>
						    	</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ts-hthbk-container">
        <div class="ts-hthbk-row clearfix">
        	<div class="ts-hthbk-header text-center">
        		<h4>Toil and Strife: Hathe Book One and Two</h4>
        		<div class="ts-hthbk-header-col">
        		   <p><span>Publisher:</span> Mary Brock Jones</p>
        	    </div>
        		<div class="ts-hthbk-header-col">
        		   <p><span>Publication Detail:</span> B07D36WTWS</p>
        	    </div>
        	</div>

        	<div class="ts-hthbk-img text-center">
                <div class="ts-hthbk-img-col">
        		   <img src="<?php echo(get_template_directory_uri()); ?>/images/ts.jpg" alt="Toil and Strife" style="width:260px;">
        	    </div>
        	</div>

    		<div class="ts-hthbk-content wrapper clearfix">
            	<div class="ts-hthbk-content-row">
            	  	<div class="ts-hthbk-content-col">
            	  		<p>
            	  		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mattis tempor odio, at interdum dolor semper eu?
            	  		</p>

            	  		<p>
            	  		  Quisque venenatis ex lectus, ac ullamcorper tellus suscipit eget. Donec scelerisque sagittis sollicitudin. Morbi auctor et justo sit amet malesuada. Cras id nibh vitae ipsum ultricies fringilla id laoreet urna. Quisque lobortis venenatis orci, vel fermentum sem aliquam fringilla. Vestibulum aliquet lacus libero, nec eleifend ligula facilisis in. Nulla in ipsum vel elit consectetur faucibus eget sit amet ante.  Morbi tempor consequat sem, sed egestas lacus. Vivamus ipsum diam.
            	  		</p>
            	  	</div>
            	  	<div class="ts-hthbk-content-col">
            	  		<p>
            	  		  Etiam commodo bibendum laoreet. Morbi tempor consequat sem, sed egestas lacus. Vivamus ipsum diam, pellentesque eget nunc sit amet, pretium feugiat lacus. Cras enim enim, imperdiet id malesuada finibus, mollis non magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            	  		</p>
            	  		<p>
            	  		  Donec sapien orci, pharetra at ex vitae, mollis suscipit dui.
            	  		</p>
            	  		<p>
            	  		  Nam aliquet dapibus lacus. Quisque rhoncus, velit id pellentesque vestibulum, tortor quam pulvinar dolor, sed pellentesque augue augue vel turpis.
            	  		</p>
            	  	</div>
        		</div>
        	</div>

        	<div class="ts-hthbk-btn-group text-center clearfix">
                <div class="ts-hthbk-btn-group-row">
                	<div class="ts-hthbk-btn-group-col">
                		<div class="ts-hthbk-btn-group-buy">
				    		<a href="<?= get_the_post_thumbnail_url(); ?>" class="btn btn-default ">buy now</a>
				    	</div>
                	</div>
                	<div class="ts-hthbk-btn-group-col">
                		<div class="ts-hthbk-btn-group-img">
            		        <img src="<?php echo(get_template_directory_uri()); ?>/images/kindle.jpg" alt="Kindle" style="width: 55px;">
            	        </div>
                	</div>
                	<div class="ts-hthbk-btn-group-col">
                		<div class="ts-hthbk-btn-group-prev">
				    		<a href="<?= get_the_post_thumbnail_url(); ?>" class="btn btn-default ">preview</a>
				    	</div>
                	</div>
                </div>
            </div>
        </div>
    </div>

    <div class="torn-sec-container clearfix">
        <div class="torn-sec-row">
        	<div class="torn-sec-header text-center">
        		<h4>Torn</h4>
        		<div class="torn-sec-header-col">
        		   <p><span>Publisher:</span> Mary Brock Jones</p>
        	    </div>
        		<div class="torn-sec-header-col">
        		   <p><span>Publication Detail:</span> B07D36WTWS</p>
        	    </div>
        	</div>

        	<div class="torn-sec-img text-center">
                <div class="torn-sec-img-col">
        		   <img src="<?php echo(get_template_directory_uri()); ?>/images/torn-2.jpg" alt="Torn" style="width:260px;">
        	    </div>
        	</div>

    		<div class="torn-sec-content wrapper clearfix">
            	<div class="torn-sec-content-row">
            	  	<div class="torn-sec-content-col">
            	  		<p>
            	  		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mattis tempor odio, at interdum dolor semper eu?
            	  		</p>

            	  		<p>
            	  		  Quisque venenatis ex lectus, ac ullamcorper tellus suscipit eget. Donec scelerisque sagittis sollicitudin. Morbi auctor et justo sit amet malesuada. Cras id nibh vitae ipsum ultricies fringilla id laoreet urna. Quisque lobortis venenatis orci, vel fermentum sem aliquam fringilla. Vestibulum aliquet lacus libero, nec eleifend ligula facilisis in. Nulla in ipsum vel elit consectetur faucibus eget sit amet ante.  Morbi tempor consequat sem, sed egestas lacus. Vivamus ipsum diam.
            	  		</p>
            	  	</div>
            	  	<div class="torn-sec-content-col">
            	  		<p>
            	  		  Etiam commodo bibendum laoreet. Morbi tempor consequat sem, sed egestas lacus. Vivamus ipsum diam, pellentesque eget nunc sit amet, pretium feugiat lacus. Cras enim enim, imperdiet id malesuada finibus, mollis non magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            	  		</p>
            	  		<p>
            	  		  Donec sapien orci, pharetra at ex vitae, mollis suscipit dui.
            	  		</p>
            	  		<p>
            	  		  Nam aliquet dapibus lacus. Quisque rhoncus, velit id pellentesque vestibulum, tortor quam pulvinar dolor, sed pellentesque augue augue vel turpis.
            	  		</p>
            	  	</div>
        		</div>
        	</div>

        	<div class="torn-sec-btn-group text-center clearfix">
                <div class="torn-sec-btn-group-row">
                	<div class="torn-sec-btn-group-col">
                		<div class="torn-sec-btn-group-buy">
				    		<a href="<?= get_the_post_thumbnail_url(); ?>" class="btn btn-default ">buy now</a>
				    	</div>
                	</div>
                	<div class="torn-sec-btn-group-col">
                		<div class="torn-sec-btn-group-img">
            		        <img src="<?php echo(get_template_directory_uri()); ?>/images/kindle.jpg" alt="Kindle" style="width: 55px;">
            	        </div>
                	</div>
                	<div class="torn-sec-btn-group-col">
                		<div class="torn-sec-btn-group-prev">
				    		<a href="<?= get_the_post_thumbnail_url(); ?>" class="btn btn-default ">preview</a>
				    	</div>
                	</div>
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
