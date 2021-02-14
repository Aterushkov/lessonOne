<?php

interface CarInterface
{
    public const colorArr =['red','green','blue'];
    public const bodyTypeArr = ['sedan','hatchback','universalis'];

    public function bodyType($type): ?string;
    public function color($color): ?string;
}

