<?php
namespace Yireo\Example\Helper;

use Psr\Log\LoggerInterface;

class Data
{
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function log($text)
    {
        $this->logger->notice($text);
    }
}
