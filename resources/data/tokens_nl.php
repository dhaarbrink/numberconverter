<?php
declare(strict_types=1);

use Nm\Convert\StringToNumber;

return [
    'en'        => [
        'value' => null,
        'type'  => StringToNumber::TYPE_IGNORE,
    ],
    'een'       => [
        'value' => 1,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'twee'      => [
        'value' => 2,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'drie'      => [
        'value' => 3,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'vier'      => [
        'value' => 4,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'vijf'      => [
        'value' => 5,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'zes'       => [
        'value' => 6,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'zeven'     => [
        'value' => 7,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'acht'      => [
        'value' => 8,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'negen'     => [
        'value' => 9,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'tien'      => [
        'value' => 10,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'elf'       => [
        'value' => 11,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'twaalf'    => [
        'value' => 12,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'dertien'   => [
        'value' => 13,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'veertien'  => [
        'value' => 14,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'vijftien'  => [
        'value' => 15,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'zestien'   => [
        'value' => 16,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'zeventien' => [
        'value' => 17,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'achttien'  => [
        'value' => 18,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'negentien' => [
        'value' => 19,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'twintig'   => [
        'value' => 20,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'dertig'    => [
        'value' => 30,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'veertig'   => [
        'value' => 40,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'vijftig'   => [
        'value' => 50,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'zestig'    => [
        'value' => 60,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'zeventig'  => [
        'value' => 70,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'tachtig'   => [
        'value' => 80,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'negentig'  => [
        'value' => 90,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'honderd'   => [
        'value'      => 100,
        'type'       => StringToNumber::TYPE_MULTIPLIER,
        'committing' => false,
    ],
    'duizend'   => [
        'value'      => 1000,
        'type'       => StringToNumber::TYPE_MULTIPLIER,
        'committing' => true,
    ],
    'miljoen'   => [
        'value'      => 1000000,
        'type'       => StringToNumber::TYPE_MULTIPLIER,
        'committing' => true,
    ],
    'miljard'   => [
        'value'      => 1000000000,
        'type'       => StringToNumber::TYPE_MULTIPLIER,
        'committing' => true,
    ],
];
