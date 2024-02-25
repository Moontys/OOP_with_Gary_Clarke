<?php

class SubClass extends BaseClass
{
    public function getParentPublicPropertyFromPublicMethod(): string
    {
        return $this->publicProperty;
    }

    public function getParentProtectedPropertyFromPublicMethod(): string
    {
        return $this->protectedProperty;
    }
}