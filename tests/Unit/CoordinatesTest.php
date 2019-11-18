<?php

declare(strict_types=1);

namespace CodeblogPro\GeoCoordinates\Tests\Unit;

use CodeblogPro\GeoCoordinates\Coordinates;
use CodeblogPro\GeoCoordinates\Exceptions\InvalidArgumentException;
use CodeblogPro\GeoCoordinates\Tests\BlanksAndMocksAndConstants;

class CoordinatesTest extends \PHPUnit\Framework\TestCase
{
    public function testConstructWithMinValidInputDataToCoordinatesObjectCreated(): void
    {
        $coordinates = new Coordinates(
            BlanksAndMocksAndConstants::getMinValidLatitudeValue(),
            BlanksAndMocksAndConstants::getMinValidLongitudeValue()
        );

        $this->assertInstanceOf(Coordinates::class, $coordinates);
    }

    public function testConstructWithMaxValidInputDataToCoordinatesObjectCreated(): void
    {
        $coordinates = new Coordinates(
            BlanksAndMocksAndConstants::getMaxValidLatitudeValue(),
            BlanksAndMocksAndConstants::getMaxValidLongitudeValue()
        );

        $this->assertInstanceOf(Coordinates::class, $coordinates);
    }

    public function testConstructWithMoscowValidInputDataToCoordinatesObjectCreated(): void
    {
        $coordinates = new Coordinates(
            BlanksAndMocksAndConstants::getMoscowLatitudeValue(),
            BlanksAndMocksAndConstants::getMoscowLongitudeValue()
        );

        $this->assertInstanceOf(Coordinates::class, $coordinates);
    }

    public function testConstructWithTooSmallInputDataToExceptionReturned(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Coordinates(
            BlanksAndMocksAndConstants::getTooSmallInvalidLatitudeValue(),
            BlanksAndMocksAndConstants::getTooSmallInvalidLongitudeValue()
        );
    }

    public function testConstructWithTooMuchInputDataToExceptionReturned(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new Coordinates(
            BlanksAndMocksAndConstants::getTooMuchInvalidLatitudeValue(),
            BlanksAndMocksAndConstants::getTooMuchInvalidLongitudeValue()
        );
    }
}
