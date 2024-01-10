<?php

namespace sesm;

use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    public function kid(){
        return $this->belongsTo('Kid');
    }
    
}
