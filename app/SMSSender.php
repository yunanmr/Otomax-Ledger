<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SMSSender extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sms_sender';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'id';
}
