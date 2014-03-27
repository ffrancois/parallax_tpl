<?php 
class Application_Form_Email extends Zend_Form{
	
	public function __construct($id,$options = null){
		parent::__construct($options);
		
		$this->setName('Email');
		$this->setAction($options.'/Gsm/public/annonce/email/id/'.$id);
		
		//verification de l'email
		$verifEmail = new Zend_Validate_EmailAddress();
		$verifEmail->setMessage('Email Non Valide !');
		
		//Champs texte pour une recherche le titre de l'email
		$titre =  new Zend_Form_Element_Text('titre');
		$titre->setLabel("Titre de l'email :")
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->setRequired(true);
		
		//Champ texte pour l'adresse email
		$email = new Zend_Form_Element_Text("adresse_email");
		$email->setLabel('Votre adresse email :')
		->addValidator($verifEmail)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->setRequired(true);
		
		//Textearea change en wysiwig pour la description de l'annonce
		$texteEmail = new Zend_Form_Element_Textarea('texteEmail');
		$texteEmail->setLabel("Texte de l'annonce :")
					 ->setAttrib("class", "markItUp")
		             ->setRequired(true)
			         ->addFilter('StripTags')
		             ->addFilter('StringTrim')
				     ->setAttribs(array(
								'placeholder'=>'Message',
								'cols'=>70,
								'rows'=>7)
								);
		
		//Bouton submit pour envoyer les donnees
		$submit = new Zend_Form_Element_Image('submit');
		$submit->setImage($options.'/images/contact/btn_envoyer.png')
		->setAttribs(array('id' => 'submitConnex',
				'alt' => 'Valider'));
		
		//Ajouts des differents elements dans le formulaire
		$this->addElements(array($titre,$email,$texteEmail,$submit));
			
	}		
}
?>