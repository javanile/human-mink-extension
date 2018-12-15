<?php

namespace Javanile\HumanMinkExtension\Features;

use Behat\Behat\Context\Context;
use Javanile\HumanMinkExtension\HumanContext;

/**
 * Defines application features from the specific context.
 */
class SearchContext extends HumanContext implements Context
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
