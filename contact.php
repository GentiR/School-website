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
<link  rel="stylesheet" href="CSS\contact.css" type="text/css" >
<script type="text/javascript" src="JavaScript\contact.js"></script>
	<title>PARNERS</title>
</head>
<body>
	<div id="page">
	<?php include("navbar.php"); ?>
		<div id="content">	
					<div id="content_margin">
						<h3>Contact Us</h3>
						<form id="contact_form" method="POST" onsubmit="return validateForm();" enctype="multipart/form-data">
							
							<div class="row">
								<label class="required" for="name">Name:</label><br/>
								<input id="name" class="inputs" name="name" type="text" value="" size="30"/><br/>
								<div>
									<span id="name_validation" class="error"></span>
								</div>
							</div>
							
							<div class="row">
								<label class="required" for="surname">Surname:</label><br/>
								<input id="surname" class="inputs" name="surname" type="text" value="" size="30"/><br/>
								<div>
									<span id="surname_validation" class="error"></span>
								</div>
							</div>

							<div class="row">
								<label class="required" for="email">Email:</label><br/>
								<input id="email" class="inputs" name="email" type="text" value="" size="30"/><br/>
								<div>
									<span id="email_validation" class="error"></span>
								</div>
								
							</div>

							<div class="row">
								<label class="required" for="telephone">Number:</label><br/>
								<input id="telephone" class="inputs" name="telephone" type="text" value="" size="30"/><br/>
								<div>
									<span id="telephone_validation" class="error"></span>
								</div>
							</div>

							<div class="row">
								<label class="required" for="gender">Gender:</label><br/>
								<input name="gender" type="radio" value="mashkull"/>Male
								<input name="gender" type="radio" value="femer"/>Female
								<div>
									<span id="gender_validation" class="error"></span>
								</div>
							</div>

							<br/>

							<div class="row">
								<label for="profession">Profesioni:</label><br/>
								<select name="profesioni" class="inputs">
									<option value="student">Student</option>
									<option value="inxhinier i kompjuterikes">Inxhinier i Kompjuterikes</option>
									<option value="inxhinier i ndertimtaris">Inxhinier i Ndertimtaris</option>
									<option value="inxhinier i mekatronikes">Inxhinier i Mekatronikes</option>
								</select>
							</div>

							<br/>

							<div class="row">
								<label for="profession">Lendet:</label><br/>
								<input type="checkbox" name="database" value="my_sql">Web Engineering</input><br/>
								<input type="checkbox" name="database" value="ms_sql">Computer Science 2</input><br/>
								<input type="checkbox" name="database" value="maria_db">DataBase</input><br/>
							</div>

							<div class="row">
								<label class="required" for="message">Your message:</label><br/>
								<textarea id="message" class="inputs" name="message" rows="5" cols="30"></textarea><br/>
								<div>
									<span id="message_validation" class="error"></span>
								</div>
							</div>

							<input type="submit" name="send_button" value="Send email"/>

						</form>

					</div>		
				<div id="footer">
					<p id="footertext">Kuhn Interactive © 1996-2020. All right reserved. Designed & supported by <b>Kezarth Group.</b></p>
					<img id="Fotofooter" src="image\Foto-footer.png" alt="foto footer">	
				</div>
		</div>		  				
	</div>
</body>
</html>