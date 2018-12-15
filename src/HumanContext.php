<?php

namespace Javanile\HumanMinkExtension;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class BaseContext extends MinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I wait until the page loads
     */
    public function iWaitUntilThePageLoads()
    {
        sleep(4);
    }

    /**
     * @Then I see the message :arg1
     */
    public function iSeeTheMessage($arg1)
    {
        return;
    }

    /**
     * @Given /^(?:|I )click (?:on |)(?:|the )"([^"]*)"(?:|.*)$/
     */
    public function iClickOn($arg1)
    {
        $findName = $this->getSession()->getPage()->find("css", $arg1);
        if (!$findName) {
            throw new Exception($arg1 . " could not be found");
        } else {

            $this->getSession()->executeScript("
                var element = document.querySelector('".$arg1."')[0];
                element.style.opacity = 1;
                element.style.filter  = 'alpha(opacity=100)'; //iexplorer!
                element.style.visibility = 'visible'
            ");
            $this->getSession()->wait(2000);

            $findName->click();
        }
    }
}
