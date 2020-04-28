<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'terminal';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'kode';
}
