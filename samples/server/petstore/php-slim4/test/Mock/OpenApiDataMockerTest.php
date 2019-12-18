<?php

/**
 * OpenApiDataMockerTest
 *
 * PHP version 7.1
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace OpenAPIServer\Mock;

use OpenAPIServer\Mock\OpenApiDataMocker;
use OpenAPIServer\Mock\OpenApiDataMockerInterface as IMocker;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Constraint\IsType;

/**
 * OpenApiDataMockerTest Class Doc Comment
 *
 * @package OpenAPIServer\Mock
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPIServer\Mock\OpenApiDataMocker
 */
class OpenApiDataMockerTest extends TestCase
{
    /**
     * @covers ::mock
     * @dataProvider provideMockCorrectArguments
     */
    public function testMockCorrectArguments($dataType, $dataFormat, $options, $expectedType)
    {
        $mocker = new OpenApiDataMocker();
        $this->assertInternalType($expectedType, $mocker->mock($dataType));
    }

    public function provideMockCorrectArguments()
    {
        return [
            [IMocker::DATA_TYPE_INTEGER, null, null, IsType::TYPE_INT],
            [IMocker::DATA_TYPE_NUMBER, null, null, IsType::TYPE_FLOAT],
            [IMocker::DATA_TYPE_STRING, null, null, IsType::TYPE_STRING],
            [IMocker::DATA_TYPE_BOOLEAN, null, null, IsType::TYPE_BOOL],
        ];
    }

    /**
     * @dataProvider provideMockIntegerCorrectArguments
     * @covers ::mockInteger
     */
    public function testMockIntegerWithCorrectArguments(
        $dataFormat = null,
        $minimum = null,
        $maximum = null,
        $exclusiveMinimum = false,
        $exclusiveMaximum = false,
        $matchingInternalTypes = [],
        $notMatchingInternalTypes = []
    ) {
        $mocker = new OpenApiDataMocker();
        $integer = $mocker->mockInteger($dataFormat, $minimum, $maximum, $exclusiveMinimum, $exclusiveMaximum);

        $this->internalAssertNumber(
            $integer,
            $minimum,
            $maximum,
            $exclusiveMinimum,
            $exclusiveMaximum,
            $matchingInternalTypes,
            $notMatchingInternalTypes
        );
    }

    public function provideMockIntegerCorrectArguments()
    {
        $types = [
            IsType::TYPE_INT,
            IsType::TYPE_NUMERIC,
            IsType::TYPE_SCALAR,
        ];
        $notTypes = [
            IsType::TYPE_ARRAY,
            IsType::TYPE_BOOL,
            IsType::TYPE_FLOAT,
            IsType::TYPE_NULL,
            IsType::TYPE_OBJECT,
            IsType::TYPE_RESOURCE,
            IsType::TYPE_STRING,
            IsType::TYPE_CALLABLE,
        ];

        return [
            [null, -100, 100, false, false, $types, $notTypes],
            [null, -100, null, false, false, $types, $notTypes],
            [null, null, 100, false, false, $types, $notTypes],
            [null, -99.5, null, true, false, $types, $notTypes],
            [null, null, 99.5, false, true, $types, $notTypes],
            [null, -99.5, 99.5, true, true, $types, $notTypes],
        ];
    }

    /**
     * @dataProvider provideMockIntegerInvalidArguments
     * @covers ::mockInteger
     * @expectedException \InvalidArgumentException
     */
    public function testMockIntegerWithInvalidArguments(
        $dataFormat = null,
        $minimum = null,
        $maximum = null,
        $exclusiveMinimum = false,
        $exclusiveMaximum = false
    ) {
        $mocker = new OpenApiDataMocker();
        $integer = $mocker->mockInteger($dataFormat, $minimum, $maximum, $exclusiveMinimum, $exclusiveMaximum);
    }

    public function provideMockIntegerInvalidArguments()
    {
        return [
            [null, 'foo', null, false, false],
            [null, null, false, false, false],
            [null, null, null, true, false],
            [null, null, null, false, true],
            [null, 100, -100, false, false],
        ];
    }

    /**
     * @dataProvider provideMockNumberCorrectArguments
     * @covers ::mockNumber
     */
    public function testMockNumberWithCorrectArguments(
        $dataFormat = null,
        $minimum = null,
        $maximum = null,
        $exclusiveMinimum = false,
        $exclusiveMaximum = false,
        $matchingInternalTypes = [],
        $notMatchingInternalTypes = []
    ) {
        $mocker = new OpenApiDataMocker();
        $number = $mocker->mockNumber($dataFormat, $minimum, $maximum, $exclusiveMinimum, $exclusiveMaximum);

        $this->internalAssertNumber(
            $number,
            $minimum,
            $maximum,
            $exclusiveMinimum,
            $exclusiveMaximum,
            $matchingInternalTypes,
            $notMatchingInternalTypes
        );
    }

