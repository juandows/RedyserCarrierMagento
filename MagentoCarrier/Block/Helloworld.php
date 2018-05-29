<?php
namespace Redyser\MagentoCarrier\Block;

class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Hello world! :P';
    }
}