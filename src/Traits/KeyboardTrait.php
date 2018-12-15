<?php

namespace Javanile\HumanMinkExtension\Traits;

trait KeyboardTrait
{
    /**
     * @Given /^(?:|I )press enter$/
     */
    public function iPressEnter()
    {
        $driver = $this->getSession()->getDriver();
        $element = $this->getActiveElement();
        $xpath = $element->getXpath();
        $value = $element->getValue();
        $driver->setValue($xpath, $value."\n");
    }

    /**
     * @Given I type :arg1
     */
    public function iType($arg1)
    {
        $driver = $this->getSession()->getDriver();
        $element = $this->getActiveElement();
        $xpath = $element->getXpath();
        $value = $element->getValue();

        for ($i = 0; $i < strlen($arg1); $i++) {
            $value .= $arg1[$i];
            $driver->setValue($xpath, $value);
            sleep(1);
        }
    }
}
