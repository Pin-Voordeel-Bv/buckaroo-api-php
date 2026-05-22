<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum ServiceSubscriptionAction: string
{
    case Activate = 'Activate';
    case Deactivate = 'Deactivate';
}