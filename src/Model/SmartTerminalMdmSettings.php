<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

final readonly class SmartTerminalMdmSettings
{
    /**
     * @param array<string, mixed> $mdmSettings
     * @param array<string, mixed> $appSettings
     * @param array<string, mixed> $links
     */
    public function __construct(
        public string $terminalId = '',
        public array $mdmSettings = [],
        public array $appSettings = [],
        public array $links = [],
    ) {
    }
}