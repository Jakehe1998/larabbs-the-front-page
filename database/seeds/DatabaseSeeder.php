<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	// 注意顺序 先生成用户数据，再生成话题数据，最后生成回复数据
        $this->call(UsersTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
		$this->call(RepliesTableSeeder::class);
    }
}
