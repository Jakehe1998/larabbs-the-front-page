<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// 数据库没有 created_at 跟 updated_at 这两个字段，告诉数据库创建和更新不需要维护这两字段
    public $timestamps = false;

    protected $fillablt = [
    	'name', 'description',
    ];
}
