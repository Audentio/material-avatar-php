<?php

namespace Audentio\MaterialAvatar;

class ColorPicker
{
    protected static $strColorCache = [];
    protected static $colors = [['backgroundColor' => '#ef5350', 'textColor' => '#000'],['backgroundColor' => '#f44336', 'textColor' => '#000'],['backgroundColor' => '#e53935', 'textColor' => '#000'],['backgroundColor' => '#d32f2f', 'textColor' => '#000'],['backgroundColor' => '#c62828', 'textColor' => '#000'],['backgroundColor' => '#b71c1c', 'textColor' => '#FFF'],['backgroundColor' => '#ec407a', 'textColor' => '#000'],['backgroundColor' => '#e91e63', 'textColor' => '#000'],['backgroundColor' => '#d81b60', 'textColor' => '#000'],['backgroundColor' => '#c2185b', 'textColor' => '#FFF'],['backgroundColor' => '#ad1457', 'textColor' => '#FFF'],['backgroundColor' => '#880e4f', 'textColor' => '#FFF'],['backgroundColor' => '#ab47bc', 'textColor' => '#000'],['backgroundColor' => '#9c27b0', 'textColor' => '#FFF'],['backgroundColor' => '#8e24aa', 'textColor' => '#FFF'],['backgroundColor' => '#7b1fa2', 'textColor' => '#FFF'],['backgroundColor' => '#6a1b9a', 'textColor' => '#FFF'],['backgroundColor' => '#4a148c', 'textColor' => '#FFF'],['backgroundColor' => '#7e57c2', 'textColor' => '#000'],['backgroundColor' => '#673ab7', 'textColor' => '#000'],['backgroundColor' => '#5e35b1', 'textColor' => '#000'],['backgroundColor' => '#512da8', 'textColor' => '#FFF'],['backgroundColor' => '#4527a0', 'textColor' => '#FFF'],['backgroundColor' => '#311b92', 'textColor' => '#FFF'],['backgroundColor' => '#5c6bc0', 'textColor' => '#000'],['backgroundColor' => '#3f51b5', 'textColor' => '#000'],['backgroundColor' => '#3949ab', 'textColor' => '#000'],['backgroundColor' => '#303f9f', 'textColor' => '#FFF'],['backgroundColor' => '#283593', 'textColor' => '#FFF'],['backgroundColor' => '#1a237e', 'textColor' => '#FFF'],['backgroundColor' => '#42a5f5', 'textColor' => '#000'],['backgroundColor' => '#2196f3', 'textColor' => '#000'],['backgroundColor' => '#1e88e5', 'textColor' => '#000'],['backgroundColor' => '#1976d2', 'textColor' => '#000'],['backgroundColor' => '#1565c0', 'textColor' => '#FFF'],['backgroundColor' => '#0d47a1', 'textColor' => '#FFF'],['backgroundColor' => '#29b6f6', 'textColor' => '#000'],['backgroundColor' => '#03a9f4', 'textColor' => '#000'],['backgroundColor' => '#039be5', 'textColor' => '#000'],['backgroundColor' => '#0288d1', 'textColor' => '#FFF'],['backgroundColor' => '#0277bd', 'textColor' => '#FFF'],['backgroundColor' => '#01579b', 'textColor' => '#FFF'],['backgroundColor' => '#26c6da', 'textColor' => '#000'],['backgroundColor' => '#00bcd4', 'textColor' => '#FFF'],['backgroundColor' => '#00acc1', 'textColor' => '#FFF'],['backgroundColor' => '#0097a7', 'textColor' => '#FFF'],['backgroundColor' => '#00838f', 'textColor' => '#FFF'],['backgroundColor' => '#006064', 'textColor' => '#FFF'],['backgroundColor' => '#26a69a', 'textColor' => '#FFF'],['backgroundColor' => '#009688', 'textColor' => '#FFF'],['backgroundColor' => '#00897b', 'textColor' => '#FFF'],['backgroundColor' => '#00796b', 'textColor' => '#FFF'],['backgroundColor' => '#00695c', 'textColor' => '#FFF'],['backgroundColor' => '#004d40', 'textColor' => '#FFF'],['backgroundColor' => '#66bb6a', 'textColor' => '#000'],['backgroundColor' => '#4caf50', 'textColor' => '#000'],['backgroundColor' => '#43a047', 'textColor' => '#000'],['backgroundColor' => '#388e3c', 'textColor' => '#FFF'],['backgroundColor' => '#2e7d32', 'textColor' => '#FFF'],['backgroundColor' => '#1b5e20', 'textColor' => '#FFF'],['backgroundColor' => '#9ccc65', 'textColor' => '#000'],['backgroundColor' => '#8bc34a', 'textColor' => '#000'],['backgroundColor' => '#7cb342', 'textColor' => '#000'],['backgroundColor' => '#689f38', 'textColor' => '#FFF'],['backgroundColor' => '#558b2f', 'textColor' => '#FFF'],['backgroundColor' => '#33691e', 'textColor' => '#FFF'],['backgroundColor' => '#d4e157', 'textColor' => '#000'],['backgroundColor' => '#cddc39', 'textColor' => '#000'],['backgroundColor' => '#c0ca33', 'textColor' => '#000'],['backgroundColor' => '#afb42b', 'textColor' => '#000'],['backgroundColor' => '#9e9d24', 'textColor' => '#FFF'],['backgroundColor' => '#827717', 'textColor' => '#FFF'],['backgroundColor' => '#ffee58', 'textColor' => '#000'],['backgroundColor' => '#ffeb3b', 'textColor' => '#000'],['backgroundColor' => '#fdd835', 'textColor' => '#000'],['backgroundColor' => '#fbc02d', 'textColor' => '#000'],['backgroundColor' => '#f9a825', 'textColor' => '#000'],['backgroundColor' => '#f57f17', 'textColor' => '#000'],['backgroundColor' => '#ffca28', 'textColor' => '#000'],['backgroundColor' => '#ffc107', 'textColor' => '#000'],['backgroundColor' => '#ffb300', 'textColor' => '#000'],['backgroundColor' => '#ffa000', 'textColor' => '#000'],['backgroundColor' => '#ff8f00', 'textColor' => '#000'],['backgroundColor' => '#ff6f00', 'textColor' => '#000'],['backgroundColor' => '#ffa726', 'textColor' => '#000'],['backgroundColor' => '#ff9800', 'textColor' => '#000'],['backgroundColor' => '#fb8c00', 'textColor' => '#000'],['backgroundColor' => '#f57c00', 'textColor' => '#000'],['backgroundColor' => '#ef6c00', 'textColor' => '#000'],['backgroundColor' => '#e65100', 'textColor' => '#000'],['backgroundColor' => '#ff7043', 'textColor' => '#000'],['backgroundColor' => '#ff5722', 'textColor' => '#000'],['backgroundColor' => '#f4511e', 'textColor' => '#000'],['backgroundColor' => '#e64a19', 'textColor' => '#000'],['backgroundColor' => '#d84315', 'textColor' => '#000'],['backgroundColor' => '#bf360c', 'textColor' => '#FFF']];

    public static function getRandomColor()
    {
        $colors = array_keys(self::$colors);
        $colorKey = (int)floor(rand(0, count($colors) - 1));
        $color = $colors[$colorKey];

        return self::$colors[$color]['backgroundColor'];
    }

    public static function getColorForString($string)
    {
        if (empty(self::$strColorCache[$string])) {
            $hash = md5($string);
            $colorKey = (int)floor(hexdec(substr($hash, 0, 4)) / 683);

            if (emptY(self::$colors[$colorKey])) {
                $colorKey = 0;
            }

            self::$strColorCache[$string] = self::$colors[$colorKey];
        }

        return self::$strColorCache[$string];
    }

    public static function getAllColors()
    {
        return self::$colors;
    }
}