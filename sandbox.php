<?php
require_once 'app/bootstrap.php';
$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);

$example = $bootstrap->getObjectManager()->create('\Psr\Log\LoggerInterface');
\Zend_Debug::dump(get_class($example));
