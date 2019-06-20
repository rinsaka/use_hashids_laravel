<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>コメント一覧</title>
</head>
<body>
    <h1>コメント一覧</h1>
    <ul>
      @foreach ($comments as $comment)
        <li>
          <a href="{{ action('CommentsController@show', $comment->hashid) }}">
            {{ $comment->hashid }} : {{ $comment->title }}
          </a>
        </li>
      @endforeach
    </ul>

    <h1>コメント投稿</h1>
    <div>
      <form method="post" action="{{ url('/comments') }}">
        @csrf
        <p>
          <label for="title">Title: </label>
          <input type="text" name="title" id="title" value="{{ old('title') }}">
          @if ($errors->has('title'))
            <span class="error">{{ $errors->first('title') }}</span>
          @endif
        </p>

        <p>
          <label for="body">Body: </label>
          <textarea name="body" rows="4" cols="50">{{ old('body') }}</textarea>
          @if ($errors->has('body'))
            <span class="error">{{ $errors->first('body') }}</span>
          @endif
        </p>

        <p>
          <input type="submit" value="Submit">
        </p>
      </form>
    </div>
</body>
</html>
