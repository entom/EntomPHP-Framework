<?php
/**
 * Created by PhpStorm.
 * User: tomasznicieja
 * Date: 07.01.2017
 * Time: 21:56
 */

namespace Calendar\Model;

class LeapYear
{
    public function isLeapYear($year = null)
    {
        if (null === $year) {
            $year = date('Y');
        }

        return 0 == $year % 400 || (0 == $year % 4 && 0 != $year % 100);
    }
}