<?php

namespace CodeblogPro\GeoCoordinates\Tests;

class BlanksAndMocksAndConstants
{
    public static function getMinValidLatitudeValue(): float
    {
        return -90;
    }

    public static function getMinValidLongitudeValue(): float
    {
        return -180;
    }

    public static function getMaxValidLatitudeValue(): float
    {

        return 90;
    }

    public static function getMaxValidLongitudeValue(): float
    {
        return 180;
    }

    public static function getMoscowLatitudeValue(): float
    {
        return 55.752;
    }

    public static function getMoscowLongitudeValue(): float
    {
        return 37.615;
    }

    public static function getTooSmallInvalidLatitudeValue(): float
    {
        return -91;
    }

    public static function getTooSmallInvalidLongitudeValue(): float
    {
        return -181;
    }

    public static function getTooMuchInvalidLatitudeValue(): float
    {
        return 91;
    }

    public static function getTooMuchInvalidLongitudeValue(): float
    {
        return 181;
    }
}
