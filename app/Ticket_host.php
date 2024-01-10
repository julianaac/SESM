<?php

namespace sesm;

use Illuminate\Database\Eloquent\Model;

class Ticket_host extends Model
{
    public function kid(){
        return $this->belongsTo('Kid');
    }
    
}
