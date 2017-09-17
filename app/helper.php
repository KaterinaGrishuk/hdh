<?php

function getStringYear($n)
{
    $dateHelper = app('dateHelper');

    return $dateHelper->createAge($n);
}