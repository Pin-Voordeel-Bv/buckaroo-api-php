<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

use PinVandaag\BuckarooAPI\Model\Enum\InternalTerminalLastTransactionStatus;

final readonly class InternalTerminalLastTransaction
{
    public function __construct(
        public string $reference = '',
        public InternalTerminalLastTransactionStatus|string|null $status = null,
        public string $updatedAt = '',
    ) {
    }
}