    public function provideMockNumberCorrectArguments()
    {
        $types = [
            IsType::TYPE_SCALAR,
            IsType::TYPE_NUMERIC,
            IsType::TYPE_FLOAT,
        ];
        $notTypes = [
            IsType::TYPE_INT,
            IsType::TYPE_ARRAY,
            IsType::TYPE_BOOL,
            IsType::TYPE_NULL,
            IsType::TYPE_OBJECT,
            IsType::TYPE_RESOURCE,
            IsType::TYPE_STRING,
            IsType::TYPE_CALLABLE,
        ];

        return [
            [null, -100, 100, false, false, $types, $notTypes],
            [null, -100, null, false, false, $types, $notTypes],
            [null, null, 100, false, false, $types, $notTypes],
            [null, -99.5, null, true, false, $types, $notTypes],
            [null, null, 99.5, false, true, $types, $notTypes],
            [null, -99.5, 99.5, true, true, $types, $notTypes],
        ];
    }

    /**
     * @dataProvider provideMockNumberInvalidArguments
     * @expectedException \InvalidArgumentException
     * @covers ::mockNumber
     */
    public function testMockNumberWithInvalidArguments(
        $dataFormat = null,
        $minimum = null,
        $maximum = null,
        $exclusiveMinimum = false,
        $exclusiveMaximum = false
    ) {
        $mocker = new OpenApiDataMocker();
        $number = $mocker->mockNumber($dataFormat, $minimum, $maximum, $exclusiveMinimum, $exclusiveMaximum);
    }

    public function provideMockNumberInvalidArguments()
    {
        return [
            [null, 'foo', null, false, false],
            [null, null, false, false, false],
            [null, null, null, true, false],
            [null, null, null, false, true],
            [null, 100, -100, false, false],
        ];
    }

    /**
     * @dataProvider provideMockStringCorrectArguments
     * @covers ::mockString
     */
    public function testMockStringWithCorrectArguments(
        $dataFormat = null,
        $minLength = 0,
        $maxLength = null,
        $enum = null,
        $matchingInternalTypes = [],
        $notMatchingInternalTypes = []
    ) {
        $mocker = new OpenApiDataMocker();
        $str = $mocker->mockString($dataFormat, $minLength, $maxLength, $enum);

        $this->internalAssertString(
            $str,
            $minLength,
            $maxLength,
            $enum,
            $matchingInternalTypes,
            $notMatchingInternalTypes
        );
    }

    public function provideMockStringCorrectArguments()
    {
        $types = [
            IsType::TYPE_SCALAR,
            IsType::TYPE_STRING,
        ];
        $notTypes = [
            IsType::TYPE_NUMERIC,
            IsType::TYPE_FLOAT,
            IsType::TYPE_INT,
            IsType::TYPE_ARRAY,
            IsType::TYPE_BOOL,
            IsType::TYPE_NULL,
            IsType::TYPE_OBJECT,
            IsType::TYPE_RESOURCE,
            IsType::TYPE_CALLABLE,
        ];

        return [
            [null, 0, null, null, $types, $notTypes],
            [null, 10, null, null, $types, $notTypes],
            [null, 0, 100, null, $types, $notTypes],
            [null, 10, 50, null, $types, $notTypes],
            [null, 10, 10, null, $types, $notTypes],
            [null, 0, 0, null, $types, $notTypes],
            [null, null, null, null, $types, $notTypes],
            [null, null, null, ['foobar', 'foobaz', 'hello world'], $types, $notTypes],
            [null, null, null, ['foobar'], $types, $notTypes],
        ];
    }

    /**
     * @dataProvider provideMockStringInvalidArguments
     * @expectedException \InvalidArgumentException
     * @covers ::mockString
     */
    public function testMockStringWithInvalidArguments(
        $dataFormat = null,
        $minLength = 0,
        $maxLength = null,
        $enum = null
    ) {
        $mocker = new OpenApiDataMocker();
        $str = $mocker->mockString($dataFormat, $minLength, $maxLength, $enum);
    }

    public function provideMockStringInvalidArguments()
    {
        return [
            'negative minLength' => [null, -10, null],
            'negative maxLength' => [null, 0, -10],
            'both minLength maxLength negative' => [null, -10, -10],
            'decimal minLength and maxLength' => [null, 0.5, 0.5],
            'string minLength' => [null, '10', null],
            'string maxLength' => [null, 0, '50'],
            'string minLength and maxLength' => [null, '10', '50'],
            'maxLength less than minLength' => [null, 50, 10],
            'enum is string' => [null, null, null, 'foobar'],
            'enum is empty array' => [null, null, null, []],
            'enum array is not unique' => [null, null, null, ['foobar', 'foobaz', 'foobar']],
        ];
    }

