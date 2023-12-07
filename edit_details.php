<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lake Luise</title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</head>
<body>
<nav>
        <div id="header" style="background: rgb(199 189 189 / 50%);">
              <ul>
                <li><a href="index.html"><b>Home</b></a></li>
                <li><a href="second_destination.html" class="mx-3"><b>Lake Luise</b></a></li>
                <li><a href="Booking_info.html" class="mx-3"><b>Book</b></a></li>
                <li><a href="details.php" class="mx-3"><b>Details</b></a></li>
              </ul>
            </div>
        </nav>
    <form action="edit.php" method="post" class="mt-5">
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="text" name="email" id="email"  class="form-control">  
            </div>
            <div class="form-group">
              <label for="firstName">First Name:</label>
              <input type="text" name="first_name" class="form-control" id="first_name">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" class="form-control" id="last_name">
            </div>
           
            <div class="form-group">
                <label for="Address">Address:</label>
                <input type="text" name="address" class="form-control" id="Address">
            </div>
            
            <div class="form-group">
                <label for="comment">Comment:</label>
                <input type="text-area" name="comment" class="form-control" id="comment">
            </div>
           
            <button type="submit" class="btn btn-danger my-3">Submit</button>
          </form>

    
<script>
  $(document).ready(function() {
    // Function to get URL parameters
    function getUrlParameter(name) {
      name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
      var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
      var results = regex.exec(location.search);
      return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    // Get URL parameters and populate form fields
    var first_name = getUrlParameter("first_name");
    var last_name = getUrlParameter("last_name");
    var email = getUrlParameter("email");
    console.log(first_name)
    // Populate form fields
    $("#first_name").val(first_name);
    $("#last_name").val(last_name);
    $("#email").val(email);
  });
</script>

</body>
</html>
