<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\Attribute\TaggedLocator;

final class LocatorConsumerWithDefaultIndexMethodAndWithDefaultPriorityMethod
{
    public function __construct(
        #[TaggedLocator(tag: 'foo_bar', defaultIndexMethod: 'getDefaultFooName', defaultPriorityMethod: 'getPriority')]
        private $locator,
    ) {
    }

    public function getLocator(): ContainerInterface
    {
        return $this->locator;
    }
}