    /**
     * @covers ::mockBoolean
     */
    public function testMockBoolean()
    {
        $mocker = new OpenApiDataMocker();
        $bool = $mocker->mockBoolean();

        $matchingInternalTypes = [
            IsType::TYPE_SCALAR,
            IsType::TYPE_BOOL,
        ];

        foreach ($matchingInternalTypes as $matchType) {
            $this->assertInternalType($matchType, $bool);
        }

        $notMatchingInternalTypes = [
            IsType::TYPE_NUMERIC,
            IsType::TYPE_FLOAT,
            IsType::TYPE_INT,
            IsType::TYPE_ARRAY,
            IsType::TYPE_STRING,
            IsType::TYPE_NULL,
            IsType::TYPE_OBJECT,
            IsType::TYPE_RESOURCE,
            IsType::TYPE_CALLABLE,
        ];

        foreach ($notMatchingInternalTypes as $notMatchType) {
            $this->assertNotInternalType($notMatchType, $bool);
        }
    }

    private function internalAssertNumber(
        $number,
        $minimum = null,
        $maximum = null,
        $exclusiveMinimum = false,
        $exclusiveMaximum = false,
        $matchingInternalTypes = [],
        $notMatchingInternalTypes = []
    ) {
        foreach ($matchingInternalTypes as $matchType) {
            $this->assertInternalType($matchType, $number);
        }

        foreach ($notMatchingInternalTypes as $notMatchType) {
            $this->assertNotInternalType($notMatchType, $number);
        }

        if ($minimum !== null) {
            if ($exclusiveMinimum) {
                $this->assertGreaterThan($minimum, $number);
            } else {
                $this->assertGreaterThanOrEqual($minimum, $number);
            }
        }

        if ($maximum !== null) {
            if ($exclusiveMaximum) {
                $this->assertLessThan($maximum, $number);
            } else {
                $this->assertLessThanOrEqual($maximum, $number);
            }
        }
    }

    private function internalAssertString(
        $str,
        $minLength = null,
        $maxLength = null,
        $enum = null,
        $matchingInternalTypes = [],
        $notMatchingInternalTypes = []
    ) {
        foreach ($matchingInternalTypes as $matchType) {
            $this->assertInternalType($matchType, $str);
        }

        foreach ($notMatchingInternalTypes as $notMatchType) {
            $this->assertNotInternalType($notMatchType, $str);
        }

        if ($minLength !== null) {
            $this->assertGreaterThanOrEqual($minLength, mb_strlen($str, 'UTF-8'));
        }

        if ($maxLength !== null) {
            $this->assertLessThanOrEqual($maxLength, mb_strlen($str, 'UTF-8'));
        }

        if (is_array($enum) && !empty($enum)) {
            $this->assertContains($str, $enum);
        }
    }

    /**
     * @dataProvider provideMockArrayCorrectArguments
     * @covers ::mockArray
     */
    public function testMockArrayFlattenWithCorrectArguments(
        $items,
        $minItems,
        $maxItems,
        $uniqueItems,
        $expectedItemsType = null,
        $expectedArraySize = null
    ) {
        $mocker = new OpenApiDataMocker();
        $arr = $mocker->mockArray($items, $minItems, $maxItems, $uniqueItems);

        $this->assertIsArray($arr);
        if ($expectedArraySize !== null) {
            $this->assertCount($expectedArraySize, $arr);
        }
        if ($expectedItemsType && $expectedArraySize > 0) {
            $this->assertContainsOnly($expectedItemsType, $arr, true);
        }

        $dataFormat = $items['dataFormat'] ?? null;

        // items field numeric properties
        $minimum = $items['minimum'] ?? null;
        $maximum = $items['maximum'] ?? null;
        $exclusiveMinimum = $items['exclusiveMinimum'] ?? null;
        $exclusiveMaximum = $items['exclusiveMaximum'] ?? null;

        // items field string properties
        $minLength = $items['minLength'] ?? null;
        $maxLength = $items['maxLength'] ?? null;
        $enum = $items['enum'] ?? null;
        $pattern = $items['pattern'] ?? null;

        // items field array properties
        $subItems = $items['items'] ?? null;
        $subMinItems = $items['minItems'] ?? null;
        $subMaxItems = $items['maxItems'] ?? null;
        $subUniqueItems = $items['uniqueItems'] ?? null;

        foreach ($arr as $item) {
            switch ($items['type']) {
                case IMocker::DATA_TYPE_INTEGER:
                    $this->internalAssertNumber($item, $minimum, $maximum, $exclusiveMinimum, $exclusiveMaximum);
                    break;
                case IMocker::DATA_TYPE_NUMBER:
                    $this->internalAssertNumber($item, $minimum, $maximum, $exclusiveMinimum, $exclusiveMaximum);
                    break;
                case IMocker::DATA_TYPE_STRING:
                    $this->internalAssertString($item, $minLength, $maxLength);
                    break;
                case IMocker::DATA_TYPE_BOOLEAN:
                    $this->assertInternalType(IsType::TYPE_BOOL, $item);
                    break;
                case IMocker::DATA_TYPE_ARRAY:
                    $this->testMockArrayFlattenWithCorrectArguments($subItems, $subMinItems, $subMaxItems, $subUniqueItems);
                    break;
            }
        }
    }

