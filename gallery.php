<!DOCTYPE html>
<html>
<head>
	<link  rel="stylesheet" href="CSS\gallery.css" type="text/css" >
	<title>HOME</title>
</head>
<body>

	<?php include('navbar.php'); ?>

			 	<div id="content" class="slideshow-container">
				 <p id="text">Working Place</p>
				 
			 		<div id="line1" class="mySlides fade">
						 <img src="image/campus.jpg" width="900px" height="550px" alt="foto1">
					 </div>

					 <div id="line1" class="mySlides fade">
						<img src="image/office.jpg"  width="900px" height="550px" alt="foto2">
					</div>

					 <div id="line1" class="mySlides fade">
			 			<img src="image/office2.jpg"  width="900px" height="550px" alt="foto3">
					 </div>

					 <div id="line1" class="mySlides fade">
						<img src="image/office3.png" width="900px" height="550px" alt="foto4">
					</div>

					<div id="line1" class="mySlides fade">
						<img src="image/team.jpg"  width="900px" height="550px" alt="foto5">
					</div>

					<div id="line1" class="mySlides fade">
						<img src="image/teambuilding.jpg" width="900px" height="550px" alt="foto6">
					</div>
					 
					 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                     <a class="next" onclick="plusSlides(1)">&#10095;</a>

					 <div style="margin-left: 250px;">
						<span class="dot" onclick="currentSlide(1)"></span> 
						<span class="dot" onclick="currentSlide(2)"></span> 
						<span class="dot" onclick="currentSlide(3)"></span> 
						<span class="dot" onclick="currentSlide(4)"></span> 
						<span class="dot" onclick="currentSlide(5)"></span> 
						<span class="dot" onclick="currentSlide(6)"></span> 
					  </div>


			 	</div>	
				<div id="footer">
					<p id="footertext">Kuhn Interactive © 1996-2020. All right reserved. Designed & supported by <b>Kezarth Group.</b></p>
					<img id="Fotofooter" src="image\Foto-footer.png" alt="foto footer">	
				</div>	
				<script>
					var slideIndex = 1;
					showSlides(slideIndex);
					
					function plusSlides(n) {
					  showSlides(slideIndex += n);
					}
					
					function currentSlide(n) {
					  showSlides(slideIndex = n);
					}
					
					function showSlides(n) {
					  var i;
					  var slides = document.getElementsByClassName("mySlides");
					  var dots = document.getElementsByClassName("dot");
					  if (n > slides.length) {slideIndex = 1}    
					  if (n < 1) {slideIndex = slides.length}
					  for (i = 0; i < slides.length; i++) {
						  slides[i].style.display = "none";  
					  }
					  for (i = 0; i < dots.length; i++) {
						  dots[i].className = dots[i].className.replace(" active", "");
					  }
					  slides[slideIndex-1].style.display = "block";  
					  dots[slideIndex-1].className += " active";
					}
			</script>		
	</div>

</body>
</html>