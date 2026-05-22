<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

final readonly class SaleSearchResult
{
    /**
     * @param array<int, Sale|array<string, mixed>> $sales
     * @param array<string, mixed> $links
     */
    public function __construct(
        public array $sales = [],
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