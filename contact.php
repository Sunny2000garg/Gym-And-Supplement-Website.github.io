<?php
$conn= mysqli_connect("localhost","root","","project");

?>
<!DOCTYPE html>
<html>
<title>GymAndSupplement</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="gs.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;background-color:rgb(230, 230, 230);}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
* {
  box-sizing: border-box;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=mail], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<body>

<!-- Navbar (sit on top) -->


<div class="gs-top">
  <div class="gs-bar gs-padding gs-card" style="font-family:JOKER;letter-spacing:4px;background-color:black;color:white;">
    <a href="index.html" class="gs-bar-item" ><img src="logo.jpg" height="70" width="300" ></a>

    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="gs-right gs-hide-small">
      <a href="About.html" class="gs-bar-item gs-button">About</a>
	  <a href="Blog.html" class="gs-bar-item gs-button">Blog</a>
	  <a href="Diet.html" class="gs-bar-item gs-button">Diet</a>
	  <a href="Supplement.html" class="gs-bar-item gs-button">Supplement</a>
	  <a href="Exercise.html" class="gs-bar-item gs-button">Exercise</a>
      <a href="Shop.html" class="gs-bar-item gs-button">Shop</a>
      <a href="contact.html" class="gs-bar-item gs-button">Contact</a>
    </div>
  </div>
</div>
<!-- Header -->
<header class="gs-display-container gs-content gs-wide" style="max-width:1600px;min-width:500px" id="home">
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="img1.jpg" width="1600" height="500">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="img5.jpg" width="1600" height="500">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="img6.jpg" width="1600" height="500">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img4.jpg" width="1600" height="500">
  <div class="text">Caption Three</div>
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>


<!-------------------------------------------------------------------------------------------->
  
  
<!--</header>-->

<!-- Page content -->
<div class="gs-content" style="max-width:1100px">




  <!-- Contact Section -->
  <div class="container " id="contact">
 <div style="text-align:center">
	<h6 style="color:gray">Got a question?</h6>
  <h1 >Contact</h1>
    <p>You can also contact us by sending mail:- <a href="mailto:gym.and.supplement@gmail.com" style="color:purple">Send email</a></p>
	<p>or you can send us a message here:</p>
 </div>
   <div class="row">
    <div class="column">'
      <img src="contact1.gif" class="gs-round gs-image gs-center" alt="Table Setting" width="600" height="750">
 </div>
	
    <div class="column">
      <form method="POST">
        <label for="fname">First Name</label>
<!--name-->        <input class="gs-input gs-padding-16" type="text" id="fname" name="fname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
<!--s_name-->       <input class="gs-input gs-padding-16" type="text" id="lname" name="lname" placeholder="Your last name.." required>
		<label for="email">Email ID</label>
<!--email-->   <input class="gs-input gs-padding-16" type="email" id="email" name="email" placeholder="Your email id.." required>
    <br>
        <label for="country">Country</label>
<!--country-->        <select id="country" name="country" required>
        <option selected hidden value="">Select Country</option>
		<option value="india">India</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Comment</label>
<!--comment-->       <textarea class="gs-input gs-padding-16" id="comment" name="comment" placeholder="Write something.." style="height:170px" required></textarea>
        <!--<input type="submit" value="Submit">-->
        <button type="submit" name="submit" >Submit</button>
      </form>
      <?php

      if(isset($_POST['submit'])){
        $contact_name= mysqli_real_escape_string($conn,$_POST['fname']);
        $contact_lname= mysqli_real_escape_string($conn,$_POST['lname']);
        $contact_email= mysqli_real_escape_string($conn,$_POST['email']);
        $contact_country= mysqli_real_escape_string($conn,$_POST['country']);
        $contact_comment=mysqli_real_escape_string($conn,$_POST['comment']);
        
     //checking if above fields are empty
     if(empty($contact_name) OR empty($contact_lname) OR empty($contact_email) OR empty($contact_country) OR empty($contact_comment)){
         header("Location: contact.php?message=empty+fields");
         exit();
     }

     $sql="INSERT INTO `contact` (`name`,`lname`,`email`,`country`,`comment`) 
                           VALUES ('$contact_name','$contact_lname','$contact_email','$contact_country','$contact_comment');";

                           if(mysqli_query($conn,$sql)){
                               header("Location: contact.php?message=Post+Published");
                           } else{
                            header("Location: contact.php?message=Error");
                           }
    }

      ?>
    </div>
 
  </div>
  
<!-- End page content -->
</div>
<!-- Footer -->


</body>
</html>
