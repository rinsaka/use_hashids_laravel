<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hashids\Hashids;
// sudo yum install --enablerepo=remi --enablerepo=remi-php71 php-gmp


class CommentsController extends Controller
{
  public function index() {
    $hashids = new Hashids();
    $hash_id = $hashids->encode(1);
    dd('comments@index', $hash_id);
  }
}
