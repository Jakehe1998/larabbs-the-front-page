<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// 生成数据集合
        $users = factory(User::class)->times(10)->create();

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'Jake';
        $user->email = 'www.1240035451@qq.com';
        $user->avatar = 'http://larabbs.com/uploads/images/avatars/202011/23/1_1606119582_hOLcogYcHl.jpg';
        $user->save();
    }
}
