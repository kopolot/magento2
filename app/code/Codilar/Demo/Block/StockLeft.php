<?php

namespace Codilar\Demo\Block;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

class StockLeft extends Template{
    /**
     * @return string
     */
    public function getDate():string{
        return (date('Y-m-d'));
    }
}