<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum ServiceSubscriptionStatus: string
{
    case Pending = 'Pending';
    case Enabled = 'Enabled';
    case Disabled = 'Disabled';
}