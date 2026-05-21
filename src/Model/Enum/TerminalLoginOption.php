<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum TerminalLoginOption: string
{
    case NoLogin = 'NoLogin';
    case MandatoryLogin = 'MandatoryLogin';
    case OptionalLogin = 'OptionalLogin';
}