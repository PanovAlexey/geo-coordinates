# GeoCoordinates package

[![Build Status](https://travis-ci.org/PanovAlexey/geo-coordinates.svg?branch=master)](https://travis-ci.org/PanovAlexey/geo-location) 
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/PanovAlexey/geo-location/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/PanovAlexey/geo-location/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/PanovAlexey/geo-location/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/PanovAlexey/geo-location/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/PanovAlexey/geo-location/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![Total Downloads](https://poser.pugx.org/codeblog.pro/geo-coordinates/downloads)](//packagist.org/packages/codeblog.pro/laravel-geo-location)
[![Version](https://poser.pugx.org/codeblog.pro/geo-coordinates/version)](//packagist.org/packages/codeblog.pro/geo-coordinates)

The package provides an entity of geographic coordinates.
It can be used both independently and as part of other packages.

## Install

Via Composer

``` bash
$ composer require codeblog.pro/geo-coordinates
```

## Usage

``` php
$coordinates = new \CodeblogPro\GeoCoordinates\Coordinates(55.4, 43.3);
echo $coordinates->getLatitude();
echo $coordinates->getLongitude();
echo $coordinates->toString();
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email panov@codeblog.pro instead of using the issue tracker.

## Credits

- [Panov Alexey](https://www.linkedin.com/in/codeblog/)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
