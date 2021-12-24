<?php

class Weather {

    public static $tempConditions = ['Cold', 'Warm', 'Hot'];

    public static function celiusToFarenhieght($celius) {
        return $celius * 9 / 5 + 32;
    }

    public static function getCurrentTempCondition($ferenhieht) {

        switch ($ferenhieht) {
            case $ferenhieht < 40:
                return self::$tempConditions[0];
                break;

            case $ferenhieht < 70:
                return self::$tempConditions[1];
                break;
            
            default:
                return self::$tempConditions[2];
                break;
        }

        
    }
}