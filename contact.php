<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blackout-Red</title>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="description" content="Blackout-Red Html template">
  <meta name="keywords" content="keywords,go,here">
  <meta name="author" content="w2nap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
	<!-- Back to top button -->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
} 
</script>

<div class="header">
 <h1>BLACKOUT RED HTML</h1>
  <p>A GPL2 HTML Template...</p>
</div>

<div class="topnav">
  <a href="/index.html">Home</a>
  <a href="/contact.php">Contact Us</a>
  <a href="">MENU 1</a>
  <a href="">MENU 2</a>
  <a href="">MENU 3</a>
  <a href="">MENU 4</a>
  <a href="">MENU 5</a>
</div>


<div class="row">
  <div class="leftcolumn">
	  <div class="card">
	  <h5>Contact Us</h5>

<?php include('scripts/form.php'); ?>

    <!-- Error messages -->
    <?php if(!empty($response)) {?>
    <div class="form-group col-12 text-center">
      <div class="alert text-center <?php echo $response['status']; ?>">
        <?php echo $response['message']; ?>
      </div>
    </div>
    <?php }?>

    <!-- Contact form -->
    <form action="" name="contactForm" id="contactForm" method="post" enctype="multipart/form-data" novalidate>
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>

      <div class="form-group">
        <label>Subject</label>
        <input type="text" class="form-control" name="subject" id="subject">
      </div>

      <div class="form-group">
        <label>Message</label>
        <textarea class="form-control" rows="4" name="message" id="message"></textarea>
      </div>

      <div class="form-group">
        <!-- Google reCAPTCHA block -->
        <div class="g-recaptcha" data-sitekey="add-sitekey-here"></div>
      </div>

      <div class="form-group">
        <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">        
      </div>
    </form>
  </div>

  <!-- Google reCaptcha -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

	  
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h3>This is a block</h3>
      <p>Add stuff in the block</p>
    </div>
    <div class="card">
    <h3>Another block</h3>
    <p>This is another block</p>
    </div>
    <div class="card">
      <h3>And Another Block</h3>
       <p>Oh yeah another block</p>
    </div>
</div>
</div>
<div class="footer">
  <h4>Copyright Info.</h4>
  <h6>Blackout-Red by <a target="_new" href="https://www.w2nap.com">w2nap</a></h6>
</div>

<!-- back to top -->
 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 


</body>
</html>
