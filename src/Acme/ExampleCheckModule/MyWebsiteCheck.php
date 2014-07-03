<?php

namespace Acme\ExampleCheckModule;

use N98\Magento\Command\CommandConfigAware;
use N98\Magento\Command\System\Check\Result;
use N98\Magento\Command\System\Check\ResultCollection;
use N98\Magento\Command\System\Check\WebsiteCheck;
use N98\Magento\Command\System\CheckCommand;

class MyWebsiteCheck implements WebsiteCheck
{
    /**
     * @param ResultCollection $results
     */
    public function check(ResultCollection $results, \Mage_Core_Model_Website $website)
    {
        $results->createResult(
            Result::STATUS_OK,
            '<info>Test OK <comment>Website: ' . $website->getCode() . '</comment></info>'
        );
    }
}