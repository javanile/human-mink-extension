<?php

namespace Javanile\HumanMinkExtension\Traits;

trait WaitTrait
{
    /**
     * @Given I wait until the page loads
     */
    public function iWaitUntilThePageLoads()
    {
        sleep(4);
    }

    /**
     * @Then I look for results
     */
    public function iLookForResults()
    {
        sleep(5);
    }
}
