<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBank extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'data_bank';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'kode';
}
