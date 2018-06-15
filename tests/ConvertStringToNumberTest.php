<?php
declare(strict_types=1);

namespace Tests\Nm;

use Nm\Convert\StringToNumber;
use PHPUnit\Framework\TestCase;

class ConvertStringToNumberTest extends TestCase
{
    public static function convertData(): array
    {
        return [
            ['een', '1'],
            ['zeven', '7'],
            ['twaalf', '12'],
            ['achttien', '18'],
            ['twintig', '20'],
            ['zeventig', '70'],
            ['drie en twintig', '23'],
            ['acht en vijftig', '58'],
            ['honderd', '100'],
            ['honderd drie en dertig', '133'],
            ['twee honderd acht en tachtig', '288'],
            ['duizend', '1.000'],
            ['duizend acht', '1.008'],
            ['een duizend acht', '1.008'],
            ['duizend honderd acht', '1.108'],
            ['tachtig duizend vier honderd drie en zestig', '80.463'],
            ['vijf en tachtig duizend vier honderd drie en zestig', '85.463'],
            ['honderd vier en twintig duizend drie honderd vijftig', '124.350'],
            ['honderd acht en twintig miljard vier honderd zestig miljoen twee honderd zestien duizend acht honderd zes en twintig', '128.460.216.826'],
            ['honderdachtentwintigmiljardvierhonderdzestigmiljoentweehonderdzestienduizendachthonderdzesentwintig', '128.460.216.826'],
            ['six million one hundred thousand five hundred eighty three', '6.100.583'],
        ];
    }

    /**
     * @dataProvider convertData
     */
    public function testConvertStringToNumber(string $input, string $expectedResult): void
    {
        $tokens_nl = include __DIR__ . '/../resources/data/tokens_nl.php';
        $tokens_en = include __DIR__ . '/../resources/data/tokens_en.php';
        $tokens = array_merge($tokens_nl, $tokens_en);

        $converter = new StringToNumber($tokens, $input);

        $this->assertEquals($expectedResult, $converter->convert());
    }
}
