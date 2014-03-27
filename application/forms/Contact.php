<?php
class Application_Form_Contact extends Zend_Form{

	public function __construct($options = null){
		parent::__construct($options);

		$this->setName('form_contact');
		$this->setAction($options.'/Gsm/public/index/contact');
		$this->setAttrib('enctype', 'multipart/form-data');

		//verification de l'email
		$verifEmail = new Zend_Validate_EmailAddress();
		$verifEmail->setMessage('Email Non Valide !');

		//Champs texte pour le nom
		$name =  new Zend_Form_Element_Text('name');
		$name->setLabel('Nom :')
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->setRequired(true);

		//Champs texte pour l'email
		$email =  new Zend_Form_Element_Text('email');
		$email->setLabel('EMail :')
		->addValidator($verifEmail)
		->addFilter('StripTags')
		->addFilter('StringTrim')
		->setRequired(true);

		//Textearea change en wysiwig pour la description de l'annonce
		$texte = new Zend_Form_Element_Textarea('texte');
		$texte->setLabel("Texte de l'annonce :")
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
		$this->addElements(array($name,$email,$texte,$submit));
			
	}
}