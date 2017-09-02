<?php

function base_path($path = '')
{
    return __DIR__ . ($path ? '/../' . $path : $path);
}