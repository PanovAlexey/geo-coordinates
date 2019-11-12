<?php

declare(strict_types=1);

namespace CodeblogPro\GeoCoordinates\Tests\Unit;

use \CodeblogPro\GeoCoordinates\Coordinates;
use \CodeblogPro\GeoCoordinates\Tests\BlanksAndMocksAndConstants;

class CoordinatesTest extends \PHPUnit\Framework\TestCase
{
    public function testConstructWithMinValidInputDataToCoordinatesObjectCreated()
    {
        $coordinates = new Coordinates(
            BlanksAndMocksAndConstants::getMinValidLatitudeValue(),
            BlanksAndMocksAndConstants::getMinValidLongitudeValue()
        );

        $this->assertInstanceOf(Coordinates::class, $coordinates);
    }

    public function testConstructWithMaxValidInputDataToCoordinatesObjectCreated()
    {
        $coordinates = new Coordinates(
            BlanksAndMocksAndConstants::getMaxValidLatitudeValue(),
            BlanksAndMocksAndConstants::getMaxValidLongitudeValue()
        );

        $this->assertInstanceOf(Coordinates::class, $coordinates);
    }

    public function testConstructWithMoscowValidInputDataToCoordinatesObjectCreated()
    {
        $coordinates = new Coordinates(
            BlanksAndMocksAndConstants::getMoscowLatitudeValue(),
            BlanksAndMocksAndConstants::getMoscowLongitudeValue()
        );

        $this->assertInstanceOf(Coordinates::class, $coordinates);
    }
}
