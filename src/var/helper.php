<?php

if (!function_exists('env')) {
    function env($key, $default = null)
    {
        $dotenv = \Dotenv\Dotenv::create(__DIR__);
        $dotenv->load();

        $value = $_ENV[$key];

        if ($value === false) {
            return value($default);
        }

        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return;
        }

        return $value;
    }
}

if (!function_exists('view')) {
    function view($path)
    {
        require views_path() . discover_path($path) . 'view.php';
    }
}

if (!function_exists('config')) {
    function config($path)
    {
        require config_path() . discover_path($path);
    }
}

function views_path()
{
    return __DIR__ . 'src/resources/views/';
}

function config_path()
{
    return __DIR__ . 'src/configs/';
}

function discover_path($path)
{
    return str_replace('.', '/', $path);
}
