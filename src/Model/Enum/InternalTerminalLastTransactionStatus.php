<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum InternalTerminalLastTransactionStatus: string
{
    case Pending = 'Pending';
    case Processing = 'Processing';
    case Succeeded = 'Succeeded';
    case Failed = 'Failed';
    case Cancelled = 'Cancelled';
    case Expired = 'Expired';
    case Unknown = 'Unknown';
}