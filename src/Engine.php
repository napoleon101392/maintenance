<?php

namespace Napoleon\Maintenance;

class Engine
{
    public function start()
    {
        if (!in_array($_SERVER['REMOTE_ADDR'], config('black_listed')) ||
            !in_array($_SERVER['REMOTE_ADDR'], config('white_listed'))) {

            throw new Exception("On engine error", false);
        }

        return view('404');
    }
}
