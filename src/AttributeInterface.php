<?php

namespace Attribute;

interface AttributeInterface
{
    public function getRequiredAttributes();

    public function getOptionalAttributes();
}
