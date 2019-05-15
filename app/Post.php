<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public $timestamps = true;

  protected $fillable = ['title', 'body', 'user_id', 'created_at', 'updated_at', 'photo'];

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
