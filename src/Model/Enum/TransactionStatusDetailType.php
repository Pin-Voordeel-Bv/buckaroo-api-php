<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum TransactionStatusDetailType: string
{
    case Validation = 'Validation';
    case Processor = 'Processor';
    case Error = 'Error';
}