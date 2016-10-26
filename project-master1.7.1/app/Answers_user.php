<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers_user extends Model
{
    public function vraag()
    {
    	
    	return $this->belongsTo(Vraag::class);
    	
    }

}
