<?php

declare(strict_types=1);

namespace CodeblogPro\GeoCoordinates\Tests\Unit;

use \CodeblogPro\GeoCoordinates\Coordinates;
use \CodeblogPro\GeoCoordinates\Tests\BlanksAndMocksAndConstants;

class CoordinatesTest extends \PHPUnit\Framework\TestCase
{
    public function testConstructWithMinValidInputDataTocoordinatesObjectCreated()
    {
        $coordinates = new Coordinates(
            BlanksAndMocksAndConstants::getMinValidLatitudeValue(),
            BlanksAndMocksAndConstants::getMinValidLongitudeValue()
        );

        $this->assertInstanceOf(Coordinates::class, $coordinates);
    }
}
