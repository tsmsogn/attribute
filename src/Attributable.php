<?php

namespace Attribute;

use Attribute\Exception\MissingRequiredAttributeException;

trait Attributable
{
    /**
     * @param $attribute
     * @return bool
     */
    public function isRequiredAttribute($attribute)
    {
        return in_array($attribute, $this->getRequiredAttributes(), true);
    }

    /**
     * @param $attribute
     * @return bool
     */
    public function isOptionalAttribute($attribute)
    {
        return in_array($attribute, $this->getOptionalAttributes(), true);
    }

    /**
     * @return bool
     * @throws \Attribute\Exception\MissingRequiredAttributeException
     */
    public function attributeMissing()
    {
        $requiredAttributes = $this->getRequiredAttributes();

        foreach ($requiredAttributes as $requiredAttribute) {
            if ($this->$requiredAttribute === null) {
                throw new MissingRequiredAttributeException("The {$requiredAttribute} is missing");
            }
        }

        return true;
    }
}
