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
}
