<?php
namespace Yireo\Example\Helper;

use Magento\Framework\Logger\Monolog;

class Data
{
    private $logger;

    public function __construct(Monolog $logger)
    {
        $this->logger = $logger;
    }

    public function log(string $text)
    {
        $this->logger->notice($text);
    }
}
