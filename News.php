<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="social.css">
<link rel="stylesheet" type="text/css" href="slideshow.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div class="w3-container w3-green">
  <h1>Learn to code at Belfast Met</h1> 
  <p>Create your own website</p>
  
  <ul class="home">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="News.php">News</a></li>
  <li><a href="Contact.php">Contact</a></li>
  <li><a href="login.php">Login</a></li>
  <li class="right"><a href="About.php">About</a></li>
</ul>
  

</div>
  
<!-- Slideshow container -->
<div class="slideshow-container" >

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imageholder\image1.jpg" style="width:100%" >
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imageholder\image2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imageholder\image3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>


var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides,6000); // Change image every 2 seconds
}




</script>

<footer>


	<p>Copyright 2013 by NBLCorp all rights reserved <p>
				
			
		
	<a href="http://www.facebook.com" class="fa fa-facebook" width="20%"></a>
	<a href="http://www.facebook.com" class="fa fa-twitter" width="20%"></a>
	<a href="http://www.facebook.com" class="fa fa-instagram" width="20%"></a>
						
					
		
	</footer>
