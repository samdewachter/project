<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vraag extends Model
{
    protected $fillable = array('linkedProject', 'vraag', 'openvraag', 'optie1', 'optie2', 'optie3');

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

        public function answers()
    {
        return $this->hasMany(Answer::class);
    }

        public function answers_user()
    {
        return $this->hasMany(Answers_user::class);
    }
}
