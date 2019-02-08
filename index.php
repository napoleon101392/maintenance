<?php

require "vendor/autoload.php";

use Napoleon\Maintenance\Maintenance;

(new Maintenance)->observer();
