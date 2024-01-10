<?php

namespace sesm;

use Illuminate\Database\Eloquent\Model;

class Data_health extends Model
{
    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
