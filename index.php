<?php

	if(isset($_POSTT['send_button'])){
		$admin_mail = 'gentirechica@gmail.com';

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$send = 'You have received an email by : ' . $name . '( ' . $email . ' ) : ' .$message;

		mail($admin_mail , 'Form Submit' , $send);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<link  rel="stylesheet" href="CSS\home.css" type="text/css" >
	<title>HOME</title>
</head>
<body>
	<div id="page">
		<?php include('navbar.php'); ?>
		<div class="fade-in">
			<img src="image\WEB-PAGE.jpg" width="1000px" alt="WEB-PAGE">
		</div>
			 	<div id="content">
			 		<div id="contentelement1">
			 			<div>
			 				<img class="icon" src="image\Foto1-content.png" align="left" alt="icon"> 
			 				<img class="icon pos" src="image\shigjeta.png" align="left" alt="icon">
			 				<p id="textcontent" ><b>Ours company news:</b>
			 			</div>
			 				<p id="textcontent"><b> 13 December, 2020</b></p>
			 				<p id="textcontentwhite"><b>Moleste lacmo</b>, consectetuer modest lalor de siuma. Conost lestecial uno dela lamorit mascrimo per consectetur cons peraty deriteli.</p>
			 				<p id="textcontent"><b>15 December, 2020</b></p>
			 				<p id="textcontentwhite"><b>Consectetuer dese</b> modest de lalore siuma. Conost lestecial uno dela lamorit moscrimo per consectetuer. Conost lest uno dela lamorit moscrimo per consect</p>
			 				<img id="verticaldashed"src="image\vertical_dashed.png" alt="verticaldashed">
			 		</div>

			 		<div id="contentelement2">
			 			<div>
			 				<img class="icon pos" src="image\shigjeta.png" align="left" alt="icon">
			 				<p id="textcontent"><b>Why us?</b>
			 			</div>
			 				<p id="textcontentwhite"><b>Moleste lacmo</b>, consectetuer modest lalor de siuma. Conost lestecial uno dela lamorit mascrimo per consectetur cons peraty deriteli. Dese molor de la siuma.</p>
			 				<img src="image\Foto-1.png" alt="foto">
			 				<p id="textcontentwhite">Consectetuer modest lalor desia. Conos lestecial uno dela lamorit moscrimo pere consectetuer cons peraty deriteli. Dese molor de la siuma.</p>
			 				<img id="verticaldashed2"src="image\vertical_dashed.png" alt="foto">
			 		</div>
			 		<div id="contentelement3">
			 			<p id="Contact"><b>Contact Form</b></p><br/>
						 <form method="post">
							<input class="inputradius" name="name" maxlength="20" placeholder="Name"></input>
							<input class="inputradius" name="email" maxlength="20" placeholder="E-Mail"></input>
							<textarea id="inputradius2" name="message" rows="5" cols="20" placeholder="Message" name="Message"></textarea>
							<select  id="option" name="select">
								<option value="Option1">Select type...</option>
								<option value="Option2">Option1</option>
								<option value="Option3">Option2</option>
							</select>
			 				<input type="image" id="buttonGO" name="send_button" src="image\butoni-GO.png"></input>
						 </form>
			 		</div>
			 	</div>	
				<div id="footer">
					<p id="footertext">Kuhn Interactive © 1996-2020. All right reserved. Designed & supported by <b>Kezarth Group.</b></p>
					<img id="Fotofooter" src="image\Foto-footer.png" alt="foto">	
				</div>			
	</div>
</body>
</html>