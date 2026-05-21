<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

use PinVandaag\BuckarooAPI\Model\Enum\TerminalProfileBrand;

final readonly class TerminalProfile
{
    public function __construct(
        public string $id = '',
        public ?string $tid = null,
        public TerminalProfileBrand|string|null $brand = null,
        public ?string $activatedAt = null,
        public ?string $deactivatedAt = null,
    ) {
    }
}