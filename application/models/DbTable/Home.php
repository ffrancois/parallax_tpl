<?php
class Application_Model_DbTable_Home extends Zend_Db_Table_Abstract{
	protected $_name = 'home';
	protected $_primary = 'id_home';

	public function getAnnonce(){
		$db = Zend_Db_Table::getDefaultAdapter();
		$select = $db->select()
		->from($this->_name);

		$select = $select->query();
		$result = $select->fetchAll();

		return $result;
	}
	
	
}
