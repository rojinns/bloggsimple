<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class articles extends Model
{
    //

    protected $fillable = [
    	'name',
    	'body',
    	'published_at',
    	'user_id'
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now());
    }


    public function scopeUnpublished($query)
    {
    	$query->where('published_at', '>=', Carbon::now());
    }


    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    public function user()
    {
    	$this->belongsTo('App\User');
    }



}




