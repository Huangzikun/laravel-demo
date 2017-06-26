<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//表 => posts
class Post extends Model
{
    protected $guarded;//不可以注入的字段
    protected $fillable = ['title', 'content', 'user_id'];//允许注入的字段

    //关联用户
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
