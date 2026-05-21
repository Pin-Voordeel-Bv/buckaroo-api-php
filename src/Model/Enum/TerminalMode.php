<?php

declare(strict_types=1);

namespace PinVandaag\BuckarooAPI\Model\Enum;

enum TerminalMode: string
{
    case Both = 'Both';
    case Terminal = 'Terminal';
    case ECR = 'ECR';
}