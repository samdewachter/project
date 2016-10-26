<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = array('vraag_id','antwoord');

    public function vraag()
    {
    	return $this->belongsTo(Vraag::class);
    }
}
