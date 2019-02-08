<?php

namespace Napoleon\Maintenance;

class Maintenance
{
    public function observer()
    {
        if (!env('APP_ON_MAINTENANCE')) {
            throw new Exception("Error Processing Request", true);
        }

        return (new Engine)->start();
    }
}
