<?php

class Inkatia_Basiccrud_Block_Basiccrud extends Mage_Core_Block_Template
{
	
	/* debuging handles */
	public function _debugHandles(){
		var_dump( Zend_Debug::dump($this->getLayout()->getUpdate()->getHandles()) );
	}
	
	/* Database Handling */
	public function _getModel(){
		return Mage::getModel('basiccrud/basiccrud');
	}
	
	public function test(){
		echo "test";
	}
	
}