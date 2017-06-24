<?php
namespace Yireo\Example\Helper;

use Magento\Framework\Logger\Monolog;

class Data
{
    private $logger;

    public function log(string $text)
    {
        $this->logger = new Monolog('yireo');
        $this->logger->notice('Hello World');
    }
}
