<?php

require_once 'BaseClass.php';
require_once 'SubClass.php';





$baseClassObject = new BaseClass();

print $baseClassObject->publicProperty . PHP_EOL;

print $baseClassObject->getPublicPropertyFormPublicMethod() . PHP_EOL;
print $baseClassObject->getProtectedPropertyFormPublicMethod() . PHP_EOL;
print $baseClassObject->getPrivateProperyFromPublicMethod() . PHP_EOL;




$subClassObject = new SubClass();

print $subClassObject->publicProperty . PHP_EOL;

print $subClassObject->getParentPublicPropertyFromPublicMethod() . PHP_EOL;
print $subClassObject->getParentProtectedPropertyFromPublicMethod() . PHP_EOL;
