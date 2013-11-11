<?php
class Inkatia_Basiccrud_IndexController extends Mage_Core_Controller_Front_Action
{
	
	public function indexAction(){
		// Rendering from the respective action controller in toogas_basiccrud.xml
		$this->loadLayout();
        $this->renderLayout();
	}
	
	public function editformAction(){
		// Rendering from the respective action controller in toogas_basiccrud.xml
		$this->loadLayout();
        $this->renderLayout();
	}
	
	public function editAction(){
		
		$this->loadLayout();
		
			$postData 		= Mage::app()->getRequest()->getPost();
			$getDataId		= Mage::app()->getRequest()->getParam('id');
			
			$model  		= Mage::getModel('basiccrud/basiccrud')
							->load( $getDataId );
			
			if( empty($model) ){
				
				$this->_redirect('basiccrud/');
				
			}
			
			$model->setId($getDataId)
				  ->setName($postData['name'])
				  ->setEmail($postData['email'])
				  ->setMessage($postData['message'])
				  ->save();
		
			$this->_redirect('basiccrud/');
			
		$this->_initLayoutMessages('core/session');
		$this->renderLayout();
		// Zend_Debug::dump($this->getLayout()->getUpdate()->getHandles());
	}
	
	public function createAction(){
		
		$this->loadLayout();
        $this->renderLayout();
		
	}
	
	public function saveAction(){
		
		$this->loadLayout();
		
			$data 	= Mage::app()->getRequest()->getPost();
			$model  = Mage::getModel('basiccrud/basiccrud');
			
			$model->setName($data['name'])
				  ->setEmail($data['email'])
				  ->setMessage($data['message'])
				  ->save();
	
			$array = $model->getData();
			
			if( isset($array['basiccrud_id']) ){
				
				$this->_redirect('basiccrud/');
				
			}
			
		$this->renderLayout();
	}
	
	public function deleteAction(){
		
		$getDataId		= Mage::app()->getRequest()->getParam('id');
		$model 			= Mage::getModel('basiccrud/basiccrud');
		
		if(isset($getDataId)){

			$model->setBasiccrudId($getDataId)->delete();
			
			$array = $model->getData();
			
			if( !empty( $array ) ){
				$this->_redirect('basiccrud/');
			}
			
			$this->_redirect('basiccrud/');
			
		}
	}
	
	public function listAction(){

		$this->loadLayout();
        $this->renderLayout();

	}
}