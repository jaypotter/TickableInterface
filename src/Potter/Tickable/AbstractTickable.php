<?php

declare(strict_types=1);

namespace Potter\Tickable;

abstract class AbstractTickable implements Tickable
{
    abstract public function tick(): void;
}