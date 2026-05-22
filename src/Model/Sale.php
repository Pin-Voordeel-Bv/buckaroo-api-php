<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model;

use PinVandaag\BuckarooAPI\Model\Enum\SaleStatus;
use PinVandaag\BuckarooAPI\Model\Enum\TransactionSequenceType;

final readonly class Sale
{
    /**
     * @param array<string, mixed> $breakdown
     * @param array<int, string>|null $paymentMethods
     * @param array<string, mixed> $paymentMethodOptions
     * @param array<string, mixed>|null $metadata
     * @param array<int, Transaction|array<string, mixed>>|null $transactions
     * @param Customer|array<string, mixed>|null $customer
     * @param array<string, mixed>|null $shippingCustomer
     * @param array<int, array<string, mixed>>|null $shipments
     * @param array<int, array<string, mixed>>|null $orderLines
     * @param array<int, array<string, mixed>> $timeline
     * @param array<string, mixed> $links
     */
    public function __construct(
        public string $id = '',
        public ?string $storeId = null,
        public string $currency = '',
        public string $totalAmount = '',
        public string $openAmount = '',
        public string $paidAmount = '',
        public string $refundedAmount = '',
        public string $reversedAmount = '',
        public ?string $reference = null,
        public array $breakdown = [],
        public SaleStatus|string|null $status = null,
        public ?string $description = null,
        public ?string $locale = null,
        public TransactionSequenceType|string|null $sequenceType = null,
        public ?string $statementDescriptor = null,
        public ?array $paymentMethods = null,
        public array $paymentMethodOptions = [],
        public ?string $returnUrl = null,
        public ?string $cancelUrl = null,
        public ?string $mandateId = null,
        public ?array $metadata = null,
        public string $createdAt = '',
        public ?array $transactions = null,
        public Customer|array|null $customer = null,
        public ?array $shippingCustomer = null,
        public ?array $shipments = null,
        public ?array $orderLines = null,
        public array $timeline = [],
        public array $links = [],
    ) {
    }
}