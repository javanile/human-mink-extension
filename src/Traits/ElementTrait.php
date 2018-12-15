<?php

namespace Javanile\HumanMinkExtension\Traits;

trait ElementTrait
{
    public function getActiveElement()
    {
        $driver = $this->getSession()->getDriver();
        $page = $this->getSession()->getPage();
        $cssSelector = $driver->evaluateScript('(function xpath(el) {
            if (typeof el.hasAttribute === "function") {
                if (el.hasAttribute("id") && el.id) {
                    return el.tagName + "#" + el.id;
                } else if (el.hasAttribute("class") && el.getAttribute("class")) {
                    return el.tagName + "." + el.getAttribute("class").trim().replace(/\s+/, ".");
                }             
            }
            return (el.parentNode.tagName ? xpath(el.parentNode) : "") + " " + el.tagName;
        })(document.activeElement)');

        return $page->find('css', $cssSelector);
    }
}
