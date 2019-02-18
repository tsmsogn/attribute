<?php

namespace Attribute\Test\Fixtures;


use Attribute\Attributable;
use Attribute\AttributeInterface;

class User implements AttributeInterface
{
    use Attributable;

    public $username;

    public $website;

    public function __construct($options = array())
    {
        foreach ($options as $key => $value) {
            $this->$key = $value;
        }

        $this->attributeMissing();
    }

    public function getRequiredAttributes()
    {
        return array('username');
    }

    public function getOptionalAttributes()
    {
        return array('website');
    }
}