<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'produk';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'kode';
}
