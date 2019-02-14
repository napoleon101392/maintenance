<?php

namespace Napoleon\Maintenance;

class Maintenance
{
    public function observer()
    {
        if (!env('APP_ON_MAINTENANCE')) {
            return;
        }

        (new Engine)->start();

        exit;
    }
}
