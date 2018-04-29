<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DustBin extends Model
{
    protected $fillable = ['dust_bin_id', 'operator', 'location', 'status'];
}
