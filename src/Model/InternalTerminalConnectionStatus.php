<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

final readonly class InternalTerminalConnectionStatus
{
    public function __construct(
        public bool $connected = false,
        public ?string $disconnectReason = null,
        public ?string $lastActiveAt = null,
        public ?InternalTerminalLastTransaction $lastTransaction = null,
    ) {
    }
}