    public function provideMockArrayCorrectArguments()
    {
        $intItems = ['type' => IMocker::DATA_TYPE_INTEGER, 'minimum' => 5, 'maximum' => 10];
        $floatItems = ['type' => IMocker::DATA_TYPE_NUMBER, 'minimum' => -32.4, 'maximum' => 88.6, 'exclusiveMinimum' => true, 'exclusiveMaximum' => true];
        $strItems = ['type' => IMocker::DATA_TYPE_STRING, 'minLength' => 20, 'maxLength' => 50];
        $boolItems = ['type' => IMocker::DATA_TYPE_BOOLEAN];
        $arrayItems = ['type' => IMocker::DATA_TYPE_ARRAY, 'items' => ['type' => IMocker::DATA_TYPE_STRING, 'minItems' => 3, 'maxItems' => 10]];
        $expectedInt = IsType::TYPE_INT;
        $expectedFloat = IsType::TYPE_FLOAT;
        $expectedStr = IsType::TYPE_STRING;
        $expectedBool = IsType::TYPE_BOOL;
        $expectedArray = IsType::TYPE_ARRAY;

        return [
            'empty array' => [
                $strItems, null, 0, false, null, 0,
            ],
            'empty array, limit zero' => [
                $strItems, 0, 0, false, null, 0,
            ],
            'array of one string as default size' => [
                $strItems, null, null, false, $expectedStr, 1,
            ],
            'array of one string, limit one' => [
                $strItems, 1, 1, false, $expectedStr, 1,
            ],
            'array of two strings' => [
                $strItems, 2, null, false, $expectedStr, 2,
            ],
            'array of five strings, limit ten' => [
                $strItems, 5, 10, false, $expectedStr, 5,
            ],
            'array of five strings, limit five' => [
                $strItems, 5, 5, false, $expectedStr, 5,
            ],
            'array of one string, limit five' => [
                $strItems, null, 5, false, $expectedStr, 1,
            ],
            'array of one integer' => [
                $intItems, null, null, false, $expectedInt, 1,
            ],
            'array of one float' => [
                $floatItems, null, null, false, $expectedFloat, 1,
            ],
            'array of one boolean' => [
                $boolItems, null, null, false, $expectedBool, 1,
            ],
            'array of one array of strings' => [
                $arrayItems, null, null, false, $expectedArray, 1,
            ],
        ];
    }

    /**
     * @dataProvider provideMockArrayInvalidArguments
     * @expectedException \InvalidArgumentException
     * @covers ::mockArray
     */
    public function testMockArrayWithInvalidArguments(
        $items,
        $minItems,
        $maxItems,
        $uniqueItems
    ) {
        $mocker = new OpenApiDataMocker();
        $arr = $mocker->mockArray($items, $minItems, $maxItems, $uniqueItems);
    }

    public function provideMockArrayInvalidArguments()
    {
        $intItems = ['type' => IMocker::DATA_TYPE_INTEGER];

        return [
            'items is nor array' => [
                'foobar', null, null, false,
            ],
            'items doesnt have "type" key' => [
                ['foobar' => 'foobaz'], null, null, false,
            ],
            'minItems is not integer' => [
                $intItems, 3.12, null, false,
            ],
            'minItems is negative' => [
                $intItems, -10, null, false,
            ],
            'minItems is not number' => [
                $intItems, '1', null, false,
            ],
            'maxItems is not integer' => [
                $intItems, null, 3.12, false,
            ],
            'maxItems is negative' => [
                $intItems, null, -10, false,
            ],
            'maxItems is not number' => [
                $intItems, null, 'foobaz', false,
            ],
            'maxItems less than minItems' => [
                $intItems, 5, 2, false,
            ],
        ];
    }
}
