<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum TerminalStatus: string
{
    case Enabled = 'Enabled';
    case Disabled = 'Disabled';
    case Pending = 'Pending';
}