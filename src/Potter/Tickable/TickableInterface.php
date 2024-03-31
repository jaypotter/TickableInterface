<?php

declare(strict_types=1);

namespace Potter\Tickable;

interface TickableInterface
{
    public function tick(): void;
}