<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum FixedAmountMode: string
{
    case MandatoryNoDeviation = 'MandatoryNoDeviation';
    case MandatoryWithDeviation = 'MandatoryWithDeviation';
    case NoFixedAmount = 'NoFixedAmount';
    case OptionalNoDeviation = 'OptionalNoDeviation';
    case OptionalWithDeviation = 'OptionalWithDeviation';
}