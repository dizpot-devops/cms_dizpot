<?php


class Util
{
    public static function random($length,$numbers = true, $lc_chars = true, $uc_chars = true) {
        $nums = '0123456789';
        $lc = 'abcdefghijklmnopqrstuvwxyz';
        $uc = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input = '';

        if(! ($numbers || $lc_chars || $uc_chars) ) { return ''; }

        if($numbers) { $input .= $nums; }
        if($lc_chars) { $input .= $lc; }
        if($uc_chars) { $input .= $uc; }

        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $length; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        return $random_string;
    }
}