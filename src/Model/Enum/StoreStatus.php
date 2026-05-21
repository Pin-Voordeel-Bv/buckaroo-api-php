<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum StoreStatus: string
{
    case Active = 'Active';
    case Onhold = 'Onhold';
    case Test = 'Test';
}