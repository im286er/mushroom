<?php
/**
 * Mushroom
 * 
 * An open source php application framework for PHP 5.3.0 or newer
 *
 * @author    mengfk <Mushroom Dev Team>
 * @copyright Copyright (C) 2014 <MrsLab Team> All rights reserved.
 * @license   http://www.apache.org/licenses/LICENSE-2.0.txt
 * @link      https://github.com/mrslab/mushroom
 */

namespace mushroom\component\util;

class Verify {

    public function isMobile($mobile) {
        return preg_match("/^1[3458][0-9]{9}$/", $mobile) ? true: false;
    }

    public function isEmail($email) {
        return preg_match("/^[0-9a-zA-Z]+(?:[\_\-][a-z0-9\-]+)*@[0-9a-zA-Z]+(?:[-.][a-zA-Z0-9]+)*\.[a-zA-Z]+$/i", $email) ? true: false;
    }

    public function isNumber($number) {
        return preg_match("/^[0-9]+$/i", $number) ? true: false;
    }

    public function isInteger($number) {
        return preg_match("/^(?:[-]?[1-9][0-9]*|0)$/i", $number) ? true: false;
    
    }

    public function isHex($number) {
        return preg_match("/^0x[0-9a-fA-F]+$/i", $number) ? true : false; 
    }

    public function isAlpha($letter) {
        return preg_match("/^[a-zA-Z]+$/", $letter) ? true: false;
    }

    public function isAplhaNumber($string) {
        return preg_match("/^[a-zA-Z0-9]+$/", $string) ? true: false;
    }
}
