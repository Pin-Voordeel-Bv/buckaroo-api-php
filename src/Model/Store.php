<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

use PinVandaag\BuckarooAPI\Model\Enum\StoreStatus;
use PinVandaag\BuckarooAPI\Model\Enum\StoreType;

final readonly class Store
{
    /**
     * @param array<string, mixed> $address
     * @param array<string, mixed> $links
     */
    public function __construct(
        public string $id = '',
        public StoreType|string|null $type = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?string $url = null,
        public StoreStatus|string|null $status = null,
        public ?string $mcc = null,
        public array $address = [],
        public string $createdAt = '',
        public array $links = [],
    ) {
    }
}