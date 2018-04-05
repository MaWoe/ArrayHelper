<?php
namespace MaWoe;

class ArrayHelper
{
    /**
     * @param array $array
     * @param mixed $key
     * @param mixed $default
     * @return mixed
     */
    public static function getValueOrDefault(array $array, $key, $default = null)
    {
        if (array_key_exists($key, $array)) {
            return $array[$key];
        } else {
            return $default;
        }
    }
}