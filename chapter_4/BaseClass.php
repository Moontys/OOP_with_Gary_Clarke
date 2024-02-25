<?php

class BaseClass
{
    public $propery = 'Public property';

    public $publicProperty = 'Public properties and methods can be accessed anywhere in your code';

    protected $protectedProperty = 'Protected properties and methods can only be accessed within the declaring class or from a subclass';

    private $privateProperty = 'Private properties and methods can only be accessed within the declaring class';


    
    public function getPublicPropertyFormPublicMethod(): string
    {
        return $this->publicProperty;
    }

    public function getProtectedPropertyFormPublicMethod(): string
    {
        return $this->protectedProperty;
    }

    public function getPrivateProperyFromPublicMethod(): string
    {
        return $this->privateProperty;
    }
}
