<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'departments';

    public $primaryKey = 'id';

    public $timestamps = true;
}
