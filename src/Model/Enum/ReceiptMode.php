<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum ReceiptMode: string
{
    case Enabled = 'Enabled';
    case Disabled = 'Disabled';
    case Optional = 'Optional';
}