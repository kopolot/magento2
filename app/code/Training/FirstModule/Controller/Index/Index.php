<?php 

namespace Training\FirstModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Index implements ActionInterface{

    protected $resultFactory;

    public __construct( $resultFactory){
        $this->resultFactory = $resultFactory;
    }

    public function execute(){
        die("asdhask");
        //return 
    }
}