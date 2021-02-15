<?php

interface CarInterface
{
    public const COLORARR = ['red', 'green', 'blue'];
    public const BODYTYPEARR = ['sedan', 'hatchback', 'universalis'];

    public function bodyType(string $type): ?string;

    public function color(string $color): ?string;
}
