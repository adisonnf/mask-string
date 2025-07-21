<?php
function mask($stringToMask)
{
    $length = strlen($stringToMask);
    if ($length <= 4) {
        return $stringToMask;
    }

    $maskedPart = str_repeat('#', $length - 4);
    $visiblePart = substr($stringToMask, -4);
    return $maskedPart . $visiblePart;
}

$stringToMask = trim(fgets(STDIN));
echo mask($stringToMask) . PHP_EOL;
