<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum TransactionSequenceType: string
{
    case OneOff = 'OneOff';
    case Initial = 'Initial';
    case Recurring = 'Recurring';
}