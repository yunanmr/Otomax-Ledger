<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'transaksi';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'kode';
}
