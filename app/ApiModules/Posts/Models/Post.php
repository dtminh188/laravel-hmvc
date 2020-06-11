<?php

namespace App\ApiModules\Posts\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Notifiable;

    protected $table = 'posts';
}
