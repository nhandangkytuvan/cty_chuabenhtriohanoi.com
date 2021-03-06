<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $fillable = ['id','user_id','term_id','name','avatar','alias','status','type','description','content','orther'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function term()
    {
        return $this->belongsTo('App\Term');
    }
}
