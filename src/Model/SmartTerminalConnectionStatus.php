<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

use PinVandaag\BuckarooAPI\Model\Enum\SmartTerminalAppState;

final readonly class SmartTerminalConnectionStatus
{
    public function __construct(
        public bool $connected = false,
        public ?string $disconnectReason = null,
        public SmartTerminalAppState|string|null $appState = null,
        public ?string $lastActiveAt = null,
    ) {
    }
}