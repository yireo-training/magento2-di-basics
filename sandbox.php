<?php
declare(strict_types=1);

use Magento\Framework\App\Bootstrap;
use Psr\Log\LoggerInterface;
use Zend_Debug;

require_once 'app/bootstrap.php';
$bootstrap = Bootstrap::create(BP, $_SERVER);

$example = $bootstrap->getObjectManager()->create(LoggerInterface::class);
echo get_class($example) . "\n";
