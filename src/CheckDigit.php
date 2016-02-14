<?php
/**
 * Generate UPU S10 standard check digits
 *
 * -> use "CheckDigit::generateCheckDigit()" to generate a check digit
 *
 * @author      Justin Scott
 * @copyright   Copyright (c) 2016, Justin Scott (http://www.justinscott.net/)
 * @license     http://opensource.org/licenses/MIT  MIT License
 */
class CheckDigit
{
    /**
     * Generate check digit
     *
     * @param $number The number from which we generate the code
     * @throws exception if number isn't provided
     * @return int control digit
     *
     */
    static public function generateCheckDigit($number)
    {
        if (!$number) {
            throw new Exception('No number provided for check digit generation');
        }

        $weights = [8, 6, 4, 2, 3, 5, 9, 7];
        $s = 0;

        foreach (str_split($number) as $key => $value) {
            $s += (int) $value * $weights[$key];
        }

        $c = 11 - ($s % 11);

        if ($c == 10) {
            $controlDigit = 0;
        } elseif ($c == 11) {
            $controlDigit = 5;
        } else {
            $controlDigit = $c;
        }
        return $controlDigit;
    }
}