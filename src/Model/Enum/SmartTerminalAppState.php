<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum SmartTerminalAppState: string
{
    case Unknown = 'Unknown';
    case Provisioning = 'Provisioning';
    case Ready = 'Ready';
    case Busy = 'Busy';
    case Offline = 'Offline';
    case Limited = 'Limited';
    case Updating = 'Updating';
    case Error = 'Error';
    case Blocked = 'Blocked';
    case Tampered = 'Tampered';
    case Decommissioned = 'Decommissioned';
}