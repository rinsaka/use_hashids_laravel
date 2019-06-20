<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hashids\Hashids;
// sudo yum install --enablerepo=remi --enablerepo=remi-php71 php-gmp


class CommentsController extends Controller
{
  public function index() {
    $hashids = new Hashids('This is a salt', 10);
    $hash_id = $hashids->encode(2);
    dd('comments@index', $hash_id);
  }
}
