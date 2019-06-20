<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Hashids\Hashids;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function init_hashids() {
      $hashids = new Hashids(\Config::get('const.HASH_SALT'), \Config::get('const.HASH_LENGTH'));
      return $hashids;
    }
}
