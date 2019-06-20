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
    return view('comments.index')
                ->with('comments', $comments);
  }

  public function show($hashid) {
    $comment = Comment::where('hashid', $hashid)->first();

    if (!$comment) {
      return redirect('/comments');
    }

    return view('comments.show')
                ->with('comment', $comment);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required|max:10',
      'body' => 'required'
    ]);

    $hashids = parent::init_hashids();
    $comment = new Comment();
    $comment->title = $request->title;
    $comment->body = $request->body;
    $comment->save();
    $comment->hashid = $hashids->encode($comment->id);
    $comment->save();
    return redirect('/comments');
  }
}
