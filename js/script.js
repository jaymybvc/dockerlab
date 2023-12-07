$(document).ready(function() {
    $("#more").click(function() {
      $('html, body').animate({
        scrollTop: $('#scrolldown').offset().top
      },1000); 
    });
    $('.edit-button').click(function() {
        // Get the row data attributes
        var row = $(this).closest('tr');
        var email = row.data('email');
        var phone_no = row.data('phone_no');
        var comment = row.data('comment');
        var address = row.data('address');
        var last_name = row.data('last_name');
        var first_name = row.data('first_name');

        // Construct the URL with the row data
        var newURL = `/edit_details.php` // Remove existing query parameters
        newURL += '?email=' + encodeURIComponent(email);
        newURL += '&first_name=' + encodeURIComponent(first_name);
        newURL += '&last_name=' + encodeURIComponent(last_name);
        newURL += '&phone_no=' + encodeURIComponent(phone_no);
        newURL += '&comment=' + encodeURIComponent(comment);
        newURL += '&address=' + encodeURIComponent(address);
        
        window.location.href = newURL;
    
      
     
  });
  });