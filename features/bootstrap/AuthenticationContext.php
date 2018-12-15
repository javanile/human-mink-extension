<?php

namespace Javanile\HumanMinkExtension\Features;

use Behat\Behat\Context\Context;
use Javanile\HumanMinkExtension\HumanContext;

/**
 * Defines application features from the specific context.
 */
class AuthenticationContext extends HumanContext implements Context
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
}
