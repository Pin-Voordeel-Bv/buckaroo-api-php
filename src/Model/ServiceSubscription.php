<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

use PinVandaag\BuckarooAPI\Model\Enum\ServiceSubscriptionStatus;

final readonly class ServiceSubscription
{
    /**
     * @param array<string, mixed> $links
     */
    public function __construct(
        public string $id = '',
        public string $serviceCode = '',
        public ServiceSubscriptionStatus|string|null $status = null,
        public int $priority = 0,
        public ?string $activatedAt = null,
        public ?string $deactivatedAt = null,
        public string $createdAt = '',
        public array $links = [],
    ) {
    }
}