<?php
// 定数の定義
// 利用時は controller や view の中で次のように記述すれば良い
//       \Config::get('const.PRIVATE')

return array(
  // 環境定数

  // ハッシュIDのソルト
  'HASH_SALT' => env('HASH_SALT', 'This is a salt'),

  // ハッシュIDの最低長
  'HASH_LENGTH' => env('HASH_LENGTH', 10),
);
