<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class SearchContext extends BaseContext implements Context
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
     * @Given I press enter on :arg1
     */
    public function iPressEnterOn($arg1)
    {
        $field = $this->getSession()->getPage()->findField($arg1);

        $field->keyPress(13);
        $field->keyPress(10);
        $field->submit();
    }
}
