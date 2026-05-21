<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

final readonly class StoreSearchResult
{
    /**
     * @param array<int, Store|array<string, mixed>> $stores
     * @param array<string, mixed> $links
     */
    public function __construct(
        public array $stores = [],
        public ?string $usedContinuationToken = null,
        public ?string $nextContinuationToken = null,
        public array $links = [],
    ) {
    }

    public function hasNextPage(): bool
    {
        return $this->nextContinuationToken !== null && $this->nextContinuationToken !== '';
    }
}