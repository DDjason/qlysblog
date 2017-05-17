<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content'];

    
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
