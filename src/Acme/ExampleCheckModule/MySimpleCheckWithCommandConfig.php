<?php

namespace Acme\ExampleCheckModule;

use N98\Magento\Command\CommandConfigAware;
use N98\Magento\Command\System\Check\Result;
use N98\Magento\Command\System\Check\ResultCollection;
use N98\Magento\Command\System\Check\SimpleCheck;

class MySimpleCheckWithCommandConfig implements SimpleCheck, CommandConfigAware
{
    /**
     * @var array
     */
    protected $_commandConfig;

    /**
     * @param ResultCollection $results
     */
    public function check(ResultCollection $results)
    {
        $foo = $this->_commandConfig['my-own-config-part']['foo'];
        $results->createResult(
            Result::STATUS_OK,
            '<info>MySimpleCheck With command config value: <comment>' . $foo . '</comment></info>'
        );
    }

    /**
     * @param array $commandConfig
     */
    public function setCommandConfig(array $commandConfig)
    {
        $this->_commandConfig = $commandConfig;
    }
}