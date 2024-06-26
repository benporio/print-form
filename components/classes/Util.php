<?php

final class Util
{
    public static function arrayToObject(array $arr): mixed 
    {
        try {
            return json_decode(json_encode($arr));
        } catch (\Exception $e) {
            throw $e;
        }
        
    }

    public static function moneyFormat(mixed $num, int $decimal = 2): mixed 
    {
        try {
            if (is_null($num)) {
                return '0.00';
            }
            return number_format((float)$num, $decimal, '.', ',');
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public static function getObjPropValFromObjArrays(array $arr, string $refId, mixed $refVal, string $lookUpId): mixed 
    {
        try {
            foreach ($arr as $obj) {
                if ($obj->{$refId} === $refVal) {
                    return $obj->{$lookUpId};
                }
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }
}