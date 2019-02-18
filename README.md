# Attribute [![Build Status](https://travis-ci.org/tsmsogn/attribute.svg?branch=master)](https://travis-ci.org/tsmsogn/attribute) [![codecov](https://codecov.io/gh/tsmsogn/attribute/branch/master/graph/badge.svg)](https://codecov.io/gh/tsmsogn/attribute) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tsmsogn/attribute/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tsmsogn/attribute/?branch=master)

## Requirements

- PHP 5.4 or later

## Usage

### Make a class attribute:

Use the `Attributable` and implement the `AttributeInterface` on your class:

```php
<?php

namespace What\You\Like;


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

        $this->attributeMissing(); // Check if wheter the required attributes are missing or not.
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
```

More details available at [tests](https://github.com/tsmsogn/attribute/blob/master/tests/AttributeTest.php).
