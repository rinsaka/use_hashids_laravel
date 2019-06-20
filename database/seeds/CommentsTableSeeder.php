<?php

use Illuminate\Database\Seeder;
use Hashids\Hashids;
use App\Http\Controllers\Controller;

class CommentsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // 一旦中身を削除する
    DB::table('comments')->delete();

    // $hashids = new Hashids('This is a salt', 10);
    $hashids = Controller::init_hashids();

    DB::table('comments')->insert([
        'hashid' => $hashids->encode(1),
        'title' => '最初のコメント',
        'body' => '最初のコメントです！',
        'created_at' => '2019-06-20 11:04:00',
        'updated_at' => '2019-06-20 11:04:00'
    ]);

    DB::table('comments')->insert([
        'hashid' => $hashids->encode(2),
        'title' => '2つ目',
        'body' => '2つ目のコメントです！',
        'created_at' => '2019-06-20 11:04:30',
        'updated_at' => '2019-06-20 11:04:30'
    ]);

    DB::table('comments')->insert([
        'hashid' => $hashids->encode(3),
        'title' => '<三個目>のコメント',
        'body' => 'シーダによってテストデータを設定します．',
        'created_at' => '2019-06-20 11:05:00',
        'updated_at' => '2019-06-20 11:05:00'
    ]);
  }
}
