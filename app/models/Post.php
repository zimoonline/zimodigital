<?php

class Post extends Eloquent {



	protected $fillable = array('title', 'body', 'thumbnail');

	public static $rules = array(
		'title' 	=> 'required',
		'body' 		=> 'required',
		'thumbnail' => 'required'
		
	);

    public function user()
    {
        return $this->belongsTo('User');
    }



}