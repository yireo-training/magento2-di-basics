<?php
namespace Yireo\Example\Helper;

use Magento\Framework\Logger\Monolog;

class Data
{
    public function log($text)
    {
        $this->logger = new Monolog('yireo');
        $this->logger->notice('Hello World');
    }
}
