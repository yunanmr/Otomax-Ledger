<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemakai extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pemakai';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'kode';
}
