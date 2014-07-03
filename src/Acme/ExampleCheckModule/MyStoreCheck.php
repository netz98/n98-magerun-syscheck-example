<?php

namespace Acme\ExampleCheckModule;

use N98\Magento\Command\System\Check\Result;
use N98\Magento\Command\System\Check\ResultCollection;
use N98\Magento\Command\System\Check\StoreCheck;
use N98\Magento\Command\System\CheckCommand;

class MyStoreCheck implements StoreCheck
{
    /**
     * @param ResultCollection $results
     */
    public function check(ResultCollection $results, \Mage_Core_Model_Store $store)
    {
        $results->createResult(
            Result::STATUS_OK,
            '<info>Test OK <comment>Store: ' . $store->getCode() . '</comment></info>'
        );
    }
}