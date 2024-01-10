<?php

namespace sesm;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    public function documentation()
    {
        return $this->belongsTo('Documentation');
    }
    public function ticket_host()
    {
        return $this->belongsTo('Ticket_host');
    }
}
