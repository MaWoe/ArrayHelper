<?php
namespace MaWoe\Tests;

use MaWoe\ArrayHelper;
use PHPUnit\Framework\TestCase;

class ArrayHelperTest extends TestCase
{
    /**
     * @param $key
     * @param $expectedValue
     * @param $default
     * @dataProvider dataProvider_testGetValueOrDefault
     */
    public function testGetValueOrDefault($key, $expectedValue, $default)
    {
        $testArray = [
            100,
            200,
            300,
            'x' => 10,
            'y' => 20,
            'z' => [1, 2, 3]
        ];

        $value = ArrayHelper::getValueOrDefault($testArray, $key, $default);
        $this->assertSame($expectedValue, $value);
    }

    public function dataProvider_testGetValueOrDefault()
    {
        $data = [];

        $data[] = [0, 100, null];
        $data[] = [1, 200, null];
        $data[] = [2, 300, null];
        $data[] = ['x', 10, null];
        $data[] = ['y', 20, null];
        $data[] = ['z', [1, 2, 3], null];
        $data[] = ['y', 20, 'ignored'];
        $data[] = ['unkownKey', 'default', 'default'];

        return $data;
    }
}