<?php
class IndexController extends Zend_Controller_Action {
    public function indexAction() {
    	
    	$this->view->slide_1=$this->getHelper('home')->__invoke();
    	$this->view->slide_2=$this->getHelper('about')->__invoke();
    	$this->view->video=$this->getHelper('video')->__invoke();
    	$this->view->slide_3=$this->getHelper('portfolio')->__invoke();
    	$this->view->slide_4=$this->getHelper('contact')->__invoke();
    	
    }

    
}
?>