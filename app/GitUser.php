<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GitUser extends Model
{
        protected $fillable = [
        'nickname', 'email','avatar', 'github_id'
    ];
}
