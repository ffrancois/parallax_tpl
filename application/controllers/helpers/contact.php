<?php

 class Zend_Controller_Action_Helper_Contact extends Zend_Controller_Action_Helper_Abstract{
 	function __invoke(){
		$html = '
			<footer id=anchor4 class="footer light">
				<div class="footer-container">
					<div class="title one no-top">Contact</div>
					<div class="foot-third hideme dontHide">
						<div class="envie">ENVIE</div>
						<div class="of">DE</div>
						<div class="dialog">DIALOGUER</div>
						<div class="with_us">
							<img
								src="images/contact/rayure_blanche_contact.png"
								alt="" /> avec nous <img
								src="images/contact/rayure_blanche_contact.png"
								alt="" />
						</div>
						<div class="data">
							Utilisez ce formulaire pour prendre contact avec l"agence CandC, que
							se <br /> soit pour nous soumettre un projet, demander un
							renseignement ou <br /> juste pour nous dire bonjour <br /> <br /> <strong>
								Email :</strong> contact@candc-idf.com <br /> <strong> Téléphone :</strong>
							09.72.38.33.51 <br /> <strong> Adresse :</strong> <span
								class="adresse">13 avenue de Fontainebleau <br />77310
								Saint-Fargeau - Ponthierry
							</span>
						</div>
					</div>

					<div class="foot-third hideme dontHide">
						<form method="post" id="contact" class="peThemeContactForm" action="http://jellythemes.com/themes/solido/mail.php">
							<div id="personal" class="bay form-horizontal">
								<div class="formulaire_design">
									<input class="required span9" type="text" name="author" data-fieldid="0" value="Full Name" onclick="if(this.value=="Votre Nom") this.value=""" onblur="if(this.value=="") this.value="Full Name"">
									<input class="required span9" type="email" name="email" data-fieldid="1" value="Your Email" onclick="if(this.value=="Votre Email") this.value=""" onblur="if(this.value=="") this.value="Your Email"">
									<textarea name="message" rows="12" class="required span9" data-fieldid="2" onclick="if(this.value=="Type Message") this.value=""" onblur="if(this.value=="") this.value="Type Message"">Votre Message</textarea>
								</div>
								<button type="submit" class="submit">Envoyer</button>
							</div>
							<div class="notifications">
								<div class="formSent alert alert-success">
									<strong>Your Message Has Been Sent!</strong> Thank you for contacting us.</div>	
								<div class="formError alert alert-error">
									<strong>Oops, An error has ocurred!</strong> See the marked fields above to fix the errors.</div>
							</div>
						</form>
					</div>
				</div>
			</footer>';
		return $html;
	}
	

}

?>