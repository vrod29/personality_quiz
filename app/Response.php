<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
  protected $table = 'response';

  public function answer()
    {
        return $this->hasOne('App\Answer', 'id', 'answer_id');
    }
}
