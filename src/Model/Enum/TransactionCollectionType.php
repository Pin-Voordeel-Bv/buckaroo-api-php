<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum TransactionCollectionType: string
{
    case Collecting = 'Collecting';
    case Processing = 'Processing';
}