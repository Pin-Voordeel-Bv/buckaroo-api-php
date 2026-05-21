<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum TerminalProfileBrand: string
{
    case Mastercard = 'Mastercard';
    case Maestro = 'Maestro';
    case DebitMastercard = 'DebitMastercard';
    case Visa = 'Visa';
    case VPay = 'VPay';
    case VisaDebit = 'VisaDebit';
    case AmericanExpress = 'AmericanExpress';
    case Bancontact = 'Bancontact';
}