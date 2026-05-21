<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

final readonly class CustomerSearchResult
{
    /**
     * @param array<int, array<string, mixed>> $customers
     * @param array<string, mixed> $links
     */
    public function __construct(
        public array $customers = [],
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