<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reseller extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reseller';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'kode';
}
