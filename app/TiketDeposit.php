<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiketDeposit extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tiket_deposit';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'kode';
}
