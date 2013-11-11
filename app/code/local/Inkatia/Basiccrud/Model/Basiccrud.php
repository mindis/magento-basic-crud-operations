<?php
 
class Inkatia_Basiccrud_Model_Basiccrud extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('basiccrud/basiccrud');
    }
}