<?php

namespace Acme\ExampleCheckModule;

use N98\Magento\Command\System\Check\Result;
use N98\Magento\Command\System\Check\ResultCollection;
use N98\Magento\Command\System\Check\SimpleCheck;

class MySimpleCheck implements SimpleCheck
{
    /**
     * @param ResultCollection $results
     */
    public function check(ResultCollection $results)
    {
        $results->createResult(Result::STATUS_OK, 'MySimpleCheck - OK');
        $results->createResult(Result::STATUS_WARNING, 'MySimpleCheck - Warning');
        $results->createResult(Result::STATUS_ERROR, 'MySimpleCheck - Error');
    }
}