<?php

namespace Audentio\MaterialAvatar;

class Generator
{
    public static function generate($string, $textLength = 3)
    {
        $colors = ColorPicker::getColorForString($string);
        $text = self::generateText($string, $textLength);

        return [
            'backgroundColor' => $colors['bgColor'],
            'textColor' => $colors['fgColor'],
            'text' => $text,
        ];
    }

    public static function generateText($string, $textLength = 3)
    {
        $string = preg_replace("/[^A-Za-z0-9 ]/", '', $string);
        $string = preg_replace("/\s\s+/", ' ', $string); // replace multiple white spaces
        $words = explode(' ', $string);
        if (count($words) < 3) {
            $str = implode('', $words);
            $str = mb_substr($str, 0, 3);
        } elseif (count($words) > 3) {
            $finalKey = count($words) - 1;
            $str = $words[0][0] . $words[1][0] . $words[2][0] . $words[$finalKey][0];
        } else {
            $str = $words[0][0] . $words[1][0] . $words[2][0];
        }
        if (empty($str)) {
            $str = '?';
        }
        return strtoupper($str);

    }
}