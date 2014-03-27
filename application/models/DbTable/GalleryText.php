<?php
class Application_Model_DbTable_Gallerytext extends Zend_Db_Table_Abstract{
	protected $_name = 'galerie_text';
	protected $_primary = 'id_gallery_text';

	public function getAnnonce(){
		$db = Zend_Db_Table::getDefaultAdapter();
		$select = $db->select()
		->from($this->_name);

		$select = $select->query();
		$result = $select->fetchAll();

		return $result;
	}
	
	
}
