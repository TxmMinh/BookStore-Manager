<?php

namespace App\Helpers;

class Helper
{
    public static function active($active = 0)
    {
        return $active == 0 ? '<span class="btn btn-danger btn">NO</span>'
            : '<span class="btn btn-success btn-xs">YES</span>';
    }
}
