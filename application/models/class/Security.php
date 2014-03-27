<?php

class Application_Model_Class_Security{
	
	const ERROR_INJECTION = 1 ;
	const ERROR_EMPTY = 2 ;
	const ERROR_MAIL = 3 ;
	const ERROR_CGV = 4 ;
	const ERROR_PASSWORD_DIFFERENT = 5 ;
	const ERROR_MAIL_ISSET = 6 ;
	const ERROR_OLD_PASSWORD_DIFFERENT = 7 ;
	
	private static function isInjectHtml($string){
		if(strlen($string) != strlen(strip_tags($string)))
			return true;
		return false;
	}
	
	public static function recursiveisInjectHtml($datas){
		foreach($datas as $data){
			if(self::isInjectHtml($data)) return true;
		}
		return false;
	}
	
	public static function recursiveEmpty($datas){
		foreach($datas as $data){
			if(empty($data)) return true;
		}
		return false;
	}
	
	public static function compareTo($first,$second){
		if($first == $second ) return true;
		else return false;
	}
	
	public static function gestionError($error){
		switch ($error) {
	    case 1:
	        return "Votre enregistement n'à pas été pris en compte";
	        break;
	    case 2:
	        return "Veuillez remplir tous les champs obligatoires";
	        break;
	    case 3:
	        return "Votre mail n'est pas valide";
	        break;
	    case 4:
	        return "Veuillez accepter les conditions générales d'utilisation";
	        break;
	    case 5:
	       	return "Les mots de passe ne correspondent pas";
	        break;
	    case 6:
	       	return "Un compte associé à ce mail existe déja ";
	        break;
	    case 7:
	       	return "Votre ancien mot de passe est érroné ";
	        break;
	    default:
	        return "Une erreur est survenue";
		}
	}
	
}
	