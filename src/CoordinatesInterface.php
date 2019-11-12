<?php

declare(strict_types=1);

namespace CodeblogPro\GeoCoordinates;

interface CoordinatesInterface
{
    public function getLatitude(): float;

    public function getLongitude(): float;

    public function toArray(): array;

    public function toString(): string;
}
