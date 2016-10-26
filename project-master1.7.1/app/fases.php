<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fases extends Model
{
     protected $fillable = ['title', 'beschrijving' , 'datum'];

    public static function boot()
    {
        parent::boot();

        static::deleting(function($model) {
            $model->products()->detach();
        });
    }


    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

}
