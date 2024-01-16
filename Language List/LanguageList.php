<?php

function language_list(...$items) 
{
    return $items;
}

function add_to_language_list($array, ...$item)
{
    return array_merge(is_array($array) ? $array : (array)$array, $item);
}

function prune_language_list($array)
{
    array_shift($array);
    return $array;
}

function current_language($array)
{
    return $array[0];
}

function language_list_length($array)
{
    return count($array);
}