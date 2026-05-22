<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum TransactionStatus: string
{
    case Pending = 'Pending';
    case Successful = 'Successful';
    case Cancelled = 'Cancelled';
    case Expired = 'Expired';
    case Failed = 'Failed';
}