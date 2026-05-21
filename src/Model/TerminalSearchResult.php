<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

final readonly class TerminalSearchResult
{
    /**
     * @param array<int, Terminal|array<string, mixed>> $terminals
     * @param array<string, mixed> $links
     */
    public function __construct(
        public array $terminals = [],
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