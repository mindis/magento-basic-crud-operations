<?php
 
class Inkatia_Basiccrud_Model_Mysql4_Basiccrud extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {   
        $this->_init( 'basiccrud/basiccrud', 'basiccrud_id' );
    }
}