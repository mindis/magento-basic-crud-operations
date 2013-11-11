<?php
 
class Inkatia_Basiccrud_Model_Mysql4_Basiccrud_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {   
        $this->_init('basiccrud/basiccrud');
    }
}