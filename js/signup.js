var $j = jQuery.noConflict();
// Initialize and add the map

$j(document).ready(function() {
  $j("#signup_sec_form").validate({
      rules: {
        signup_sec_email: {
          required: true,
          email: true
        },
        signup_sec_first_name: {required: true},
        signup_sec_last_name: {required: true}
      },
      messages: {
        signup_sec_email: {required: "email is required"},
        signup_sec_first_name: {required: "first name is required"},
        signup_sec_last_name: {required: "last name is required"}
      },

      submitHandler: function (form, e) { 
        e.preventDefault();
        
        $j('.indicator').show();
        $j('.indicator').html('Please wait...');
        $j('.result-message').hide();

        var signup_sec_email  = $j('#signup_sec_email').val();
        var signup_sec_fn  = $j('#signup_sec_first_name').val();
        var signup_sec_ln  = $j('#signup_sec_last_name').val();

         /**
         * AJAX URL where to send data
         * (from localize_script)
         **/
        //var ajax_url = signup_reg_vars.signup_ajax_url;

        // Data to send
        data = {
          action: 'user signup',
          email: signup_sec_email,
          fn: signup_sec_fn,
          ln: signup_sec_ln,
        };

        $j.ajax({
          type: "POST",
          dataType: 'json',
          url: 'http://localhost/wordpress/index.php/signup/',
          data: data,
          success: function(data) {
            console.log(data);
            if(data) {$j('.indicator').hide();}
            if(data.signup == true) {
              $j('.result-message').show(); // Show results div
              $j('.result-message').html(data.message); // Add success message to results div
              $j('.result-message').addClass('alert-success'); // Add class success to results div
            } else {
              $j('.result-message').show(); // Show results div
              $j('.result-message').html(data.message);
              $j('.result-message').addClass('alert-danger'); // Add class failed to results div
            }
          }
        });      
        return false;
      }
  });

  
  $j("#_books_signup_form").validate({
    rules: {
      _books_signup_name: {
        required: true
      },
      _books_signup_email: {
        required: true,
        email: true
      },
    },
    messages: {
      _books_signup_name: {required: "name is required"},
      _books_signup_email: {required: "email is required"},
    },
  });
  
  /*
  $j("#bks_signup_form").on('submit', function(e) {
    e.preventDefault();
    
    $j('.indicator').show();
    $j('.indicator').html('Please wait...');
    $j('.result-message').hide();

    var signup_name  = $j('#bks_signup_name').val();
    var signup_email  = $j('#bks_signup_email').val();

     /**
     * AJAX URL where to send data
     * (from localize_script)
     

    // Data to send
    data = {
      action: 'user signup',
      name: signup_name,
      email: signup_email,
    };

    $j.ajax({
      type: "POST",
      dataType: 'json',
      url: 'http://localhost/wordpress/index.php/bks-signup/',
      data: data,
      success: function(data) {
        console.log(data);
        if(data) {
          $j('.indicator').hide();
        }
        if(data.signup == true) {
          $j('.result-message').show(); // Show results div
          $j('.result-message').addClass('alert-success'); // Add class success to results div
          $j('.result-message').html(data.message); // Add success message to results div
        } else {
          $j('.result-message').show(); // Show results div
          $j('.result-message').addClass('alert-danger'); // Add class failed to results div
          $j('.result-message').html(data.message);
        }
      }
    });
    return false;
  });
  */
});


  

