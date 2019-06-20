<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hashids\Hashids;
// sudo yum install --enablerepo=remi --enablerepo=remi-php71 php-gmp
use App\Comment;

class CommentsController extends Controller
{
  public function index() {
    $comments = Comment::get();
    dd($comments);
  }
}
