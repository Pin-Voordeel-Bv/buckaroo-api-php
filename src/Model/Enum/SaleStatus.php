<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum SaleStatus: string
{
    case Open = 'Open';
    case Paid = 'Paid';
    case Cancelled = 'Cancelled';
    case Failed = 'Failed';
    case Expired = 'Expired';
}