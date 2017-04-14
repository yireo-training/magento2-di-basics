<?php
namespace Yireo\Example\Helper;

use Magento\Framework\Logger\Monolog;

class Data
{
    public function __construct(Monolog $logger)
    {
        $this->logger = $logger;
    }

    public function log($text)
    {
        $this->logger->notice($text);
    }
}
