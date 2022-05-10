<?php

declare(strict_types=1);

function maskify(string $cc): string
{
    $ccArray = [];
    $strSplit = str_split($cc, 4);
    $strExplode = explode('-', $cc);
    $strSplit = (str_contains($cc, '-')) ? $strExplode : $strSplit;

    if (strlen($cc > 6)) {
        foreach ($strSplit as $k => $v) {
            if ($k === 0) {
                $strReplace = substr_replace($v, '###', 1, 3);
                array_push($ccArray, $strReplace);
            } elseif ($k === 2) {
                array_push($ccArray, $v);
            } else {
                $strReplace = substr_replace($v, '###', 0, 4);
                array_push($ccArray, $strReplace);
            }
        }
        $ccArray = (str_contains($cc,"-")) ? implode("-",$ccArray):implode($ccArray);
        return $ccArray;
    }
    else {
        exit;
    }
}
