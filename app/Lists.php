<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    protected $primaryKey = 'list_id';
    protected $guarded = ['list_id'];
}
