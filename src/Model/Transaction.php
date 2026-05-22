<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

use PinVandaag\BuckarooAPI\Model\Enum\TransactionCollectionType;
use PinVandaag\BuckarooAPI\Model\Enum\TransactionIntentType;
use PinVandaag\BuckarooAPI\Model\Enum\TransactionSequenceType;
use PinVandaag\BuckarooAPI\Model\Enum\TransactionStatus;
use PinVandaag\BuckarooAPI\Model\Enum\TransactionStatusDetailCode;
use PinVandaag\BuckarooAPI\Model\Enum\TransactionStatusDetailType;

final readonly class Transaction
{
    /**
     * @param array<string, mixed> $details
     * @param array<string, mixed> $sessionData
     * @param array<int, array<string, mixed>>|null $receipts
     * @param array<string, mixed> $links
     */
    public function __construct(
        public string $id = '',
        public ?string $providerReference = null,
        public ?string $storeId = null,
        public ?string $terminalId = null,
        public string $serviceCode = '',
        public TransactionIntentType|string|null $intentType = null,
        public TransactionCollectionType|string|null $collectionType = null,
        public TransactionSequenceType|string|null $sequenceType = null,
        public string $currency = '',
        public string $amount = '',
        public ?string $merchantReference = null,
        public TransactionStatus|string|null $status = null,
        public TransactionStatusDetailType|string|null $statusDetailType = null,
        public TransactionStatusDetailCode|string|null $statusDetailCode = null,
        public array $details = [],
        public ?string $statusProcessorCode = null,
        public ?string $statusDescription = null,
        public ?string $statusConsumerMessage = null,
        public ?string $saleId = null,
        public ?string $authorizationId = null,
        public ?string $description = null,
        public ?string $statementDescriptor = null,
        public array $sessionData = [],
        public ?array $receipts = null,
        public ?string $balanceDate = null,
        public ?string $settlementId = null,
        public ?string $settlementDate = null,
        public string $createdAt = '',
        public array $links = [],
    ) {
    }
}