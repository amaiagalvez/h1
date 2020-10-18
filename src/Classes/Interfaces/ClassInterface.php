<?php

namespace Izt\Helpers\Classes\Interfaces;

interface ClassInterface
{
    public static function getChoicesArray($empty = false);

    public static function getSimpleArray();

    public static function getName($value);
}
