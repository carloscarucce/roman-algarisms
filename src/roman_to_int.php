<?php

if (!function_exists('roman_to_int')) {
    /**
     * Converts roman numeral to integer.
     * Ex: MMMCMXCIX -> 3999
     *
     * @link https://itecnote.com/tecnote/php-how-to-convert-a-roman-numeral-to-integer-in-php/
     * @param string $roman
     * @return int
     */
    function roman_to_int($roman) {
        $romans = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        );

        $result = 0;

        foreach ($romans as $key => $value) {
            while (strpos($roman, $key) === 0) {
                $result += $value;
                $roman = substr($roman, strlen($key));
            }
        }

        return  $result;
    }
}
