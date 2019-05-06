<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    protected $table = 'note';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content'];
}
