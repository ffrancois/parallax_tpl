<?php
class Application_Model_DbTable_Gallery extends Zend_Db_Table_Abstract{
	protected $_name = 'galerie';
	protected $_primary = 'id_gallery';

	public function getAnnonce(){
		$db = Zend_Db_Table::getDefaultAdapter();
		$select = $db->select()
		->from($this->_name);

		$select = $select->query();
		$result = $select->fetchAll();

		return $result;
	}
	
	
}

/*
  CREATE TABLE IF NOT EXISTS `tmp_galerie` (
  `id_galerie` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `describe` varchar(200) NOT NULL,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`id_galerie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
*/
