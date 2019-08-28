<?php

namespace Audentio\MaterialAvatar;

class ColorPicker
{
    protected static $strColorCache = [];
    protected static $colors = [['bgColor' => '#ef5350', 'fgColor' => '#ff8a80'],['bgColor' => '#f44336', 'fgColor' => '#ff8a80'],['bgColor' => '#e53935', 'fgColor' => '#ff8a80'],['bgColor' => '#d32f2f', 'fgColor' => '#ff8a80'],['bgColor' => '#c62828', 'fgColor' => '#ff8a80'],['bgColor' => '#b71c1c', 'fgColor' => '#ff8a80'],['bgColor' => '#ec407a', 'fgColor' => '#ff80ab'],['bgColor' => '#e91e63', 'fgColor' => '#ff80ab'],['bgColor' => '#d81b60', 'fgColor' => '#ff80ab'],['bgColor' => '#c2185b', 'fgColor' => '#ff80ab'],['bgColor' => '#ad1457', 'fgColor' => '#ff80ab'],['bgColor' => '#880e4f', 'fgColor' => '#ff80ab'],['bgColor' => '#ab47bc', 'fgColor' => '#ea80fc'],['bgColor' => '#9c27b0', 'fgColor' => '#ea80fc'],['bgColor' => '#8e24aa', 'fgColor' => '#ea80fc'],['bgColor' => '#7b1fa2', 'fgColor' => '#ea80fc'],['bgColor' => '#6a1b9a', 'fgColor' => '#ea80fc'],['bgColor' => '#4a148c', 'fgColor' => '#ea80fc'],['bgColor' => '#7e57c2', 'fgColor' => '#b388ff'],['bgColor' => '#673ab7', 'fgColor' => '#b388ff'],['bgColor' => '#5e35b1', 'fgColor' => '#b388ff'],['bgColor' => '#512da8', 'fgColor' => '#b388ff'],['bgColor' => '#4527a0', 'fgColor' => '#b388ff'],['bgColor' => '#311b92', 'fgColor' => '#b388ff'],['bgColor' => '#5c6bc0', 'fgColor' => '#8c9eff'],['bgColor' => '#3f51b5', 'fgColor' => '#8c9eff'],['bgColor' => '#3949ab', 'fgColor' => '#8c9eff'],['bgColor' => '#303f9f', 'fgColor' => '#8c9eff'],['bgColor' => '#283593', 'fgColor' => '#8c9eff'],['bgColor' => '#1a237e', 'fgColor' => '#8c9eff'],['bgColor' => '#42a5f5', 'fgColor' => '#bbdefb'],['bgColor' => '#2196f3', 'fgColor' => '#bbdefb'],['bgColor' => '#1e88e5', 'fgColor' => '#82b1ff'],['bgColor' => '#1976d2', 'fgColor' => '#82b1ff'],['bgColor' => '#1565c0', 'fgColor' => '#82b1ff'],['bgColor' => '#0d47a1', 'fgColor' => '#82b1ff'],['bgColor' => '#29b6f6', 'fgColor' => '#80d8ff'],['bgColor' => '#03a9f4', 'fgColor' => '#80d8ff'],['bgColor' => '#039be5', 'fgColor' => '#80d8ff'],['bgColor' => '#0288d1', 'fgColor' => '#80d8ff'],['bgColor' => '#0277bd', 'fgColor' => '#80d8ff'],['bgColor' => '#01579b', 'fgColor' => '#80d8ff'],['bgColor' => '#26c6da', 'fgColor' => '#84ffff'],['bgColor' => '#00bcd4', 'fgColor' => '#84ffff'],['bgColor' => '#00acc1', 'fgColor' => '#84ffff'],['bgColor' => '#0097a7', 'fgColor' => '#84ffff'],['bgColor' => '#00838f', 'fgColor' => '#84ffff'],['bgColor' => '#006064', 'fgColor' => '#84ffff'],['bgColor' => '#26a69a', 'fgColor' => '#a7ffeb'],['bgColor' => '#009688', 'fgColor' => '#a7ffeb'],['bgColor' => '#00897b', 'fgColor' => '#a7ffeb'],['bgColor' => '#00796b', 'fgColor' => '#a7ffeb'],['bgColor' => '#00695c', 'fgColor' => '#a7ffeb'],['bgColor' => '#004d40', 'fgColor' => '#a7ffeb'],['bgColor' => '#66bb6a', 'fgColor' => '#b9f6ca'],['bgColor' => '#4caf50', 'fgColor' => '#b9f6ca'],['bgColor' => '#43a047', 'fgColor' => '#b9f6ca'],['bgColor' => '#388e3c', 'fgColor' => '#b9f6ca'],['bgColor' => '#2e7d32', 'fgColor' => '#b9f6ca'],['bgColor' => '#1b5e20', 'fgColor' => '#b9f6ca'],['bgColor' => '#9ccc65', 'fgColor' => '#ccff90'],['bgColor' => '#8bc34a', 'fgColor' => '#ccff90'],['bgColor' => '#7cb342', 'fgColor' => '#ccff90'],['bgColor' => '#689f38', 'fgColor' => '#ccff90'],['bgColor' => '#558b2f', 'fgColor' => '#ccff90'],['bgColor' => '#33691e', 'fgColor' => '#ccff90'],['bgColor' => '#d4e157', 'fgColor' => '#f4ff81'],['bgColor' => '#cddc39', 'fgColor' => '#f4ff81'],['bgColor' => '#c0ca33', 'fgColor' => '#f4ff81'],['bgColor' => '#afb42b', 'fgColor' => '#f4ff81'],['bgColor' => '#9e9d24', 'fgColor' => '#f4ff81'],['bgColor' => '#827717', 'fgColor' => '#f4ff81'],['bgColor' => '#ffee58', 'fgColor' => '#f9a825'],['bgColor' => '#ffeb3b', 'fgColor' => '#f9a825'],['bgColor' => '#fdd835', 'fgColor' => '#ffff8d'],['bgColor' => '#fbc02d', 'fgColor' => '#ffff8d'],['bgColor' => '#f9a825', 'fgColor' => '#ffff8d'],['bgColor' => '#f57f17', 'fgColor' => '#ffff8d'],['bgColor' => '#ffca28', 'fgColor' => '#ffe57f'],['bgColor' => '#ffc107', 'fgColor' => '#ffe57f'],['bgColor' => '#ffb300', 'fgColor' => '#ffe57f'],['bgColor' => '#ffa000', 'fgColor' => '#ffe57f'],['bgColor' => '#ff8f00', 'fgColor' => '#ffe57f'],['bgColor' => '#ff6f00', 'fgColor' => '#ffe57f'],['bgColor' => '#ffa726', 'fgColor' => '#ffd180'],['bgColor' => '#ff9800', 'fgColor' => '#ffd180'],['bgColor' => '#fb8c00', 'fgColor' => '#ffd180'],['bgColor' => '#f57c00', 'fgColor' => '#ffd180'],['bgColor' => '#ef6c00', 'fgColor' => '#ffd180'],['bgColor' => '#e65100', 'fgColor' => '#ffd180'],['bgColor' => '#ff7043', 'fgColor' => '#ff9e80'],['bgColor' => '#ff5722', 'fgColor' => '#ff9e80'],['bgColor' => '#f4511e', 'fgColor' => '#ff9e80'],['bgColor' => '#e64a19', 'fgColor' => '#ff9e80'],['bgColor' => '#d84315', 'fgColor' => '#ff9e80'],['bgColor' => '#bf360c', 'fgColor' => '#ff9e80']];

    public static function getRandomColor()
    {
        $colors = array_keys(self::$colors);
        $colorKey = (int)floor(rand(0, count($colors) - 1));
        $color = $colors[$colorKey];

        return self::$colors[$color]['bgColor'];
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

}