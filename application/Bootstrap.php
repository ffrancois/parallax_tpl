<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
protected function __initSession(){
	Zend_Session::start();

$view = new Zend_View();

Zend_Dojo::enableView($view);

////fin calandrier

require_once "Zend/Loader.php";
Zend_Loader::registerAutoload();
 
// Dispatch the request using 
//if(!Zend_Registry::isRegistered('session')){
//$session = new Zend_Session_Namespace('session');
//$session->caca = "pas bon";
//Zend_Registry::set('session', $session);
//
//
//
//}
}

public function _initDoctype(){
	$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
	$viewRenderer->init();
	$view = $viewRenderer->view;
	$view->headMeta()->appendHttpEquiv('Content-Type',
			'text/html; charset=utf-8');
}
	
	protected function _initCache() {
		$frontend = array(
				'lifetime' => 14400 ,
				'automatic_serialization' => true
		);
		$backend = array(
				'cache_dir' => sys_get_temp_dir(), /**automatically detects**/
		);
		$cache = Zend_Cache::factory('core', 'File', $frontend, $backend);
		Zend_Registry::set('cache', $cache);
	}
	

}

