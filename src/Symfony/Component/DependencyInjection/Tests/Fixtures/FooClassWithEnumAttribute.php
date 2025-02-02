<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

class FooClassWithEnumAttribute
{
    private $bar;

    public function __construct(FooUnitEnum $bar)
    {
        $this->bar = $bar;
    }

    public function getBar(): FooUnitEnum
    {
        return $this->bar;
    }
}
