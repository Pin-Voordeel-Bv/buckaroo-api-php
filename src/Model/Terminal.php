<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

use PinVandaag\BuckarooAPI\Model\Enum\TerminalStatus;
use PinVandaag\BuckarooAPI\Model\Enum\TerminalType;

final readonly class Terminal
{
    /**
     * @param array<int, TerminalProfile|array<string, mixed>> $profiles
     * @param array<string, mixed> $links
     */
    public function __construct(
        public string $id = '',
        public string $name = '',
        public string $storeId = '',
        public TerminalStatus|string|null $status = null,
        public TerminalType|string|null $type = null,
        public array $profiles = [],
        public array $links = [],
    ) {
    }
}