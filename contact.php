<html>
	<head>
		<link rel="stylesheet" href="contact.css" />
		<script type="text/javascript" src="contact.js"></script>
	</head>
	<body>

		<div id="box">
		  <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
		    <h3>contactez-nous</h3>
		    <label>Nom: <span>*</span></label>
		    <input type="text" id="name" name="name" placeholder="Nom"/>
		    <label>Email: <span>*</span></label><span id="info" class="info"></span>
		    <input type="text" id="email" name="email" placeholder="Email"/>
		    <label>Sujet: <span>*</span></label>
		    <input type="text" id="subject" name="subject" placeholder="Demande de renseignement"/>
		    <label>Message:</label>
		    <textarea id="message" name="message" placeholder="Message..."></textarea>
		    <input type="submit" name="send" value="Envoyer le message"/>
			<div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            <?php if (! empty($mail_msg)) { ?>
              <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
            <?php } ?>
            </div>
		  </form>
	    </div>
		
	</body>
    
</html>

<?php
//Base de donnée
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$connexion = mysqli_connect("localhost", "root", "root", "SAE") or die("Erreur de connexion: " . mysqli_error($connexion));
	$result = mysqli_query($connexion, "INSERT INTO contact (name, email, subject, message) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $message. "')");
	if($result){
		$db_msg = "Vos informations de contact sont enregistrées avec succés.";
		$type_db_msg = "success";
	}else{
		$db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
		$type_db_msg = "error";
	}
	
}


?>

