<?php
declare(strict_types=1);

use Nm\Convert\StringToNumber;

return [
    'and'       => [
        'value' => null,
        'type'  => StringToNumber::TYPE_IGNORE,
    ],
    'one'       => [
        'value' => 1,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'two'       => [
        'value' => 2,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'three'     => [
        'value' => 3,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'four'      => [
        'value' => 4,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'five'      => [
        'value' => 5,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'six'       => [
        'value' => 6,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'seven'     => [
        'value' => 7,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'eight'     => [
        'value' => 8,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'nine'      => [
        'value' => 9,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'ten'       => [
        'value' => 10,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'eleven'    => [
        'value' => 11,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'twelve'    => [
        'value' => 12,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'thirteen'  => [
        'value' => 13,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'fourteen'  => [
        'value' => 14,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'fifteen'   => [
        'value' => 15,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'sixteen'   => [
        'value' => 16,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'seventeen' => [
        'value' => 17,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'eighteen'  => [
        'value' => 18,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'nineteen'  => [
        'value' => 19,
        'type'  => StringToNumber::TYPE_TERMINAL,
    ],
    'twenty'    => [
        'value' => 20,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'thirty'    => [
        'value' => 30,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'fourty'    => [
        'value' => 40,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'fifty'     => [
        'value' => 50,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'sixty'     => [
        'value' => 60,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'seventy'   => [
        'value' => 70,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'eighty'    => [
        'value' => 80,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'ninety'    => [
        'value' => 90,
        'type'  => StringToNumber::TYPE_TENNER,
    ],
    'hundred'   => [
        'value'      => 100,
        'type'       => StringToNumber::TYPE_MULTIPLIER,
        'committing' => false,
    ],
    'thousand'  => [
        'value'      => 1000,
        'type'       => StringToNumber::TYPE_MULTIPLIER,
        'committing' => true,
    ],
    'million'   => [
        'value'      => 1000000,
        'type'       => StringToNumber::TYPE_MULTIPLIER,
        'committing' => true,
    ],
    'billion'   => [
        'value'      => 1000000000,
        'type'       => StringToNumber::TYPE_MULTIPLIER,
        'committing' => true,
    ],
];
