<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum TransactionIntentType: string
{
    case Pay = 'Pay';
    case Authorize = 'Authorize';
    case Capture = 'Capture';
    case Refund = 'Refund';
    case Credit = 'Credit';
    case Reverse = 'Reverse';
    case Represent = 'Represent';
}