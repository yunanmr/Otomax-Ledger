<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengirim extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pengirim';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'pengirim';
}
