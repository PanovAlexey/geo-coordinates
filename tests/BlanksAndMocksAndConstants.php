<?php

namespace CodeblogPro\GeoCoordinates\Tests;

class BlanksAndMocksAndConstants
{
    public static function getMinValidLatitudeValue()
    {
        return -90;
    }

    public static function getMinValidLongitudeValue()
    {
        return -180;
    }

    public static function getMaxValidLatitudeValue()
    {

        return 90;
    }

    public static function getMaxValidLongitudeValue()
    {
        return 180;
    }

    public static function getMoscowLatitudeValue()
    {
        return 55.752;
    }

    public static function getMoscowLongitudeValue()
    {
        return 37.615;
    }

    public static function getTooSmallInvalidLatitudeValue()
    {
        return -91;
    }

    public static function getTooSmallInvalidLongitudeValue()
    {
        return -181;
    }

    public static function getTooMuchInvalidLatitudeValue()
    {
        return 91;
    }

    public static function getTooMuchInvalidLongitudeValue()
    {
        return 181;
    }
}
