<?php

class Post extends Eloquent {



	protected $fillable = array('title', 'body', 'thumbnail');


    public function user()
    {
        return $this->belongsTo('User');
    }



}