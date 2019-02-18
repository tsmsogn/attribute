<?php

namespace Attribute\Test;

use Attribute\Test\Fixtures\User;
use PHPUnit\Framework\TestCase;

class AttributeTest extends TestCase
{

    public function testAttributes()
    {
        $user = new User(array('username' => 'tsmsogn'));

        $this->assertEquals(array('username'), $user->getRequiredAttributes());
        $this->assertTrue($user->isRequiredAttribute('username'));
        $this->assertFalse($user->isRequiredAttribute('website'));

        $this->assertEquals(array('website'), $user->getOptionalAttributes());
        $this->assertTrue($user->isOptionalAttribute('website'));
        $this->assertFalse($user->isOptionalAttribute('username'));
    }

    public function testMissingAttributes()
    {
        $this->setExpectedException('Attribute\Exception\MissingRequiredAttributeException');

        $iam = new User(array());
    }
}
