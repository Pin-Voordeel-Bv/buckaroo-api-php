<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum TerminalType: string
{
    case Smart = 'Smart';
    case Internal = 'Internal';
}